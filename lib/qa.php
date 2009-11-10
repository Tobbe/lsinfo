<?php
class QA {
	protected $row;

	function __construct($row) {
		$this->row = $row;
	}

	function question() {
		return $this->row['question'];
	}

	function answer() {
		return $this->row['answer'];
	}

	function slug() {
		return $this->row['slug'];
	}
}
?>
