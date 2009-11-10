<?php
require_once dirname(__FILE__) . '/../config/global.inc.php';
k()
	// Use container for wiring of components
	->setComponentCreator(new k_InjectorAdapter(create_container()))
	// Enable file logging
	->setLog(dirname(__FILE__) . '/../log/debug.log')
	// Uncomment the next line to enable in-browser debugging
	->setDebug()
	// Dispatch request
	->run('components_Root')
	->out();
