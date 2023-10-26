<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class DrawerRows extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            Input::make('item1')->title('Input 1')->name('ip1'),
            Input::make('item2')->title('Input 2')->name('ip2'),
            Input::make('item3')->title('Input 3')->name('ip3'),
            Input::make('item4')->title('Input 4')->name('ip4'),
        ];
    }
}
