<?php

class Wee_DeveloperToolbar_Block_Tab_Handles extends Wee_DeveloperToolbar_Block_Tab
{
    public function __construct($name, $label)
    {
        parent::__construct($name, $label);
        $this->setTemplate('wee_developertoolbar/tab/handles.phtml');
    }
    
    public function getHandles()
    {
        return Mage::app()->getLayout()->getUpdate()->getHandles();
    }
}