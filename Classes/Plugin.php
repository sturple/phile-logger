<?php
/**
* Plugin Class PhileLogger
*
*
*	@author Shawn Turple <shawn@turple.ca>
*	@since Nov 08, 2015
*	@link https://github.com/sturple/PhileLogger/
*	@version 1.0.0
* 
**/
namespace Phile\Plugin\Sturple\PhileLogger;
use \Phile\Plugin\Sturple\PhileLogger;
class Plugin extends \Phile\Plugin\AbstractPlugin implements \Phile\Gateway\EventObserverInterface
{	
	public function __construct($relDir, $logLevel="debug", $options = array())
	{
		/* Register Events */
		\Phile\Event::registerEvent('plugins_loaded', $this);
		/* create new instance of KLogger */
		$this->logger = new \Logger(__DIR__ .'/../../../' .   $relDir, $logLevel, $options);				
	
	}
	public function getLogger()
	{
		return $this->logger;
	}
	public function on($eventKey, $data = null)	{}
}
