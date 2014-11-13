<?php

/**
 * core/MY_Controller.php
 *
 * Default application controller
 *
 * @author		JLP
 * @copyright           2010-2012, James L. Parry
 * ------------------------------------------------------------------------
 */
class Application extends CI_Controller {

    protected $data = array();      // parameters for view components
    protected $id;                  // identifier for our content


    /**
     * Constructor.
     * Establish view parameters & load common helpers
     */
    function __construct() {
        parent::__construct();
        $this->data = array();
        $this->data['title'] = 'BCIT';
    }

    /**
     * Render this page
     */
    function render() {
        $this->data['attraction'] = $this->buildAttractions();
        $this->data['menubar'] = build_menu_bar($this->config->item('choices'));
        $this->data['content'] = $this->parser->parse($this->data['pagebody'],$this->data,true);
        $this->data['data'] = &$this->data;
        $this->parser->parse('_template', $this->data);
    }

    function buildAttractions()
    {
        $txt = "";
        foreach ($this->_attractionsmodel->getAll() as $value)
        {
            $txt .= "<li><a href=\"/attraction/id/" . $value['id'] . "\">" . $value['name'] . "</a></li>";
        }
        return $txt;
    }

}

/* End of file MY_Controller.php */
/* Location: application/core/MY_Controller.php */
