<?php

/* @var $installer Mage_Core_Model_Resource_Setup */

$installer = $this;

$tableOption = $this->getTable('eav_attribute_option');
$installer->startSetup();

$installer->run("
ALTER TABLE `{$tableOption}`
    ADD `description` VARCHAR(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
");

$installer->endSetup();