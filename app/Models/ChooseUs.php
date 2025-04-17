<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class ChooseUs extends Model
{
      use AsSource, Filterable, Attachable;
    
     protected $table ='choose_us'; // Ensure this is the correct table name
    protected $fillable = [
        'title',
        'description',
        'front_image',
        'back_image',
    ];
}