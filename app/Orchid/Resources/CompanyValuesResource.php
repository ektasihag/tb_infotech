<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Sight;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Illuminate\Http\Request;
use App\Models\CompanyValues;

class CompanyValuesResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\CompanyValues::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Input::make('title1')
                ->title('Title 1')
                ->placeholder('Enter the first title'),

            Input::make('description1')
                ->title('Description 1')
                ->placeholder('Enter the first description'),

            Picture::make('image')
                ->title('Image')
                ->help('Upload an image for the company values.')
                ->storage('public/company_values_images')
                ->acceptedTypes('image/*')
                ->maxSize(2048), // Maximum file size in KB

            Input::make('title2')
                ->title('Title 2')
                ->placeholder('Enter the second title'),

            Input::make('description2')
                ->title('Description 2')
                ->placeholder('Enter the second description'),
        ];
    }

    /**
     * Get the columns displayed by the resource.
     *
     * @return TD[]
     */
    public function columns(): array
    {
        return [
            TD::make('id'),

            TD::make('title1'),
            // TD::make('description1'),
            TD::make('image')->render(function ($model) {
                return $model->image
                    ? '<img src="' . asset('storage/company_values_images/' . $model->image) . '" width="100">'
                    : 'N/A';
            })->width('150px'),

            TD::make('title2'),
            // TD::make('description2'),

            TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the sights displayed by the resource.
     *
     * @return Sight[]
     */
    public function legend(): array
    {
        return [
            Sight::make('id')
                ->title('ID'),

            Sight::make('title1')
                ->title('Title 1'),

            Sight::make('description1')
                ->title('Description 1'),

            Sight::make('image')
                ->title('Image')
                ->render(function ($model) {
                    return $model->image
                        ? '<img src="' . asset('storage/company_values_images/' . $model->image) . '" width="100">'
                        : 'N/A';
                }),

            Sight::make('title2')
                ->title('Title 2'),

            Sight::make('description2')
                ->title('Description 2'),

            Sight::make('created_at')
                ->title('Date of Creation')
                ->render(function ($model) {
                    return $model->created_at ? $model->created_at->toDateTimeString() : 'N/A';
                }),

            Sight::make('updated_at')
                ->title('Date of Update')
                ->render(function ($model) {
                    return $model->updated_at ? $model->updated_at->toDateTimeString() : 'N/A';
                }),
        ];
    }

    /**
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(): array
    {
        return [];
    }
}
