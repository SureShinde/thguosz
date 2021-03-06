<?php

class Zen_Popup_Block_Widget_Wysiwyg extends Mage_Adminhtml_Block_Widget_Form_Renderer_Fieldset_Element
{
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $editor = new Varien_Data_Form_Element_Editor($element->getData());

        //Prevent foreach error that occurs without this
        $editor->getConfig()->setPlugins(array());

        $editor->setId($element->getId());
        $editor->setForm($element->getForm());
        $editor->setWysiwyg(true);
//        $editor->setForceLoad(true);

        return parent::render($editor);
    }
}