<?php
/**
 *
 * @author timur
 */

class Blitz{


    public function blitz() {}

    /**
     * Load() just loads template body from variable
     * @param string $body
     */
    public function load($body) {}


    public function dump_struct() {}

    /**
     * returns template structure as an array of available paths
     * @return array
     */
    public function get_struct() {}


    /**
     * get internal iteration data representing the current template state
     *
     */
    public function get_iterations() {}

    public function get_context() {}

    public function has_context() {}

    public function set_global() {}

    public function set_globals() {}

    public function get_globals() {}

    public function clean_globals() {}

    /**
     * Set variables or complex iteration data into the current context. Set accepts mixed $vars
     * that represent internal iteration state: when it's array - it's interpreted as list.
     * @param array $vars
     */
    public function set($vars) {}

    public function assign() {}

    /**
     * Parse() method sets $vars and returns rendered template as string. Vars structure has the same
     * semantics as for set(). You can just say "echo $T->parse($vars)" instead of Blitz::set($vars) and
     * Blitz::display() in previous example
     * @param array $vars
     */
    public function parse($vars = array()) {}

    /**
     * Display() method sets $vars and outputs rendered template. Vars structure has the same semantics as for set().
     * You can just say $T->display($vars) instead of self::set($vars) and self::display() in previous example.
     * @param array $vars
     */
    public function display($vars = array()) {}

    /**
     *
     */
//    public function include(){}


    /**
     * @param string $path
     * @param bool $iterate_nonexistant
     */
    public function iterate($path, $iterate_nonexistant) {}

    public function context($path) {}

    /**
     * Block() populates context $path with $vars. When $iterate_nonexistant is TRUE block() will not check
     * if this $path is valid (this may be useful for complex templates with includes). main.tpl:
     * @param string $path
     * @param array $vars
     * @param bool $iterate_nonexistant
     */
    public function block($path, $vars , $iterate_nonexistant = false) {}

    /**
     * Fetch() method outputs context $path rendered with $vars.
     * @param string $path
     * @param array $vars
     */
    public function fetch($path, $vars) {}

    /**
     * Clean() method just cleans-up all template iterations and sets the template
     * in the initial stage as if it was just created
     */
    public function clean() {}

    public function dumpstruct() {}

    public function getstruct() {}

    public function getiterations() {}

    /**
     * This method just checks if the context exists or not and returns TRUE/FALSE correspondingly
     * @param string $path
     * @return bool
     */
    public function hascontext($path) {}

    public function getcontext() {}

    public function setglobal() {}

    /**
     * adds $global_vars to the global variables hash
     * @param array $global_vars
     */
    public function setglobals($global_vars) {}

    /**
     * getGlobals() returns globals hash array
     * @return array
     */
    public function getglobals() {}

    public function cleanglobals() {}

    public function geterror() {}

    public function get_error() {}
}