<?php
// Put default application configuration in this file.
// Individual sites (servers) can override it.
require_once 'applicationfactory.php';
require_once dirname(__FILE__).'/../thirdparty/bucket/lib/bucket.inc.php';
date_default_timezone_set('Europe/Paris');

function create_container() {
	$factory = new ApplicationFactory();
	$container = new bucket_Container($factory);
	$factory->template_dir = realpath(dirname(__FILE__) . '/../templates');
	$factory->pdo_dsn = 'mysql:host=localhost;dbname=konstrukt';
	$factory->pdo_username = '';
	$factory->pdo_password = '';
	$factory->pdo_attributes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

	return $container;
}
