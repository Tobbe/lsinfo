<?php
class components_faq_List extends k_Component {
	protected $faq;

	function __construct(FAQGateway $faq) {
		$this->faq = $faq;
	}

	function map($name) {
		return 'components_faq_Entity';
	}

	/*function wrapHtml($content) {
		return '
			<p><a href="' . htmlspecialchars($this->url()) . '">List contacts</a></p>
			<div id="content">
			' . $content . '
			</div>';
	}*/

	function renderHtml() {
		$this->document->setTitle("FAQ");
		$t = new k_Template("templates/faq-list.tpl.php");
		return $t->render($this, array(
			'faq' => $this->faq->all()));
	}
}
?>