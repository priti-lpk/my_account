<?php

class Upload_image extends CI_Controller {

    public function index() {
		 if (!isset($_POST['name'])) {
                $response['status'] = false;
                $response['message'] = "Unknown request";
                echo json_encode($response);
                die();
            }
        if ($_POST['name'] == 'edit_user_image') {
            unset($_POST['name']);
            $this->load->model('my_api');
            $email = $_POST['email'];
            $data = $this->my_api->get_user($email);
            if (!empty($data)) {
                $image_name = "";
                $k = 1;
                $filename = $_FILES["profile_image"]["name"];
                $ext = pathinfo($filename, PATHINFO_EXTENSION);
                if (!empty($ext)) {
                    $img = "user/" . ($data[0]->id) . "." . $ext;
                    $file = array("jpg", "jpeg", "png");
                    move_uploaded_file($_FILES['profile_image']['tmp_name'], 'Images/' . $img);
                    if ($_FILES['profile_image']['name']) {
                        $image = $img;
                    } else {
                        $image = "";
                    }
                    $file = 'http://account.lpktechnosoft.com/Images/' . $img;
                    $record = array(
                        "profile_image" => $file
                    );

                    // $file = 'http://account.lpktechnosoft.com/Images/' . $img;
                    $result = $this->my_api->edit_user_image($record, $data[0]->id);
                    if ($result == TRUE) {
                        echo json_encode(array("status" => TRUE, "message" => "Update Successfully", "ImageUrl" => $file,"img"=>$filename));
                    } else {
                        echo json_encode(array("status" => FALSE, "message" => "UnSuccessfull"));
                    }
                } else {
                    echo json_encode(array("status" => FALSE, "message" => "No Find Extension", 'file' => $filename));
                }
            } else {
                echo json_encode(array("status" => FALSE, "message" => "No Data Avilable"));
            }
            die();
        }
    }

}

?>