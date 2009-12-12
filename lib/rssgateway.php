<?php
class RssGateway {
	protected $rss;

	function __construct() {
	}

	function read($url) {
		$this->rss = null;
		try {
			$this->rss = new SimpleXMLIterator($url, null, true);
		} catch (Exception $e) {
		}
	}

	function getFiveLatest() {
		$items = array();

		if ($this->rss) {
			foreach (new LimitIterator($this->rss->channel->item, 0, 5) as $item) {
				$items[] = $item;
			}
		}

		return $items;
	}
}
?>