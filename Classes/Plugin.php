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
* 	@usage
*   $logger = (new \Phile\Plugin\Sturple\PhileLogger\Plugin($relDir='lib/cache/logs', $logLevel='debug',$options=array()))->getLogger();
*  	$logger->info('You can use functions debug, info, notice, warning, error, critical, alert.');
* 	$logger->warning('You can add arrays',array('phile'=>'CMS'));
* 
**/
namespace Phile\Plugin\Sturple\PhileLogger;
class Plugin extends \Phile\Plugin\AbstractPlugin implements \Phile\Gateway\EventObserverInterface
{	
	private $logger = null;
	public function __construct($relDir="lib/cache/logs", $logLevel="debug", $options = array())
	{
		/* Register Events */
		\Phile\Event::registerEvent('plugins_loaded', $this);
		/* create new instance of KLogger */
		$this->logger = new \Phile\Plugin\Sturple\PhileLogger\Logger(__DIR__ .'/../../../../' .   $relDir, $logLevel, $options);				
	
	}
	public function getLogger()
	{
		return $this->logger;
	}
	public function on($eventKey, $data = null)	{}
}
