<?php

namespace App\Models;

use App\Models\Logs\LogProduct;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'is_active',
        'user_id'
    ];

    protected $appends = [
        'attachments'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function attachments(): HasMany
    {
        return $this->hasMany(Attachment::class);
    }

    public function getattachmentsAttribute(): Collection
    {
        return $this->attachments()->get();
    }

    public function logs(): HasMany
    {
        return $this->hasMany(LogProduct::class);
    }
}
