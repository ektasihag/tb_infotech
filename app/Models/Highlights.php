<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Highlights extends Model
{
    use AsSource, Filterable, Attachable;

    protected $table ='highlights'; // Ensure this is the correct table name
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    
}
