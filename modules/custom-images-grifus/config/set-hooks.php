<?php
/**
 * Custom Images Grifus · Extensions For Grifus
 * 
 * @author     Josantonius - hello@josantonius.com
 * @copyright  Copyright (c) 2017
 * @license    GPL-2.0+
 * @link       https://github.com/Josantonius/Custom-Images-Grifus.git
 * @since      1.0.0
 */

use Eliasis\Module\Module;

$namespace = Module::CustomImagesGrifus()->get('namespaces', 'controller');

return [

	'hooks' => [

		['launch-modules', [$namespace.'Launcher\\Launcher', 'init'], 8, 0],
	]
];
