<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Sight;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Upload;
use Orchid\Crud\ResourceRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\HomeWhoAre;

class HomeWhoAreResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = HomeWhoAre::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            Upload::make('image')
                ->title('Image')
                ->help('Upload an image for the service offering.')
                ->path('public/home_who_are_image'),

            Input::make('title')
                ->title('Title')
                ->placeholder('Service Title')
                ->required(),

            Input::make('sub_title')
                ->title('Sub Title')
                ->placeholder('Service Sub Title')
                ->required(),

            Input::make('description')
                ->title('Description')
                ->placeholder('Service Description')
                ->required(),
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
            TD::make('title'),
            TD::make('sub_title'),
            TD::make('description'),
            TD::make('image')->render(function ($model) {
                return $model->image
                    ? '<img src="' . asset('storage/home_who_are_image/' . $model->image) . '" width="100">'
                    : 'N/A';
            })->width('150px'),

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
            Sight::make('id'),
            Sight::make('title'),
            Sight::make('sub_title'),
            Sight::make('description'),
            Sight::make('image')->render(function ($model) {
                return $model->image
                    ? '<img src="' . asset('storage/home_who_are_image/' . $model->image) . '" width="100">'
                    : 'N/A';
            }),
            Sight::make('created_at')->render(function ($model) {
                return $model->created_at ? $model->created_at->toDateTimeString() : 'N/A';
            }),
            Sight::make('updated_at')->render(function ($model) {
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

    /**
     * Handle saving the resource.
     *
     * @param ResourceRequest $request
     * @param Model $model
     * @return void
     */
  

}