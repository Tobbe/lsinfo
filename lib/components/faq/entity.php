<?php
class components_faq_Entity extends k_Component {
	protected $qa;
	protected $faq;

	function __construct(FAQGateway $faq) {
		$this->faq = $faq;
	}

	function dispatch() {
		$this->qa = $this->faq->fetchBySlug($this->name());
		if (!$this->qa) {
			throw new k_PageNotFound();
		}

		return parent::dispatch();
	}

	function renderHtml() {
		$this->document->setTitle($this->qa->question());
		$t = new k_Template('templates/faq-entity.tpl.php');
		return $t->render($this, array('qa' => $this->qa));
	}
}
?>