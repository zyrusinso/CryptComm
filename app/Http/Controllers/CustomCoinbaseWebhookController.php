<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Shakurov\Coinbase\CoinbaseWebhookController;

class CustomCoinbaseWebhookController extends CoinbaseWebhookController
{
    public function handleWebhook(Request $request)
    {
        dd($request->all());
        info($request->all());

        return parent::handleWebhook($request);
    }
}
