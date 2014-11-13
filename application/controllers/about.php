<?php

if (!defined('APPPATH'))
    exit('No direct script access allowed');

/**
 * controllers/about.php
 *
 * Show the "about us" page
 *
 * @author		JLP
 * ------------------------------------------------------------------------
 */
class About extends Application {

    function index() {
        $this->data['pagebody'] = "about";
        $this->render();
    }

}

/* End of file about.php */
/* Location: application/controllers/about.php */