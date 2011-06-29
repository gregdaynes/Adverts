<?php /** $Id$ **/ ?>
<?php // no direct access
defined('KOOWA') or die('Restricted access');

class ComAdvertsModelCampaigns extends ComDefaultModelDefault
{
    public function __construct(KConfig $config)
    {
        parent::__construct($config);
        
        $this->_state
            ->insert('enabled', 'int')
            ->insert('client',	'int')
            ;
    }
    
    protected function _buildQueryWhere(KDatabaseQuery $query)
    {
        parent::_buildQueryWhere($query);
        
        $state = $this->_state;
        
        if (is_numeric($state->enabled)) {
            $query->where('tbl.enabled', '=', $state->enabled);
        }
        
        if (is_numeric($state->website)) {
        	$query->where('tbl.client_id', '=', $state->client);
        }
    }
}