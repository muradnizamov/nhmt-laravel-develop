<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\Question;

class QuestionsComposer
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
        $l = substr($_SERVER['REQUEST_URI'],1,2);
        $some_questions = Question::where('questionAz','!=', '')
            ->orderBy('pageID', 'desc')
            ->take(3)
            ->get();
         $view->with('some_questions', $some_questions)->with('l', $l);
    }
}