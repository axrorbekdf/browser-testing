<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Events\ProductCreated;
use App\Events\ProductUpdated;
use App\Events\ProductDeleted;
use App\Observers\ProductObserver;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name','price'];

    
}
