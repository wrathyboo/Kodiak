<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'username',
        'avatar',
        'birthdate', 
        'steam_id',
        'api_key',
        'created_at',
        'updated_at' 
    ]; 
    public function user(){
         return $this->belongsTo(User::class,'id');
    }
    public function inventory(){
        return $this->hasOne(Inventory::class,'id');
    }
    // protected function applist(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => json_decode($value, true),
    //         set: fn ($value) => json_encode($value),
    //     );
    // } 
}
