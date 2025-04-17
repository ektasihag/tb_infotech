<?php
namespace App\Orchid\Screens\Contacts;

use Orchid\Screen\Screen;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;
use App\Models\Contacts;

class ContactListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
         return [
            'contacts' => Contacts::all(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Contacts List';
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
            Table::make('contacts', [
                TD::make('id', 'ID'),
                TD::make('title', 'Title'),
                TD::make('description', 'Description'),
                TD::make('image', 'Image')->render(function ($contact) {
                    return "<img src='{$contact->image}' width='50' height='50'>";
                }),
                TD::make('banner_image', 'Banner Image')->render(function ($contact) {
                    return "<img src='{$contact->banner_image}' width='50' height='50'>";
                }),
                TD::make('edit', 'Edit')->render(function ($contact) {
                    return Link::make('Edit')->route('platform.contacts.edit', $contact->id);
                }),
                TD::make('delete', 'Delete')->render(function ($contact) {
                    return Button::make('Delete')
                        ->icon('trash')
                        ->method('delete', [
                            'id' => $contact->id,
                        ])
                        ->confirm('Are you sure you want to delete this contact?');
                }),
            ]),
        ];
    }

    /**
     * Method to delete a contact.
     *
     * @param Contact $contact
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('platform.contacts.list')
            ->with('success', 'Contact deleted successfully.');
    }
}