<?php

namespace App\Orchid\Layouts;

use App\Orchid\Filters\TitleFilter;
use Orchid\Filters\Filter;
use Orchid\Screen\Layouts\Selection;

class TitleSelection extends Selection
{
    /**
     * @return Filter[]
     */
    public function filters(): iterable
    {
        return [
            TitleFilter::class
        ];
    }
}
