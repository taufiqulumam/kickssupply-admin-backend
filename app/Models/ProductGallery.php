<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductGallery extends Model
{
    use SoftDeletes;

    protected $fillable = 
    [
        'products_id', 'photo', 'id_default'
    ];

    protected $hidden = 
    [

    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }


    //Accesor untuk mengganti URL photo
    public function getPhotoAttribute($value)
    {
        return url('storage/', $value);
    }
}
