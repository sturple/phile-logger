<?php
/**
 * config file
 */
// some default settings for the parser
return array(
	'active' => false,
	'relativePath' 		=> 'lib/cache/logs',
	'logLevel' 			=> 'debug',
	'options' => array(
		'extension'      => 'txt',
		'dateFormat'     => 'Y-m-d G:i:s.u',
		'filename'       => false,
		'flushFrequency' => false,
		'prefix'         => 'log_',
		'logFormat'      => false,
		'appendContext'  => true,
		
	)
  
);
