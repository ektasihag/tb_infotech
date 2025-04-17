<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Sight;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Orchid\Attachment\File;
use Orchid\Crud\ResourceRequest;
use Orchid\Screen\Fields\Upload;

use App\Models\HomeFreeConsultation;

class HomeFreeConsultationResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\HomeFreeConsultation::class;

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            upload::make('image')
                ->title('Image')
                ->help('Upload an image for the service offering.')
                ->path('public/home_free_consultation_images'),

            Input::make('title')
                ->title('Title')
                ->placeholder('Title')
                ->required(),

            Input::make('description')
                ->title('Description')
                ->placeholder('Description')
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
            TD::make('description'),
            TD::make('image')->render(function ($model) {
                return $model->image
                    ? '<img src="' . asset('storage/home_free_consultation_images/' . $model->image) . '" width="100">'
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
            Sight::make('description'),
            Sight::make('image')->render(function ($model) {
                return $model->image
                    ? '<img src="' . asset('storage/home_free_consultation_images/' . $model->image) . '" width="100">'
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
