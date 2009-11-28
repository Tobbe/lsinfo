<?php
class components_articles_List extends k_Component {
	protected $articles;

	function __construct(ArticlesGateway $articles) {
		$this->articles = $articles;
	}

	function map($name) {
		return 'components_articles_Entity';
	}

	function wrapHtml($content) {
		$t = new k_Template('templates/articles-wrap.tpl.php');
		return $t->render($this, array('content' => $content));
	}

	function renderHtml() {
		$this->document->setTitle('Articles');
		$t = new k_Template('templates/articles-list.tpl.php');
		return $t->render($this, array(
			'articles' => $this->articles->all()));
	}
}
?>