<?php defined('KOOWA') or die('Restricted access');

class ComAdvertsModelStatistics extends ComDefaultModelDefault
{
	public function __construct(KConfig $config)
	{
	    parent::__construct($config);
	    
	    $this->_state
	        ->insert('client',	'int')
	        ->insert('zone',	'int')
	        ;
	}
}