<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applist extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'name',
        'status'
    ]; 
    protected $table = 'applist';
    protected $cast = [
        'genres' => 'array'
    ];
}
