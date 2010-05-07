<?php
class allEdo{
	private $allEdos = array();
	public function __construct($connection){
		foreach ($connection->query('SELECT * FROM entry ORDER BY id DESC;') as $row){
			$currentEdo = new edo();
			$currentEdo->setTitle($row['title']);
			$currentEdo->setText($row['text']);
			$currentEdo->setName($row['name']);
			$currentEdo->setId($row['id']);
			$currentEdo->setTimestamp($row['timestamp']);
			array_push($this->allEdos, $currentEdo);			
		}
	}
	public function getAllEdos(){
		return $this->allEdos;
	}
}

class edo{
	private $id;
	private $name;
	private $title;
	private $text;
	private $timestamp;
	
	public function getId(){
		return $this->id;
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getTitle(){
		return $this->title;
	}
	
	public function getText(){
		return $this->text;
	}
	
	public function getTimestamp(){
		return $this->timestamp;
	}
	
	public function setId($id){
		$this->id = $id;
	}
	
	public function setName($name){
		$this->name = $name;
	}
	
	public function setTitle($title){
		$this->title=$title;
	}
	public function setText($text){
		$this->text = $text;
	}
	
	public function setTimestamp($timestamp){
		$this->timestamp = $timestamp;
	}
}

?>