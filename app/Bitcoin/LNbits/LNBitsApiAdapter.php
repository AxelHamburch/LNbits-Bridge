<?php

namespace App\Bitcoin\LNbits;

use Illuminate\Support\Facades\Http;

class LNBitsApiAdapter implements \App\Bitcoin\WalletAPIInterface
{
    public function checkConnection(): array|null
    {
        $response = Http::lnbitsRead()
            ->get('api/v1/wallet');

        if ($response->json('id')) {
            return $response->json('balance');
        }

        return $response->json();
    }

    public function getPayments(): array|null
    {
        return Http::lnbitsRead()
            ->get('api/v1/payments')->json();
    }
}
