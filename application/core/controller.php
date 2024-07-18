<?php

class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function action_index()
    {
    }

    function show_404()
    {
        $this->view->generate('404_view.php', 'template_view.php');
    }
}

?>
