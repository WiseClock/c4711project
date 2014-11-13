<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function bold()
{
    $CI =& get_instance();
    $buffer = $CI->output->get_output();

    preg_match_all('/<p class=\"lead\"[^>]*>(.*?)<\/p>/s', $buffer, $matches);
    if (isset($matches) && isset($matches[1]) && isset($matches[1][0]))
    {
        $text = $matches[1][0];
        $text = preg_replace("/\b([A-Z]{1,})\b/", "<strong>\\1</strong>", $text);
        $buffer = preg_replace('/<p class=\"lead\"[^>]*>(.*?)<\/p>/s', '<p class="lead">' . $text . '</p>', $buffer);
    }

    $CI->output->set_output($buffer);
    $CI->output->_display();
}
 
/* End of file bold.php */
/* Location: ./system/application/hooks/bold.php */
