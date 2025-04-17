<?php

namespace App\Orchid\Resources;

use App\Models\ChooseUs;
use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Sight;
use Illuminate\Database\Eloquent\Model;

class ChooseUsResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = ChooseUs::class;

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
                ->required(),

            TextArea::make('description')
                ->title('Description')
                ->required(),

            picture::make('front_image')
                ->title('Front Image')
                ->acceptedFiles('image/*')
                ->name('front_image') // Ensure this line is present
                ->storage('/about_images')
                ->help('Upload the front image')
                 ->rules('nullable|image|mimes:jpg,jpeg,png,gif|max:2048'),

            picture::make('back_image')
                ->title('Back Image')
                ->acceptedFiles('image/*')
                ->name('back_image') // Ensure this line is present
                ->storage('/about_images')
                ->help('Upload the back image')
                 ->rules('nullable|image|mimes:jpg,jpeg,png,gif|max:2048'),
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @return array
     */
   
    /**
     * Get the columns displayed by the resource.
     *
     * @return array
     */
    public function columns(): array
    {
        return [
            TD::make('id'),

            TD::make('title'),

            TD::make('description'),

            TD::make('front_image')->render(function ($model) {
                return $model->front_image
                    ? "<img src='" . asset('storage/about_images/' . $model->front_image) . "' width='100'>"
                    : 'No Image';
            }),

            TD::make('back_image')->render(function ($model) {
                return $model->back_image
                    ? "<img src='" . asset('storage/about_images/' . $model->back_image) . "' width='100'>"
                    : 'No Image';
            }),

            TD::make('created_at')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                }),

            TD::make('updated_at')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                }),
        ];
    }

    /**
     * Get the legend displayed by the resource.
     *
     * @return array
     */
    public function legend(): array
    {
        return [
            Sight::make('title'),

            Sight::make('description'),

            Sight::make('front_image')
                ->render(function ($model) {
                    return $model->front_image
                        ? '<img src="' . asset('storage/about_images/' . $model->front_image) . '" width="100">'
                        : 'No Image';
                }),

            Sight::make('back_image')
                ->render(function ($model) {
                    return $model->back_image
                        ? '<img src="' . asset('storage/about_images/' . $model->back_image) . '" width="100">'
                        : 'No Image';
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
