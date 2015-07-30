<?php
class Milople_Cms_Block_Block extends Mage_Cms_Block_Block {
  
   public function getCacheKeyInfo()
    {
        
      $blockId = $this->getBlockId();
      if ($blockId) {
            $result = array(
                $blockId,
                Mage::app()->getStore()->getCode(),
            );
      } else {
           $result = parent::getCacheKeyInfo();
       }
       return $result;
   }

 
}