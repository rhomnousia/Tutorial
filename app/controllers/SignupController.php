<?php

class SignupController extends ControllerBase
{

    public function indexAction()
    {
        $messages = $this->dispatcher->getParam("params");
        //echo '<pre>'; var_dump($messages); die;
        if($messages != null) {
            foreach ($messages as $message) {
                echo '<p>' . $message . '</p>';
            }
        }
    }

    public function registerAction()
    {
        $user = new Users();

        //Store and check for errors
        $success = $user->save($this->request->getPost(), array('name', 'email'));

        if($success) {
            $this->dispatcher->forward(array(
               "controller" => "index",
                "action" => "index"
            ));

        } else {
            $this->dispatcher->forward(array(
                "action" => "index",
                "params" => array(1,2,3)
            ));
            //echo "Sorry, the following problems occured: ";
            //foreach ($user->getMessages() as $message) {
            //    echo $message->getMessage(), "<br/>";
            //}
        }
        //disable the auto rendering
       // $this->view->disable();
    }

}

