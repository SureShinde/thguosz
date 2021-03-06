<?php

$this->startSetup();
$this->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'awln_option_id', array(
    'group'         => 'General Information',
    'input'         => 'text',
    'type'          => 'int',
    'label'         => 'Layered navigation option id',
    'backend'       => '',
    'visible'       => true,
    'required'      => false,
    'visible_on_front' => true,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
));

$this->endSetup();