<?php

namespace App\Orchid\Screens;

use App\Orchid\Layouts\PostListLayout;
use App\Models\Post;
use App\Orchid\Layouts\DrawerRows;
use App\Orchid\Layouts\TitleSelection;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\Fields\Input;

class PostListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            // 'posts' => Post::paginate()
            // 'posts' => Post::filters()->defaultSort('id')->paginate()
            'posts' => Post::filters(TitleSelection::class)->defaultSort('id')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'PostListScreen';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Create new')
            ->icon('pencil')
            ->route('platform.post.edit')
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

            // Layout::rows(
            //     Layout::columns(
            //         Input::make('name')
            //              ->type('text')
            //              ->title('First name:'),
            //         Input::make('name')
            //              ->type('text')
            //              ->title('First name:')
            //     )[
            //  ]),
            DrawerRows::class,
            TitleSelection::class,
            PostListLayout::class
        ];
    }
}
