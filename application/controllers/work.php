<?php

if (!defined('APPPATH'))
    exit('No direct script access allowed');

/**
 * work controller
 *
 *
 *
 *renders the pagebody as work view
 *
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Work extends Application {

    function index() {
        $this->data['pagebody'] = "work";
        $this->render();
        }

}

/* End of file sleep.php */
/* Location: application/controllers/sleep.php */
