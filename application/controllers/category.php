<?php

/**
 * category controller
 .
 *
 *
 *renders the pagebody as category view
 *
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
if (!defined('APPPATH'))
    exit('No direct script access allowed');

class Category extends Application {

    function index() {
        $this->data['pagebody'] = "category";
        $this->render();
    }

}

/* End of file play.php */
/* Location: application/controllers/play.php */
