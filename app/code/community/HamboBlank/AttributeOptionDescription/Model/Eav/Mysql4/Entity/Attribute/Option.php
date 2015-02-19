<?php

class HamboBlank_AttributeOptionDescription_Model_Eav_Mysql4_Entity_Attribute_Option extends Mage_Eav_Model_Mysql4_Entity_Attribute_Option
{
    public function getAttributeOptionDescriptions()
    {
        $select = $this->getReadConnection()
            ->select()
            ->from($this->getTable('eav/attribute_option'), array('option_id', 'description'));

        return $this->getReadConnection()->fetchPairs($select);
    }
}