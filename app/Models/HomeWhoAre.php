<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class HomeWhoAre extends Model
{
   use AsSource, Filterable, Attachable;

    protected $table ='home_who_are'; // Ensure this is the correct table name
    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'image',
    ];

  
}
