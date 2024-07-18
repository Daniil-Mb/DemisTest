<?php
class View
{
    public $template_view;
    
    function generate($content_view, $template_view, $data = null)
    {
        if (is_array($data)) {
            extract($data);
        }
        
        if (file_exists('application/views/'.$template_view) && file_exists('application/views/'.$content_view)) {
            include 'application/views/'.$template_view;
        } else {
            include 'application/views/404_view.php';
        }
    }
}
?>
