<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model  as Eloquent;

class Collectors extends Eloquent
{
    use HasFactory;

    //  # Name the collection 'table' for MongoDB
    //  protected $collection = "collectors";

}
