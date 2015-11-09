<?php
/**
* Plugin Class PhileLess
*
*
*	@author Shawn Turple <shawn@turple.ca>
*	@since Nov 08, 2015
*	@link https://github.com/sturple/PhileLogger/
*	@version 1.0.0
* 
**/
namespace Phile\Plugin\Sturple\PhileLogger;
class Plugin extends \Phile\Plugin\AbstractPlugin implements \Phile\Gateway\EventObserverInterface
{	
	protected $logger = null;	
	public function __construct()
	{
		/* Register Events */
		\Phile\Event::registerEvent('plugins_loaded', $this);		
	}
	
	public function on($eventKey, $data = null)
	{
		if ($eventKey == 'plugins_loaded')
		{
			$this->logger = new \Phile\Plugin\Sturple\PhileLogger\Logger($this->getPluginPath() .'../../../' . $this->settings['relativePath'],
																		 $this->settings['logLevel'],
																		 $this->settings['options']
																		 );				
		}
	}
}
