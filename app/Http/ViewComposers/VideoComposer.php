<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\Video;

class VideoComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $video = Video::where('title_az','!=', '')
            ->orderBy('id', 'desc')
            ->take(1)
            ->get();
         $view->with('video', $video);
    }
}