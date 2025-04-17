<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class CustomerSatisfaction extends Model{
    use AsSource, Filterable, Attachable;
    
     protected $table ='customer_satisfaction'; // Ensure this is the correct table name
    protected $fillable = [
        'title',
        'description',
        'front_image',
        'back_image',
    ];
}
