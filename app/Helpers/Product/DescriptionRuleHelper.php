<?php

namespace App\Helpers\Product;

class DescriptionRuleHelper
{
    static public function rule(): array
    {
        return [
            'string',
            'required',
            'max:500'
        ];
    }

    static public function attribute(): string
    {
        return 'descrição do produto';
    }
}
