<?php

namespace App\Helpers\Product;

class NameRuleHelper
{
    static public function rule(): array
    {
        return [
            'string',
            'required'
        ];
    }

    static public function attribute(): string
    {
        return 'nome do produto';
    }
}
