<?php

class Wee_DeveloperToolbar_Model_Observer
{
	public function removeCoreProfilerBlock($observer)
	{
		Mage::app()->getLayout()->removeOutputBlock('core_profiler');
		Mage::app()->getLayout()->unsetBlock('profiler');
	}
	
	public function displayDeveloperToolbar($observer)
	{
		if (!Mage::app()->getLayout()->getBlock('wee_developertoolbar_tag'))
		{
			return;
		}
		
		$response = $observer->getEvent()->getResponse();
		$body = $response->getBody();
		$body = str_replace('<tag/>', Mage::app()->getLayout()->createBlock('wee_developertoolbar/toolbar')->setTemplate('wee_developertoolbar/toolbar.phtml')->toHtml(), $body);
		$response->clearBody();
		$response->appendBody($body);
	}
	
	public function addBlockInfosToDisplay($observer)
	{
		$transport = $observer->getEvent()->getTransport();
		$block = $observer->getEvent()->getBlock();
		
		if (empty($transport) || !$block->getShowTemplateHints())
		{
			return;
		}
		
		$transportHtml = $transport->getHtml();
		$transportHtml = preg_replace(
			'/(zIndex=\'998\'"){1}/', 
			'zIndex=\'998\'" class="blocks_infos" onclick="alert(\'name : ' . $block->getNameInLayout() . '\\ntemplate : ' . str_replace(DS, '/', Mage::getDesign()->getTemplateFilename($block->getTemplate(), array('_relative'=>true))) . '\\nclass : ' . get_class($block) . '\');"', 
			$transportHtml,
			1
		);
		$transport->setHtml($transportHtml);
	}
}