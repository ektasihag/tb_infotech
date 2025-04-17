<?php

namespace App\Orchid\Screens\Contacts;

use App\Models\Contacts; // Ensure the correct model is used
use Orchid\Screen\Screen;
use Orchid\Screen\Sight;
use Orchid\Screen\Layouts\Legend;
use Orchid\Screen\Actions\Link;

class ContactShowScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @param Contact $contact
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'contact' => Contacts::findOrFail(request()->route('contact')),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Contact Details';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Edit')
                ->icon('pencil')
                ->route('platform.contacts.edit', $this->query()->get('contact')->id),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Legend::make('contact', [
                Sight::make('id'),
                Sight::make('title'),
                Sight::make('description'),
                Sight::make('image')
                    ->label('Image')
                    ->render(fn($contact) => "<img src='{$contact->image}' width='100' height='100'>"),
                Sight::make('banner_image')
                    ->label('Banner Image')
                    ->render(fn($contact) => "<img src='{$contact->banner_image}' width='100' height='100'>"),
                // Add other fields as necessary
            ]),
        ];
    }
}
