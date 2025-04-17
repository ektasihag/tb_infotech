<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class TeamStats extends Model
{
      use AsSource, Filterable, Attachable;
    protected $table = 'team_stats'; // Ensure this is the correct table name

    protected $fillable = [
        'satisfied_clients_number',
        'satisfied_clients_title',
        'positive_feedback_number',
        'positive_feedback_title',
        'project_ongoing_number',
        'project_ongoing_title',
        'years_of_experience_number',
        'years_of_experience_title',
    ];
}
