<?php
/**
 * Description of Pagination Library
 *
 * @package     Library
 * @author      Eftakhairul Islam <eftakhairul@gmail.com> http://eftakhairul.com
 * @website     http://eftakhairul.com
 */
class MY_Pagination extends CI_Pagination
{
    protected $values = array();

    public function MY_Pagination()
    {
        parent::__construct();
        $CI = get_instance();
        
        $this->values['per_page']       = $CI->config->item('rowsPerPage');
        $this->values['first_link']     = '&laquo;';
        $this->values['next_link']      = '&gt;';
        $this->values['prev_link']      = '&lt;';
        $this->values['last_link']      = '&raquo;';
        $this->values['cur_tag_open']   = '&nbsp;&nbsp;<strong>';
        $this->values['cur_tag_close']  = '</strong>&nbsp;';
    }

    public function setOptions($options)
    {
        $this->values['base_url']       = $options['baseUrl'];
        $this->values['total_rows']     = $options['numRows'];
        $this->values['uri_segment']    = empty ($options['segmentValue']) ? 3 : $options['segmentValue'];

        $this->initialize($this->values);
    }
}