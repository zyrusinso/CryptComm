<div>
    <div wire:poll='eventCheckout'></div>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>{{ __('app.history.order.title') }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="order-history table-responsive">
                            <table class="table table-bordernone display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th scope="col">@lang('app.ecommerce.transaction_id')</th>
                                        <th scope="col">@lang('app.ecommerce.product_name')</th>
                                        <th scope="col">@lang('app.quantity')</th>
                                        <th scope="col">@lang('app.ecommerce.price')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                        <tr>
                                            <td>{{ $item->transaction_id }}</td>
                                            <td>
                                                <div class="product-name">
                                                    <a href="#">{{ $products[$item->product_id]['name'] }}</a>
                                                    <div class="order-process"><span
                                                            class="order-process-circle"></span>{{ $item->status }}
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->amount }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
