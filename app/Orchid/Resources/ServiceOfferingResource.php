<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Sight;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Crud\ResourceRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\ServiceOffering;
use Orchid\Attachment\File;
use Orchid\Screen\Fields\Upload;


class ServiceOfferingResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = ServiceOffering::class;

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
                ->path('public/service_offering_images'),

            Input::make('title')
                ->title('Title')
                ->placeholder('Service Title')
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
            TD::make('description'),
            TD::make('image')->render(function ($model) {
                return $model->image
                    ? '<img src="' . asset('storage/service_offering_images/' . $model->image) . '" width="100">'
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
                    ? '<img src="' . asset('storage/service_offering_images/' . $model->image) . '" width="100">'
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
    // public function save(ResourceRequest $request, Model $model): void
    // {
    //     $data = $request->validate([
    //         'title' => 'required|string|max:255',
    //         'description' => 'required|string',
    //         'image' => 'nullable|image|max:2048', // Validate image file
    //     ]);

    //     if ($request->hasFile('image')) {
    //         // Delete the old image if it exists
    //         if ($model->image) {
    //             Storage::delete('public/service_offering_images/' . $model->image);
    //         }
    //         $data['image'] = $request->file('image')->store('public/service_offering_images');
    //     } else {
    //         // Use the existing image if no new image is uploaded
    //         $data['image'] = $model->image;
    //     }

    //     $model->fill($data);
    //     $model->save();
    // }
}
