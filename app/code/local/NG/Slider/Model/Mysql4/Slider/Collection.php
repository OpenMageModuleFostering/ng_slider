<?php
/*---------------------------------------------------------*/
/*------------Created By : Nitin Gautam  -----------------*/
/*--- For any query mail at nitin.gautam070@gmail.com ---*/
/*---------------------------------------------------------*/
?>
<?php
class NG_Slider_Model_Mysql4_Slider_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('slider/slider');
    }
}