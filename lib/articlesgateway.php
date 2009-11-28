<?php
class ArticlesGateway {
	protected $db;

	function __construct(PDO $db) {
		$this->db = $db;
	}

	function fetchBySlug($slug) {
		$statement = $this->db->prepare("select * from articles where slug = :slug");
		$statement->execute(array(':slug' => $slug));
		return new Article($statement->fetch(PDO::FETCH_ASSOC));
	}

	function all() {
		$statement = $this->db->prepare("select * from articles");
		$statement->execute();
		$result = array();

		foreach ($statement as $row) {
			$result[] = new Article($row);
		}

		return $result;
	}

	function latest($count) {
		$statement = $this->db->prepare("select * from articles limit :count");
		$statement->bindValue(':count', $count, PDO::PARAM_INT);
		$statement->execute();
		$result = array();

		foreach ($statement as $row) {
			$result[] = new Article($row);
		}

		return $result;
	}
}
?>