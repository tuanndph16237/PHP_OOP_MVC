<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model{
    protected $table = 'product_galleries';
    protected $fillable = [
        'product_id',
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}   
?>