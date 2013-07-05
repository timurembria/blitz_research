<?php
/**
 *
 * @author timur
 */

class MyBlitz extends Blitz{

    public function t(){

    }

    public function i($int){
        return (int)$int;
    }

    public function s($str){
        return '"' . addslashes($str) . '"';
    }

    public function in($params){
        if(!is_array($params)){
            throw new \Exception("Argument must be array");
        }
    }
}