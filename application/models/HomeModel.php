<?php

class HomeModel extends CI_Model {

//----------------------------View User---------------------------------//
    public function fetch_User() {
        $query = $this->db->query("SELECT * FROM user_master where 1");
        return $query->result();
    }

//-----------Change password------------------//
    function fetch_pass($username) {
        $fetch_pass = $this->db->query("select * from admin where id='$username'");
        $res = $fetch_pass->result();
    }

    function update_pass($data, $id) {
        $this->db->where("username", $id);
        $this->db->update("admin", $data);
        return true;
        //UPDATE admin SET status = 'Complete' WHERE id = '1'  
    }
}
?>

