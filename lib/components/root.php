<?php
class components_Root extends k_Component {
	protected $templates;
	protected $articles;
	protected $lsprss;

	function __construct(k_TemplateFactory $templates, ArticlesGateway $articles, RssGateway $lsprss) {
		$this->templates = $templates;
		$this->articles = $articles;
		$this->lsprss = $lsprss;
		$this->lsprss->read('http://lsp.litestep.info/rss.php');
	}

	function map($name) {
		if ($name == 'faq') {
			return 'components_faq_List';
		} else if ($name == 'articles') {
			return 'components_articles_List';
		}
	}

	function execute() {
		return $this->wrap(parent::execute());
	}

	function wrapHtml($content) {
		$t = $this->templates->create('document');
		return $t->render($this,
			array(
				'content' => $content,
				'title' => $this->document->title(),
				'scripts' => $this->document->scripts(),
				'styles' => $this->document->styles(),
				'onload' => $this->document->onload()));
	}

	function renderHtml() {
		$this->document->setTitle("LiteStep.info | LiteStep infotorium");
		$t = $this->templates->create('root');
		return $t->render($this,
			array(
				'latestarticles' => $this->articles->latest(5),
				'lsprssitems' => $this->lsprss->getFiveLatest()));
	}
}
