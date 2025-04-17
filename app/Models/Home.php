<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Home extends Model
{
    use AsSource, Filterable, Attachable;

    protected $table ='homes'; // Ensure this is the correct table name
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    
}
