<?php defined('BASEPATH') OR exit('No direct script access allowed');
    class MY_Loader extends CI_Loader {
        var $CI = null;

        function __construct(){
            $this->CI =& get_instance();
        }

        public function template($template_name, $vars = array(), $return = FALSE)
        {
            $CI         =& get_instance();
            $class              = $this->CI->router->fetch_class();
            $method             = $this->CI->router->fetch_method();
            $vars['breadcumb']  = ucwords(str_replace('-', ' ',$this->CI->uri->segment(1)));
            
            if($return):
                $content  = $this->view('layout/header', $vars, $return);
                $content .= $this->view($template_name, $vars, $return);
                $content .= $this->view('layout/footer', $vars, $return);

                return $content;
            else:
                $this->view('layout/header', $vars);
                $this->view($template_name, $vars);
                $this->view('layout/footer', $vars);
            endif;
        }
    }
?>