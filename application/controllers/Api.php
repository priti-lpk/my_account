<?php

class Api extends CI_Controller {

    public function index() {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $request_auth = getallheaders();
        if (!empty($request_auth['Authorization'])) {
            if (!isset($_POST['email'])) {
                $response['status'] = false;
                $response['message'] = "Unknown user request";
                echo json_encode($response);
                die();
            }
            if (!isset($_POST['name'])) {
                $response['status'] = false;
                $response['message'] = "Unknown request";
                echo json_encode($response);
                die();
            }
            $tmp = $this->Auth($_POST['name'], $_POST['email']);
            if (!$tmp) {
                $response['status'] = false;
                $response['message'] = "Unauthorised request";
                echo json_encode($response);
                die();
            }
            // Insert User
            if ($_POST['name'] == 'add_user') {

                unset($_POST['name']);

                $this->load->model('my_api');
                $email = $_POST['email'];

                $uid = $this->input->post('fcm_id');
                $data = $this->my_api->get_user($uid);
//                $uid = mt_rand(100000, 999999);
                if (isset($data[0]->fcm_id) == $uid) {
                    //Update User AND Image 
                    $record = array(
                        "fcm_token" => $this->input->post('fcm_token'),
                        "user_type" => $this->input->post('user_type')
                    );
                    $image = $data[0]->profile_image;
                    $result = $this->my_api->updateUser($record, $data[0]->id);
                    if ($result) {
                        echo json_encode(array("status" => TRUE, "message" => "Data Update Successfully", 'username' => $data[0]->username, 'mobile_no' => $data[0]->mobile_no, 'ImageUrl' => $image, 'email' => $data[0]->email));
                    } else {
                        echo json_encode(array("status" => FALSE, "message" => "error"));
                    }
                    die();
                } else {
                    $username = $this->input->post('username');
                    $profile_image = $this->input->post('profile_image');
                    $mobile_no = $this->input->post('mobile_no');

                    $data = array(
                        'username' => $this->input->post('username'),
                        'email' => $this->input->post('email'),
                        'mobile_no' => $this->input->post('mobile_no'),
                        'fcm_id' => $this->input->post('fcm_id'),
                        'fcm_token' => $this->input->post('fcm_token'),
                        'profile_image' => $this->input->post('profile_image'),
                        'user_type' => $this->input->post('user_type')
                    );

                    $result = $this->my_api->InsertUser($data);

                    if ($result == true) {
                        echo json_encode(array("status" => TRUE, "message" => "Insert Successfully", 'username' => $username, 'mobile_no' => $mobile_no, 'ImageUrl' => $profile_image, 'email' => $email));
                    } else {
                        echo json_encode(array("status" => FALSE, "message" => "error"));
                    }
                    die();
                }
            }
            //Edit User Profile
            if ($_POST['name'] == 'edit_user_profile') {
                unset($_POST['name']);
                $this->load->model('my_api');
                $email = $_POST['email'];
                $uid = $this->input->post('fcm_id');
                $data = $this->my_api->get_user($uid);
                $username = $this->input->post('username');
                $mobile_no = $this->input->post('mobile_no');
                if (!empty($data)) {
                    $record = array(
                        "username" => $this->input->post('username'),
                        "mobile_no" => $this->input->post('mobile_no'),
                        "email" => $this->input->post('email'),
                    );
                    $result = $this->my_api->edit_user_profile($record, $data[0]->id);
                    if ($result) {
                        echo json_encode(array("status" => TRUE, "message" => "Data Update Successfully", 'username' => $username, 'mobile_no' => $mobile_no, 'email' => $email));
                    } else {
                        echo json_encode(array("status" => FALSE, "message" => "error"));
                    }
                } else {
                    echo json_encode(array("status" => FALSE, "message" => "No Data Avilable"));
                }
                die();
            }
            //Update User Image
            if ($_POST['name'] == 'edit_user_image') {
                unset($_POST['name']);
                $this->load->model('my_api');
                $email = $_POST['email'];
                $uid = $this->input->post('fcm_id');
                $data = $this->my_api->get_user($uid);
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
                            echo json_encode(array("status" => TRUE, "message" => "Update Successfully", "ImageUrl" => $file));
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
            if ($_POST['name'] == 'user_send_mail') {
                unset($_POST['name']);
                $this->load->model('my_api');
                $email = $this->input->post('email');
                $passcode = $this->input->post('pass_code');
                $email_to = $email;

                $this->load->library('email');
                $this->email->from('talk@lpktechnosoft.com'); // change it to yours
                $this->email->to($email_to); // change it to yours
                $this->email->subject('My Account');
                $message = "Your Email: " . $email_to . "\r\n<br>Your Pass Code:" . $passcode;


                $this->email->message($message);
                if ($this->email->send()) {
                    echo json_encode(array("status" => TRUE, "message" => 'Send Mail Successfully'));
                } else {
                    echo json_encode(array("status" => TRUE, "message" => 'Something Wrong!'));
                    show_error($this->email->print_debugger());
                }
                die();
            }
        } else {
            $response['status'] = false;
            $response['message'] = "UnAuthorization request";
            echo json_encode($response);
            die();
        }
    }

    function Auth($apiname, $email) {
        $request_auth = getallheaders();
        $request_auth = $request_auth['Authorization'];
        $Id = '223412';
        $jwt = hash('sha256', $Id . $apiname . $email);
        // echo $jwt;
//$request_auth = 857b5bd1cf4b590032a9fb152a23c7f95c274b83f6554f2571c89dea9721db69
        if ($request_auth == $jwt) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
