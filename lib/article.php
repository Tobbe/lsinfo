<?php
class Article {
	protected $row;

	function __construct($row) {
		$this->row = $row;
	}

	function title() {
		return $this->row['title'];
	}

	function author() {
		return $this->row['author'];
	}

	function slug() {
		return $this->row['slug'];
	}

	function body() {
		return $this->row['body'];
	}

	function date() {
		return $this->row['date'];
	}
}
?>
