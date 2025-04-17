<?php

namespace App\Orchid\Resources;

use App\Models\OurWork;
use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Fields\Upload;
use Orchid\Screen\Sight;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\File;

class OurWorkResource extends Resource
{
    public static $model = OurWork::class;

    public function fields(): array
    {
        return [
            Upload::make('image')
                ->title('Image')
                ->acceptedFiles('image/*')
                ->name('image')
                ->disk('public') // Correctly specify the disk
               ->path('our_work_images')
                ->help('Upload an image')
                ->rules('nullable|image|mimes:jpg,jpeg,png,gif|max:2048'),
        ];
    }

    public function columns(): array
    {
        return [
            TD::make('id'),

            TD::make('image')->render(function ($model) {
                return $model->image
                    ? "<img src='" . asset('storage/our_work_images/' . $model->image) . "' width='100'>"
                    : 'No Image';
            }),

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
            Sight::make('image')
                ->render(function ($model) {
                    return $model->image
                        ? '<img src="' . asset('storage/our_work_images/' . $model->image) . '" width="100">'
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

    public function filters(): array
    {
        return [];
    }
}
