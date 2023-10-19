<?php

namespace App\Bitcoin;

interface WalletAPIInterface
{
    public function checkConnection(): array|null;
    public function getPayments(): array|null;
}
