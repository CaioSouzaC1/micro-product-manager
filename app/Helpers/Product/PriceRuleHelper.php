<?php

namespace App\Helpers\Product;

class PriceRuleHelper
{
    static public function rule(): array
    {
        return [
            'numeric',
            'required',
            'min:1'
        ];
    }

    static public function attribute(): string
    {
        return 'preço do produto';
    }
}
