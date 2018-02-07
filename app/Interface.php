<?php

namespace App;

interface TablesInterface {
	public function tables();
}

class PostTable implements TablesInterface {
	public function tables()
	{
		$PostTable = 'general_table tablesi';
		return $PostTable;
	}
}

class QuestionTable implements TablesInterface {
	public function tables()
	{
		$QuestionTable = 'qa tablesi, YENI suallarin tablesi';
		return $QuestionTable;
	}
}