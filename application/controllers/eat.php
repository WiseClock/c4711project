<?php
/**
 * eat controller
 .
 *
 *
 *renders the pagebody as eat view
 *
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
if (!defined('APPPATH'))
    exit('No direct script access allowed');

class Eat extends Application {

    function index() {
        $this->data['pagebody'] = "eat";
        $this->render();
    }

}

/* End of file eat.php */
/* Location: application/controllers/eat.php */
