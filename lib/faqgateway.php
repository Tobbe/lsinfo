<?php
class FAQGateway {
	protected $db;

	function __construct(PDO $db) {
		$this->db = $db;
	}

	function fetchBySlug($slug) {
		$statement = $this->db->prepare("select * from faq where slug = :slug");
		$statement->execute(array(':slug' => $slug));
		return new QA($statement->fetch(PDO::FETCH_ASSOC));
	}

	function all() {
		$statement = $this->db->prepare("select * from faq");
		$statement->execute();
		$result = array();

		foreach ($statement as $row) {
			$result[] = new QA($row);
		}

		return $result;
	}
}
?>