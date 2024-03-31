<?php

namespace App\Models\Logs;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class LogProduct extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'log_products';

    protected $fillable = [
        'product_id',
        'log_type'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'id', 'product_id');
    }
}
