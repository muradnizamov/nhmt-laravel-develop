<?php

namespace App\Http\Controllers;

use App\Post;
use App\Question;
use App\Video;

class Tables extends Controller
{
	public function __construct(Post $tables)
	{
		$this->tables = $tables;
	}

	public function tables()
	{
		$tables = $this->tables->where('category', '!=', '')->take(1)->get();
		foreach ($tables as $tabless) {
			$tablesTitle = $tabless->category;
		}
		return $tablesTitle;
	}
}