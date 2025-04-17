<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class ServiceOffering extends Model
{
    use AsSource, Filterable, Attachable;

    protected $table ='service_offerings'; // Ensure this is the correct table name
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

  
}
