<?php

class HamboBlank_AttributeOptionDescription_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getAttributeOptionDescription($optionId)
    {
        $descriptions = $this->getAttributeOptionDescriptions();

		if(strpos($optionId,',') !== false) {
			$description = '';
			$optionId = explode(',', $optionId);
			foreach ($optionId as $id) {
				$description .= array_key_exists($id, $descriptions) ? $descriptions[$id] : '';
				$description .= array_search($id, $optionId) < (count($optionId) - 1) ? ', ' : '';
			}
		} else {
			$description = array_key_exists($optionId, $descriptions) ? $descriptions[$optionId] : '';
		}

        return $description;
    }

    public function getAttributeOptionDescriptions()
    {
        $descriptions = Mage::getResourceModel('eav/entity_attribute_option')->getAttributeOptionDescriptions();

        return $descriptions;
    }
    
}