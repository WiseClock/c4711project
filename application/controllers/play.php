<?php
/**
 * play controller
 .
 *
 *
 *renders the pagebody as play view
 *
 * controllers/welcome.php
 *
 * ------------------------------------------------------------------------
 */
if (!defined('APPPATH'))
    exit('No direct script access allowed');

class Play extends Application {

    function index() {
        $this->data['pagebody'] = "play";
        $this->render();
    }

}

/* End of file play.php */
/* Location: application/controllers/play.php */
