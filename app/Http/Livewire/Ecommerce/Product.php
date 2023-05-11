<?php

namespace App\Http\Livewire\Ecommerce;

use Livewire\Component;
use App\Models\Ecommerce\Cart;
use Vinkla\Hashids\Facades\Hashids;
use Shakurov\Coinbase\Facades\Coinbase;
use App\Models\Ecommerce\Product as ProductModel;

class Product extends Component
{
    public $quantity = 1;

    public $title;
    public $description;
    public $price;
    public $extended_description;

    protected $rules = [
        'title' => 'required|min:6',
        'description' => 'required',
        'price' => 'required',
    ];

    public function submitCustom()
    {
        $this->validate();

        $data = $this->createCheckout();

        return redirect($data['data']['hosted_url']);
    }

    public function quantityUp()
    {
        $this->quantity++;
    }

    public function quantityDown()
    {
        if($this->quantity != 1){
            $this->quantity--;
        }
    }

    public function addToCart($id)
    {
        $currentCart = Cart::where('product_id', $id)->where('user_id', auth()->id())->first();

        $data = [
            'product_id' => $id,
            'user_id' => auth()->id(),
            'quantity' => ($currentCart)? $currentCart->quantity+$this->quantity : $this->quantity
        ];

        Cart::updateOrCreate(['product_id' => $id, 'user_id' => auth()->id() ], $data);

        return redirect(route('cart.index'))->with('success', 'Successfully Added to Cart!');
    }
    
    public function resetQuantity()
    {
        $this->resetValidation();
        $this->quantity = 1;
    }

    public function createCheckout()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.commerce.coinbase.com/charges',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
            "name": "'.$this->title.'",
            "description": "'. $this->description.'",
            "extended_description": "'.$this->extended_description.'",
            "pricing_type": "fixed_price",
            "requested_info": [
                "name"
            ],
            "local_price": {
                "amount": "'. $this->price .'",
                "currency": "USD"
            }
        }',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Accept: application/json',
            'X-CC-Api-Key: 8b4c4dd6-f6a0-42fd-ba9c-48e1f0c55dbd'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response, true);
    }

    public function render()
    {
        $products = Coinbase::getCheckouts()['data'];

        // $checkout = Coinbase::createCheckout([
        //     'name' => 'Sample Product 2',
        //     'description' => 'Sample product Description',
        //     'extended_description' => 'Extended Description',
        //     'local_price' => [
        //         'amount' => 100,
        //         'currency' => 'USD',
        //     ],
        //     'pricing_type' => 'fixed_price',
        //     'requested_info' => [
        //         'name',
        //     ],
        // ]);

        // dd($checkout);

        // $this->createCheckout();

        return view('livewire.ecommerce.product', compact('products'));
    }
}
