<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function posts($cat) {
		if (strpos($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI'],"page") > 0) {
			$page = $_GET['page'];
			$start = ($page - 1) * 5;
        } else {
         	$page = 0;
         	$start = 0;
        }
        $contents = Post::where('category', $cat)
            ->where('pageTitleAz','!=','')
            ->orderBy('pageID', 'desc')
            ->skip($start)
            ->take(5)
            ->get();
        $countQuery = Post::where('category', $cat)
            ->where('pageTitleAz','!=', '')
            ->count();

        // Initial page num setup
        if ($page == 0) {$page = 1;}
        $prev = $page - 1;
        $next = $page + 1;
        $lastpage = ceil($countQuery/5);
        $paginate = '';
        return view('posts')->with('prev', $prev)->with('page', $page)->with('next', $next)->with('lastpage', $lastpage)->with('paginate', $paginate)->with('contents', $contents);
	}

	public function postInner($cat, $id)
	{
		$post = Post::where('pageID', $id)->get();
        return view('postInner')->with('post', $post);
	}

	public function questions() {
        if (strpos($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI'],"page") > 0) {
        	$page = $_GET['page'];
        	$start = ($page - 1) * 25;
        } else {
        	$page = 0;
        	$start = 0;
        }
        $contents = Question::where('questionAz','!=','')
        	->orderBy('pageID', 'desc')
        	->skip($start)
        	->take(25)
        	->get();
        $countQuery = Question::where('questionAz','!=','')
        	->count();
        
        // Initial page num setup
        if ($page == 0) {$page = 1;}
        $prev = $page - 1;
        $next = $page + 1;
        $lastpage = ceil($countQuery/25);
        $paginate = '';
        return view('questions')->with('prev', $prev)->with('page', $page)->with('next', $next)->with('lastpage', $lastpage)->with('paginate', $paginate)->with('contents', $contents);
    }

    public function questionInner($id)
	{
		$question = Question::where('pageID', $id)->get();
        return view('questionInner')->with('question', $question);
	}

	public function videos($lg) {
        if (strpos($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI'],"page") > 0) {
        	$page = $_GET['page'];
        	$start = ($page - 1) * 12;
        } else {
        	$page = 0;
        	$start = 0;
        }
        switch ($lg) {
        	case 'en':
        		$videoTitle = 'OWRPO ― Video';
        		$title = 'title_en';
        		break;
        	
        	default:
        		$videoTitle = 'NHMT ― Video';
        		$title = 'title_az';
                break;
        }
        $videoID = substr(stristr($_SERVER['REQUEST_URI'], 'videos'), 7);
        $contentVideoID = Video::find($videoID);
        $contents = Video::where($title,'!=','')
            ->orderBy('id', 'desc')
            ->skip($start)
            ->take(12)
            ->get();
        $dataQuery = Video::where($title,'!=','')
            ->orderBy('id', 'desc')
            ->skip($start)
            ->take(12)
            ->count();
        $countQuery = Video::where($title,'!=','')
            ->count();

        // Initial page num setup
        if ($page == 0) {$page = 1;}
        $prev = $page - 1;
        $next = $page + 1;
        $lastpage = ceil($countQuery/12);
        $paginate = '';
        return view('videos', ['lg' => $lg, 'videoTitle' => $videoTitle, 'title' => $title, 'dataQuery' => $dataQuery, 'prev' => $prev, 'page' => $page, 'contentVideoID' => $contentVideoID, 'next' => $next, 'lastpage' => $lastpage, 'paginate' => $paginate, 'videoID' => $videoID, 'contents' => $contents]);
    }

    public function compose(View $view)
    {
        if(strpos($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI'],"page") > 0) {
            $pagination_uri = stristr(substr(stristr($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI'],"az"),3),"?page",true);
        } else {
            $pagination_uri = substr(stristr($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI'],"az"),3);
        }
        switch ($pagination_uri) {
            case 'value':
                # code...
                break;
            
            default:
                $limit = 5;
                $title = 'pageTitleAz';
                break;
        }
        $countQuery = Content::where('category', $pagination_uri)
            ->where($title,'!=', '')
            ->count();
        if(strpos($_SERVER['DOCUMENT_ROOT'].$_SERVER['REQUEST_URI'],"page") > 0) {
            $page = $_GET['page'];
            public static $start = ($page - 1) * $limit;
        } else {
            $page = 0;
            public static $start = 0;
        }
        // Initial page num setup
        if ($page == 0) {$page = 1;}
        $prev = $page - 1;
        $next = $page + 1;
        $lastpage = ceil($countQuery/$limit);
        $paginate = '';
        $view->with('start', $start)->with('prev', $prev)->with('page', $page)->with('next', $next)->with('lastpage', $lastpage)->with('paginate', $paginate);
    }

	public function contact()
	{
		return view('contact');
	}
}
