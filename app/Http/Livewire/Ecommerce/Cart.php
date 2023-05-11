<?php

namespace App\Http\Livewire\Ecommerce;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Ecommerce\Product;
use Shakurov\Coinbase\Facades\Coinbase;
use App\Models\Ecommerce\Cart as CartModel;
use App\Models\Ecommerce\Checkout;

class Cart extends Component
{
    protected $listeners = ['refreshComponent' => '$refresh'];

    public function checkoutItem()
    {
        $metadata = [];
        $total = User::where('id', auth()->id())->first()->cart_total;
        $carts = $this->getCarts();
        $products = $this->getAllProducts();

        foreach($carts as $item){
            $metadata += [Str::snake($products[$item['product_id']]['name']) => $item['quantity']];
        }

        $charge = Coinbase::createCharge([
            'name' => auth()->user()->username,
            'description' => (auth()->user()->is_admin == 1)? 'Admin Account' : 'User Account',
            'local_price' => [
                'amount' => $total,
                'currency' => 'USD',
            ],
            'pricing_type' => 'fixed_price',
            'metadata' => $metadata
        ])['data'];

        dd($charge);

        Checkout::create([
            'user_id' => auth()->id(),
            'product_id' => $charge['id'],
            'transaction_id' => '',
            'total_price' => '',
            'no_of_item' => count($carts)
        ]);

        $this->emit('checkoutUrl', $charge['hosted_url']);

        // sleep(5);
        // return redirect(route('history.index'))->with(['message' => 'Redirecting to history page...']);
        // return redirect($charge['hosted_url']);
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
        CartModel::where('id', $id)->delete();
    }

    public function quantityUp($id)
    {
        $currentCart = CartModel::where('id', $id)->first();
        $currentCart->update(['quantity' => $currentCart->quantity+1]);
    }

    public function quantityDown($id)
    {
        $currentCart = CartModel::where('id', $id)->first();
        
        if($currentCart->quantity != 1){
            $currentCart->update(['quantity' => $currentCart->quantity-1]);
        }
    }

    public function getProduct($id)
    {
        // dd(Coinbase::getCheckout($id)['data']);
        return Coinbase::getCheckout($id)['data'];
        
        // return Product::where('id', $id)->first();
    }

    public function getCarts()
    {
        $myCarts = [];

        $carts = CartModel::all();
        foreach($carts as $item){
            $myCarts += [$item->id => $item];
        }

        return $myCarts;
    }

    public function getQuantityOfAllCarts()
    {
        $quantity = [];

        $myCarts = $this->getCarts();

        foreach($myCarts as $item){
            $quantity += [$item->id => $item->quantity];
        }

        return $quantity;
    }

    public function initializeProducts() //Need to be test first before use in production
    {
        $products = $this->getAllProducts();
        $MyAllProducts = $this->getAllMyProducts();

        foreach($products as $item){
            if($item->updated_at != $MyAllProducts[$item->id] || !array_key_exists($item->id, $MyAllProducts)){
                Product::create($item);
            }
        }
    }

    public function getMyProduct($id) //Need to be test first before use in production
    {
        return $this->getAllMyProducts()[$id];
    }

    public function getAllMyProducts()
    {
        $products = [];
        $MyProducts = Product::all();

        foreach($MyProducts as $item){
            $products += [$item['product_id'] => $item];
        }

        return $products;
    }

    public function getAllProducts()
    {
        $products = [];
        $checkouts =  Coinbase::getCheckouts()['data'];

        foreach($checkouts as $item){
            $products += [$item['id'] => $item];
        }

        return $products;
    }

    public function getTotal()
    {
        $total = 0;
        $carts = CartModel::where('user_id', auth()->id())->get();
        $currentUser = User::where('id', auth()->id())->first();
        $products = $this->getAllProducts();
        $quantity = $this->getQuantityOfAllCarts();

        foreach($carts as $item){
            $total += $products[$item->product_id]['local_price']['amount']*$quantity[$item->id];
        }

        return $total;
    }

    public function render()
    {
        // $quantity = $this->getQuantityOfAllCarts();
        // $products = $this->getAllProducts();
        // $carts = $this->getCarts();
        // $total = $this->getTotal();

        // return view('livewire.ecommerce.cart', compact('quantity', 'products', 'carts', 'total'));


        return view('livewire.ecommerce.cart', [
            'quantity' => $this->getQuantityOfAllCarts(), 
            'products' => $this->getAllProducts(), 
            'carts' => $this->getCarts(), 
            'total' => $this->getTotal()
        ]);
    }
}
