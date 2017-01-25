<?php

require(".classes/loremipsum.php");

class Mapper{
	protected $loremipsum;

	public function __construct(){
		$this->loremipsum = new LoremIpsum();

		return $this->loremipsum;
	}

	public function getContent($count){
		return $this->loremipsum->getContent($count);
	}
}