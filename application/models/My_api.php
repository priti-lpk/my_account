<?php

class My_api extends CI_Model {

    public function InsertUser($data) {
        // $query = "insert into user_master(username, email,mobile_no, fcm_id, fcm_token, profile_image, user_type)values('$username', '$email','$mobile_no','$fcm_id', '$fcm_token', '$profile_image', '$user_type')";
        // $data = $this->db->query($query);
        $query = $this->db->insert('user_master', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getLastId() {
        $id = $this->db->query("SELECT id FROM user_master ORDER BY id DESC LIMIT 1");
        return $id->result();
    }

    public function get_user($uid) {
        $query = $this->db->query("SELECT id,username,email,mobile_no,profile_image,fcm_id FROM user_master where fcm_id='" . $uid . "'");
        $result = $query->result();
        return $result;
    }

    function updateUser($record, $id) {
        $this->db->trans_start();
        $this->db->where("id", $id);
        $this->db->update("user_master", $record);
        if ($this->db->trans_status() === FALSE) {
            return false;
        } else {
            return true;
        }
    }

    function edit_user_profile($record, $id) {
        $this->db->trans_start();
        $this->db->where("id", $id);
        $this->db->update("user_master", $record);
        if ($this->db->trans_status() === FALSE) {
            return false;
        } else {
            return true;
        }
    }

    function edit_user_image($record, $id) {
        $this->db->trans_start();
        $this->db->where("id", $id);
        $this->db->update("user_master", $record);
        if ($this->db->trans_status() === FALSE) {
            return false;
        } else {
            return true;
        }
    }

}

?>