<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReviewModel extends Model
{
    use HasFactory;
    public $table="product_reviews"; 
    protected $fillable = [
        'review',
        'review_rate',
        'user_id',
        'product_id'
    ];
}
