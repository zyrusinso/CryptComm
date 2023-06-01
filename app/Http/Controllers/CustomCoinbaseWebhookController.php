<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shakurov\Coinbase\CoinbaseWebhookController;

class CustomCoinbaseWebhookController extends CoinbaseWebhookController
{
    public function handleWebhook(Request $request)
    {
        info($request->all());
        dd($request->all());
        
        return parent::handleWebhook($request);
    }
}
