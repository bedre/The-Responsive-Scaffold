<?php
    $settings = array(
        'analytics_acct'  => 'UA-22071559-1',
        'html_attribs'    => 'xmlns="http://www.w3.org/1999/xhtml" xml:lang="'.$this->language.'" lang="'.$this->language.'" dir="'.$this->direction.'"',
        'template_folder' => $this->baseurl .'/templates/'. $this->template,
        'template_style'  => 'skagen'
    );

    $menu = JFactory::getApplication()->getMenu();
    $lang = JFactory::getLanguage();
    
    if ($menu->getActive() == $menu->getDefault($lang->getTag())) {
        $settings['is_frontpage'] = true;
    } else {
        $settings['is_frontpage'] = false;
    }