<?php

namespace LaraDev;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['title','name','description','rental_price','sale_price'];
    protected $table = 'properties';
    public $timestamps = false;
}
