<?php
 
class block_bilgin_basic_edit_form extends block_edit_form {
        //NOTE; Les éléments de formulaire de la méthode spec_definition () sont définis.
        //(Specific_definition () yöntemi form elemanları tanımlandığı gibidir,)
    protected function specific_definition($mform) {
 
        // NOTE; Titre de l'en-tête de section selon le fichier de langue.
        // (Dil dosyasına göre bölüm başlığı )
        $mform->addElement('header', 'config_header', get_string('blocksettings', 'block'));
 
        // NOTE; Un exemple de variable de chaîne avec une valeur par défaut.
        //(Varsayılan değeri olan bir örnek dize değişkeni.)
        $mform->addElement('text', 'config_text', get_string('blockstring', 'block_bilgin_basic'));
        $mform->setDefault('config_text', 'default value');
        $mform->setType('config_text', PARAM_RAW);  
        
        // NOTE; Un exemple de variable de chaîne avec une valeur par défaut.
        //(Varsayılan değeri olan bir örnek dize değişkeni.)
        $mform->addElement('text', 'config_title', get_string('blocktitle', 'block_bilgin_basic'));
        $mform->setDefault('config_title', 'default value');
        $mform->setType('config_title', PARAM_TEXT);
    }

        /* */
        //NOTE; Nous pouvons utiliser le texte saisi dans le bloc comme si
        //(girilen metni blok içinde şu şekilde kullanabiliriz:)
        if (! empty($this->config->text)) {
         $this->content->text = $this->config->text;
    }
    
}