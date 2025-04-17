<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Contacts extends Model
{
    use AsSource, Filterable, Attachable;
  
/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'subject',
        'message',
        'title',  // Include title here
        'description',
        'image',
        'banner_image',
        
    ];
}