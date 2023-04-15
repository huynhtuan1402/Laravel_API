<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $table = 'Customer';
    protected $fillable = [
        'customer_name', 'customer_phone', 'customer_email', 'customer_address', 'customer_city'
    ];
    public $timestamp = false;
    protected $hidden =['created_at','updated_at']; //Thuộc tính hi
}
