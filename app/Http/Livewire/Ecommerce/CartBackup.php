<?php

namespace App\Http\Livewire\Ecommerce;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Ecommerce\Product;
use Shakurov\Coinbase\Facades\Coinbase;
use App\Models\Ecommerce\Cart as CartModel;

class Cart extends Component
{
    public $quantity = [];
    public $carts = [];
    public $products = [];
    public $total;
    public $checkout;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function checkoutItem()
    {
        $metadata = [];
        foreach($this->carts as $item){
            $metadata += [Str::snake($this->getProduct($item['product_id'])['name']) => $item['quantity']];
        }

        $charge = Coinbase::createCharge([
            'name' => auth()->user()->username,
            'description' => 'User Account',
            'local_price' => [
                'amount' => $this->total,
                'currency' => 'USD',
            ],
            'pricing_type' => 'fixed_price',
            'metadata' => $metadata
        ])['data'];

        $this->checkout = $charge['id'];
        // $this->emit('checkoutUrl', $charge['hosted_url']);
        // sleep(5);
        // return redirect(route('history.index'))->with(['message' => 'Redirecting to history page...']);
        return redirect($charge['hosted_url']);
    }

    public function eventCheckout()
    {
        return ;
        $events = Coinbase::getEvents()['data'];

        dd($events);

        foreach($events as $item){
            if($item['id'] == $this->checkout && $item['type'] == 'charge:confirmed'){

                Order::create();

                return redirect(route('order.index'));
            }
        }
    }

    public function removeProduct($id)
    {
        unset($this->carts[$id]);

        CartModel::where('id', $id)->delete();
        $this->fetchData();
    }

    public function quantityUp($id)
    {
        $this->quantity[$id]++;

        $currentCart = CartModel::where('id', $id)->first();
        $currentCart->update(['quantity' => $currentCart->quantity+1]);
        $this->getTotal();
    }

    public function quantityDown($id)
    {
        if($this->quantity != 1){
            $this->quantity[$id]--;

            $currentCart = CartModel::where('id', $id)->first();
            $currentCart->update(['quantity' => $currentCart->quantity-1]);
            $this->getTotal();
        }
    }

    public function getProduct($id)
    {
        return Coinbase::getCheckout($id)['data'];
        
        // return Product::where('id', $id)->first();
    }

    public function fetchData()
    {
        $this->carts = [];

        $carts = CartModel::all();
        foreach($carts as $item){
            $this->carts += [$item->id => $item];
        }

        foreach($this->carts as $item){
            $this->quantity += [$item->id => $item->quantity];
        }

        $checkouts =  Coinbase::getCheckouts()['data'];

        foreach($checkouts as $item){
            $this->products += [$item['id'] => $item];
        }
    }

    public function getTotal()
    {
        $total = 0;
        $carts = CartModel::all();

        foreach($carts as $item){
            $total += $this->products[$item->product_id]['local_price']['amount']*$this->quantity[$item->id];
        }

        $this->total = $total;
    }

    public function render()
    {
        // $charged = Coinbase::createCharge([
        //     'name' => auth()->user()->username,
        //     'description' => 'Description',
        //     'local_price' => [
        //         'amount' => 100,
        //         'currency' => 'USD',
        //     ],
        //     'pricing_type' => 'fixed_price',
        //     'metadata' => ['product_2' => 1, 'second' => 1]
        // ]);
        // dd($charge);
        $this->fetchData();
        $this->getTotal();
        return view('livewire.ecommerce.cart');
    }
}
