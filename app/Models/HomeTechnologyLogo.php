<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
class HomeTechnologyLogo extends Model
{
    use AsSource, Filterable, Attachable;

    protected $table ='home_technology_logo'; // Ensure this is the correct table name
    protected $fillable = [
       'image',
        
    ];

    
}