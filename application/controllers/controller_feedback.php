<?php

class Controller_Feedback extends Controller
{
    function __construct()
    {
        $this->model = new Model_Feedback();
        $this->view = new View();
    }

    function action_index()
    {
        $data = $this->model->get_all_feedbacks();
        $this->view->generate('feedback_view.php', 'template_view.php', $data);
    }

    function action_save()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $feedback_data = $this->model->validate_data($_POST);
            if (empty($feedback_data['errors'])) {
                $this->model->save_data($feedback_data['data']);
                echo json_encode(['status' => 'success', 'feedback' => $feedback_data['data']]);
            } else {
                echo json_encode(['status' => 'error', 'errors' => $feedback_data['errors']]);
            }            
        }
    }
    function action_all()
{
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $feedbacks = $this->model->get_all_feedbacks();
        echo json_encode($feedbacks);
    }
}

}
?>
