<?php

namespace App\Helpers\Product;

class IsActiveRuleHelper
{
    static public function rule(): array
    {
        return [
            'boolean',
            'sometimes',
        ];
    }

    static public function attribute(): string
    {
        return 'status do produto';
    }
}
