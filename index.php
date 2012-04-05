<?php

/**
 * Supernano framework 
 *
 * @author    Dmitry Elfimov <elfimov@gmail.com>
 * @copyright 2012 Dmitry Elfimov
 * @license   http://www.elfimov.ru/nanobanano/license.txt MIT License
 * @version   GIT: v1.0.0
 * @link      http://github.com/Groozly/Supernano
 *
 */

$_d = dirname(__FILE__).'/tpl/';
$_c = empty($_GET['c']) ? 'index' : preg_replace('/[^a-z0-9_-]/', '_', strtolower($_GET['c']));
$_t = $_d.$_c.'.php';
if (!file_exists($_t)) {
    header("HTTP/1.0 404 Not Found");
    $_t = $_d.'error404.tpl.php';
}
require $_d.'index.tpl.php';
