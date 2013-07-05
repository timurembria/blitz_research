<?php
/**
 *
 * @author timur
 */

require "MyBlitz.php";

$te = new MyBlitz();
$te->load('Where is the {{ s($what) }}, Lebowski?');
$te->display(array('what' => 'mon"ey'));