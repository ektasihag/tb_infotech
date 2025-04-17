<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class HomeTechnology extends Model
{
       use AsSource, Filterable, Attachable;

    protected $table ='homes'; // Ensure this is the correct table name
    protected $fillable = [
        'title',
        'description',
        
    ];
    public function images()
    {
        return $this->hasMany(HomeTechnologyLogo::class, 'id');
    }

    public function storeImage($file)
    {
        if ($file) {
            return $file->store('images', 'public');
        }
        return null;
    }
}

    
