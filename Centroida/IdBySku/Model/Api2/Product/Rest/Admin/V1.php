<?php
class Centroida_IdBySku_Model_Api2_Product_Rest_Admin_V1 extends Mage_Api2_Model_Resource
{

     /**
     * Retrieve a ID by SKU
     * @return string
     */

    public function _retrieve() {
        $sku = $this->getRequest()->getParam('sku');

        $product = Mage::getModel('catalog/product');
        $id = $product->getIdBySku($sku);

        return $id;
    }

}
?>