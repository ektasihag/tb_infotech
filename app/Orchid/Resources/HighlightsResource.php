<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Sight;
use Illuminate\Http\Request;
use App\Models\Highlights;



class HighlightsResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model =\App\Models\Highlights::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
         
     return [
            
                Input::make('title')
                ->title('Title')
                ->placeholder('Enter title'),

            Input::make('description')
                ->title('Description')
                ->placeholder('Enter description'),

           picture::make('image')
                ->title('Image')
                  ->name('image') // Ensure this line is present
                   ->help('Upload image')
                ->storage('/home_images')
                ->rules('nullable|image|mimes:jpg,jpeg,png,gif|max:2048'),
                
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
            TD::make('description'),
            TD::make('image')->render(function ($model) {
                    return $model->image
                        ? '<img src="' . asset('storage/home_images/' . $model->image) . '" width="100">'
                        : 'N/A';
                })
                ->width('150px'),

              TD::make('created_at', 'Date of creation')
                ->render(function ($model) {
                   return $model->created_at ? $model->created_at->toDateTimeString() : 'N/A';

                }),

            TD::make('updated_at', 'Update date')
                ->render(function ($model) {
                    return $model->created_at ? $model->created_at->toDateTimeString() : 'N/A';

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
        Sight::make('description'),
        Sight::make('image')->render(function ($model) {
            return $model->image
                ? '<img src="' . asset('storage/home_images/' . $model->image) . '" width="100">'
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

     
}
