<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;
use App\Models\Image;
use App\Models\SecondaryCategory;
use App\Models\Stock;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'secondary_category_id',
        'name',
        'information',
        'price',
        'sort_order',
        'is_selling',
        'image1',
        'image2',
        'image3',
        'image4',
    ];

    public function shop(){
        return $this->belongsTo(Shop::class);
    }

    public function image() {
        return $this->belongsTo(Image::class);
    }

    public function secondaryCategory() {
        return $this->belongsTo(SecondaryCategory::class);
    }

    public function category() {
        return $this->belongsTo(SecondaryCategory::class, 'secondary_category_id');
    }

    public function imageFirst() {
        return $this->belongsTo(Image::class, 'image1', 'id');
    }
    public function imageSecond() {
        return $this->belongsTo(Image::class, 'image2', 'id');
    }
    public function imageThird() {
        return $this->belongsTo(Image::class, 'image3', 'id');
    }
    public function imageFourth() {
        return $this->belongsTo(Image::class, 'image4', 'id');
    }

    public function Stock() {
        return $this->hasMany(Stock::class);
    }
}
