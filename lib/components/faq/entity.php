<?php
class components_faq_Entity extends k_Component {
	protected $questionAnswer;
	protected $faq;

	function __construct(FaqGateway $faq) {
		$this->faq = $faq;
	}

	function dispatch() {
		$this->questionAnswer = $this->faq->fetchBySlug($this->name());
		if (!$this->questionAnswer) {
			throw new k_PageNotFound();
		}

		return parent::dispatch();
	}

	function renderHtml() {
		$this->document->setTitle($this->questionAnswer->question());
		$t = new k_Template('templates/faq-entity.tpl.php');
		return $t->render($this, array('qa' => $this->questionAnswer));
	}
}
?>