<?php

require_once(".classes/mapper.php");

class Controller{
	protected $mapper;

	public function __construct(){
		$this->mapper = new Mapper();

		return $this->mapper;
	}

	public function getContent($count){
		return $this->mapper->getContent($count);
	}
}