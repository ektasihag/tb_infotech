<?php

namespace App\Orchid\Screens;

use Orchid\Screen\Screen;

class ContactEditScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'contact' => contacts::find(request()->route('contact')),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Edit Contact';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
      public function layout(): iterable
    {
        return [
            Layout::rows([
                Input::make('contact.title')
                    ->title('Title')
                    ->placeholder('Enter contact title here'),
                
                Input::make('contact.description')
                    ->title('Description')
                    ->placeholder('Enter contact description here'),
                
                Upload::make('contact.image')
                    ->title('Image')
                    ->placeholder('Upload an image'),
                
                Upload::make('contact.banner_image')
                    ->title('Banner Image')
                    ->placeholder('Upload a banner image'),
            ]),
        ];
    }

      /**
     * Get the validation rules that apply to save/update.
     *
     * @param Contact $contact
     * @return array
     */
    public function rules(): array
    {
        return [
            'contact.title' => [
                'required',
                'string',
                'max:255',
            ],
            'contact.description' => [
                'nullable',
                'string',
            ],
            'contact.image' => [
                'nullable',
                'image', // Ensure the file is an image
                'mimes:jpeg,png,jpg,gif', // Allow specific image types
                'max:2048', // Maximum file size in kilobytes
            ],
            'contact.banner_image' => [
                'nullable',
                'image', // Ensure the file is an image
                'mimes:jpeg,png,jpg,gif', // Allow specific image types
                'max:4096', // Maximum file size in kilobytes
            ],
        ];
    }
}
