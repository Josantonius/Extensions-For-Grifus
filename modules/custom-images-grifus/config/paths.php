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

use Eliasis\App\App,
	Eliasis\Module\Module;

$DS = App::DS;

$ROOT = $ROOT = Module::CustomImagesGrifus()->get('path', 'root');

return [

    'path' => [

        'page'      => $ROOT.'src'.$DS.'template'.$DS.'page'.$DS,
        'languages' => $ROOT.'languages'.$DS,
    ],
];
