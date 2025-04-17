<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class CompanyValues extends Model
{
    use AsSource, Filterable, Attachable;

    protected $table = 'company_values'; // Ensure this is the correct table name

    protected $fillable = [
        'title1',
        'description1',
        'image',
        'title2',
        'description2',
    ];
}
