<?php
/*---------------------------------------------------------*/
/*------------Created By : Nitin Gautam  -----------------*/
/*--- For any query mail at nitin.gautam070@gmail.com ---*/
/*---------------------------------------------------------*/
?>
<?php
class NG_Slider_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    { 
    	$this->loadLayout();     
		$this->renderLayout();
    }
}