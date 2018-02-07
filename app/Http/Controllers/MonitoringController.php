<?php

namespace App\Http\Controllers;

interface TablesInterface {
	public function tables();
}

class PostTable implements TablesInterface {
	public function tables()
	{
		$PostTable = '';
		return $PostTable;
	}
}

class MonitoringTable implements TablesInterface {
	public function tables()
	{
		$QuestionTable = '';
		return $QuestionTable;
	}
}

class StatisticTable extends Controller
{
	public function __construct(TablesInterface $postTable)
	{
		$this->postTable = $postTable;
	}

    public function prod ()
    {
    	
        echo $this->postTable->tables();
    }
}