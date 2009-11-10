<?php
class components_Root extends k_Component {
  protected $templates;
  function __construct(k_TemplateFactory $templates) {
    $this->templates = $templates;
  }
  function map($name) {
    if ($name == 'faq') {
      return 'components_faq_List';
    } else if ($name == 'articles') {
      return 'components_articles_List';
    }
  }
  function execute() {
  	$this->debug("execute in root");
    return $this->wrap(parent::execute());
  }
  function wrapHtml($content) {
    $t = $this->templates->create('document');
    return
      $t->render(
        $this,
        array(
          'content' => $content,
          'title' => $this->document->title(),
          'scripts' => $this->document->scripts(),
          'styles' => $this->document->styles(),
          'onload' => $this->document->onload()));
  }
  function renderHtml() {
    $t = $this->templates->create('root');
    return $t->render($this);
  }
}
