<?php

defined('MOODLE_INTERNAL') || die();

class block_bilgin_basic extends block_base {
   
    public function init() {
        $this->title = get_string('pluginname', 'block_bilgin_basic');
    }

    // NOTE; Accès à l'écran d'accueil 
    //(Giris ana ekrana yazilan yazi)
    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }
        $this->content         =  new stdClass;
        $this->content->text   = 'Content; " Hello World..!"';
        $this->content->footer = 'Footer; " Hello World..!"';
            return $this->content;
    }

/* 
        // NOTE; Le titre change ['defaulttitle']. 
        //(Baslik degisiyor ['defaulttitle'] oluyor.)
        public function specialization() {
            if (isset($this->config)) {
                if (empty($this->config->title)) {
                    $this->title = get_string('defaulttitle', 'block_bilgin_basic');            
                } else {
                    $this->title = $this->config->title;
                }
     
                if (empty($this->config->text)) {
                 $this->config->text = get_string('defaulttext', 'block_bilgin_basic');
                }    
            }
        }
*/
        /* */
        //NOTE; Cela indique à Moodle qu'il doit autoriser n'importe quel nombre d'instances du bloc bilgin_basic dans n'importe quel cours.
        //(Bu Moodle'a herhangi bir derste bilgin_basic bloğunun herhangi bir sayıda örneğine izin vermesi gerektiğini söyler.)
        public function instance_allow_multiple() {
            return true;
        }

}

    