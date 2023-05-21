<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ecommerce\Order;
use App\Models\Ecommerce\Product;
use Shakurov\Coinbase\Facades\Coinbase;

class OrderHistory extends Component
{
    public function eventCheckout()
    {
        return;
        $events = Coinbase::getEvents();
        $orders = $this->getAllOrders();

        // $charges = Coinbase::getCharges();
        dd($events);

        foreach($events as $item){
            if($item['data']['id'] == $orders[$item['data']['id']]['id']){
                Order::where('product_id')->update();
            }

            if($item['id'] == $this->checkout && $item['type'] == 'charge:confirmed'){

                Order::create();

                return redirect(route('order.index'));
            }
        }
    }

    public function getAllOrders()
    {
        $data = [];
        $orders =  Order::all();

        foreach($orders as $item){
            $data += [$item['product_id'] => $item];
        }

        return $data;
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

    public function render()
    {
        $orders = Order::where('user_id', auth()->id())->get();
        $products = $this->getAllMyProducts();
        return view('livewire.order-history', compact('orders', 'products'));
    }
}
