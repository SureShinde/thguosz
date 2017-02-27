<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2016 Amasty (https://www.amasty.com)
 * @package Amasty_Payrestriction
 */
$this->startSetup();

$this->run("
ALTER TABLE `{$this->getTable('ampayrestriction/rule')}`  ADD `coupon_disable` VARCHAR(255) NOT NULL ;
");


$this->run("
ALTER TABLE `{$this->getTable('ampayrestriction/rule')}`  ADD `discount_id_disable` int(11) NOT NULL ;
");

$this->endSetup();