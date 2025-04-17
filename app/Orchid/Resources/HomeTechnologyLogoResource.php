<?php

namespace App\Orchid\Resources;

use App\Models\HomeTechnologyLogo;
use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Sight;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\File;

class HomeTechnologyLogoResource extends Resource
{
    public static $model = HomeTechnologyLogo::class;

    public function fields(): array
    {
        return [
           upload::make('image')
                ->title('Image')
                ->help('Upload an image for the service offering.')
                 ->multiple() // Allow multiple uploads
                ->path('public/our_technology_logo'),
        ];
    }

    public function columns(): array
    {
        return [
            TD::make('id'),

             TD::make('image')->render(function ($model) {
                return $model->image
                    ? '<img src="' . asset('storage/our_technology_logo/' . $model->image) . '" width="100">'
                    : 'N/A';
            })->width('150px'),
            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at ? $model->created_at->toDateTimeString() : 'N/A';
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at ? $model->updated_at->toDateTimeString() : 'N/A';
                }),
        ];
    }

    public function legend(): array
    {
        return [
            Sight::make('image')->render(function ($model) {
                return $model->image
                    ? '<img src="' . asset('storage/our_technology_logo/' . $model->image) . '" width="100">'
                    : 'N/A';
            }),
            Sight::make('created_at')
                ->render(function ($model) {
                    return $model->created_at ? $model->created_at->toDateTimeString() : 'N/A';
                }),

            Sight::make('updated_at')
                ->render(function ($model) {
                    return $model->updated_at ? $model->updated_at->toDateTimeString() : 'N/A';
                }),
        ];
    }

    public function filters(): array
    {
        return [];
    }
}
