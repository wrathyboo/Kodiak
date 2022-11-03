<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'items',
    ]; 
    protected $table = 'inventory';
    protected $cast = [
        'items' => 'array'
    ];
   public function profile(){
    return $this->belongsTo(Profiles::class,'id');
   }
}
