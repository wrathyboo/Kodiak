<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'order_id',
        'total',
        'payment_method', 
        'status'
    ]; 
    protected $table = 'payment_history';
}
