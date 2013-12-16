<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/* * *
 * File: (Codeigniterapp)/libraries/Controllerlist.php
 * 
 * A simple library to list al your controllers with their methods.
 * This library will return an array with controllers and methods
 * 
 * The library will scan the "controller" directory and (in case of) one (1) subdirectory level deep
 * for controllers
 * 
 * Usage in one of your controllers:
 * 
 * $this->load->library('controllerlist');
 * print_r($this->controllerlist->getControllers());
 * 
 * @author Peter Prins 
 */

class ControllerList {
    var $_folder_rot='';
    var $_module='';
    var $_rot='';
    function __construct() {
        $this->ci = & get_instance();
        $this->ci->load->helper('directory');
    }
    public function initialize($info = array())
    {
        if (count($info) > 0)
        {
           
            foreach($info as $key=>$value)
            {
                if(isset($this->$key))
                {
                    $this->$key = $value;   
                }
            }
            return $this->get_all();
        }
    }
    function get_all() {
        $dir = $this->_rot. '/'.$this->_folder_rot.'/' . APPPATH . 'modules/'.$this->_module.'/controllers';
        $map = directory_map($dir, FALSE, TRUE);
        $list = array();
        foreach ($map as $file) {
            $file_ = $dir.'/'.$file;
            $arr = $this->get_function($file_);
            $tokens = token_get_all( file_get_contents($file_) );
            $class_token = false;
            foreach ($tokens as $token) {
                if ( !is_array($token) ) continue;
                if ($token[0] == T_CLASS) {
                    $class_token = true;
                } else if ($class_token && $token[0] == T_STRING) {
                    $class[]= array('class'=>$token[1],'function'=>$arr);
                    $class_token = false;
                }
            }
            
        }
        return $class;
    }
    function get_function($path)
    {
        $chekid =0;
        $old = 0;
        // Get the file and get all PHP language tokens out of it
    $arr = token_get_all(file_get_contents($path));

    //var_dump($arr); // Take a look if you want

    //The array where we will store our functions
    $functions = array();

    // loop trough
    foreach($arr as $key => $value){

            //filter all user declared functions
        if($value[0] == 334){
                   //Take a look for debug sake
            //echo $value[0] .' -|- '. $value[1] . ' -|- ' . $value[2] . '<br>';

                    //store third value to get relation
                    $chekid = $value[2];
        }

            //now list functions user declared (note: The last chek is to ensure we only get the first peace of information about the function witch is the function name, else we also list other function header information like preset values)
        if(isset($value[2]))
        {
        if($value[2] == $chekid && $value[0] == 307 && $value[2] != $old){

                    // just to see what happens
                   if($value[1]!='__construct')
                   {
                        $functions[] = $value[1];
                        $old = $chekid; 
                   }
        }
    }
    }
    return $functions;
    }

}

?>