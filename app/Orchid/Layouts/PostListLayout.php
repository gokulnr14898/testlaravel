<?php

namespace App\Orchid\Layouts;

use App\Models\Post;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\TD;
use Orchid\Screen\Fields\Input;

class PostListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'posts';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            // TD::make('title', 'Title')
            // ->render(function (Post $post) {
            //     return Link::make($post->title)
            //         ->route('platform.post.edit', $post);
            // }),

            // TD::make('created_at', 'Created'),
            // TD::make('updated_at', 'Last edit'),
            TD::make('title')
                ->sort()
                ->filter(Input::make())
                ->render(function (Post $post) {
                    return Link::make($post->title)->route('platform.post.edit', $post);
            }),
            TD::make('created_at', 'Created')
            ->sort(),

            TD::make('updated_at', 'Last edit')
                ->sort(),
            // TD::make('title')
            // ->sort()
            // ->render(function (Post $post) {
            //     return Link::make($post->title)
            //         ->route('platform.post.edit', $post);
            // }),

           
        ];
    }
}