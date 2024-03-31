<?php

namespace App\Services\Product;

use App\Models\Attachment;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductService
{

    public function store($data, $media)
    {
        $product = Product::create([...$data, 'user_id' => Auth::id()]);
        if ($media) {
            $year = date('Y');
            $month = date('F');
            foreach ($media as $file) {

                $filename =  Str::uuid() . '_' . time() . '_' . $file->getClientOriginalName();

                $path = $file->storeAs("Products/{$year}/{$month}", $filename, 'local');

                Attachment::create([
                    'product_id' => $product->id,
                    'path' => $path,
                    'type' => $file->getClientMimeType(),
                    'name' => $file->getClientOriginalName()
                ]);
            }
        }

        return Product::find($product->id);
    }
}
