<?php
class components_articles_Entity extends k_Component {
	protected $article;
	protected $articles;

	function __construct(ArticlesGateway $articles) {
		$this->articles = $articles;
	}

	function dispatch() {
		$this->article = $this->articles->fetchBySlug($this->name());
		if (!$this->article) {
			throw new k_PageNotFound();
		}

		return parent::dispatch();
	}

	function renderHtml() {
		$this->document->setTitle($this->article->title());
		$t = new k_Template("templates/articles-entity.tpl.php");
		return $t->render($this, array('article' => $this->article));
	}
}
?>