<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\Post;

class AktualComposer
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
        $aktuals = Post::where('category', 'actual')
            ->where('pageTitleAz','!=', '')
            ->orderBy('pageID', 'desc')
            ->take(9)
            ->get();
         $view->with('aktuals', $aktuals);
    }
}