<?php

/**
 * Attraction controller
 *
 *
 * One method that retrieves attractions by id.
 *renders the pagebody as attraction view
 *
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
if (!defined('APPPATH'))
    exit('No direct script access allowed');

class Attraction extends Application
{

    function index()
    {
        $this->data['pagebody'] = "attraction";
        $this->render();
    }

    function id($id)
    {
        $this->data['pagebody'] = "attraction";
        $this->data['detail'] = array($this->_attractionsmodel->getByID($id));
        $this->render();
    }

}
