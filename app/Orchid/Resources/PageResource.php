<?php

namespace App\Orchid\Resources;

use Orchid\Crud\Resource;
use Orchid\Screen\TD;
use Orchid\Screen\Sight;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Fields\Relation;
use Orchid\Crud\ResourceRequest;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menus;

class PageResource extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = Menus::class;

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
                ->placeholder('Enter title')
                ->required(),

            Input::make('slug')
                ->title('Slug')
                ->placeholder('Enter slug')
                ->required(),

            Input::make('sort')
                ->title('Sort Order')
                ->placeholder('Enter sort order')
                ->required()
                ->type('number'),
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
            TD::make('id')->sort(),

            TD::make('title')
                ->sort()
                ->filter(TD::FILTER_TEXT),

            TD::make('slug')
                ->sort()
                ->filter(TD::FILTER_TEXT),

            TD::make('sort')
                ->sort(),

            TD::make('created_at')
                ->render(function ($model) {
                    return $model->created_at->toDateTimeString();
                })
                ->sort(),

            TD::make('updated_at')
                ->render(function ($model) {
                    return $model->updated_at->toDateTimeString();
                })
                ->sort(),
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
            Sight::make('slug'),
            Sight::make('sort'),
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
    //         'slug' => 'required|string|max:255',
    //         'sort' => 'required|integer',
    //     ]);

    //     $model->fill($data);
    //     $model->save();
    // }
}
