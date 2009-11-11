<?php
class FaqGateway {
	protected $db;

	function __construct(PDO $db) {
		$this->db = $db;
	}

	function fetchBySlug($slug) {
		$statement = $this->db->prepare("select * from faq where slug = :slug");
		$statement->execute(array(':slug' => $slug));
		return new QuestionAnswer($statement->fetch(PDO::FETCH_ASSOC));
	}

	function all() {
		$statement = $this->db->prepare("select * from faq");
		$statement->execute();
		$result = array();

		foreach ($statement as $row) {
			$result[] = new QuestionAnswer($row);
		}

		return $result;
	}
}
?>