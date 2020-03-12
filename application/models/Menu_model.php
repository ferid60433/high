<?php
class Menu_model extends CI_Model
{
    function modules(){
        return $this->db->get('modules')->result();
    }
    function submodules($id){
        return $this->db->where('mid',$id)->get('submodules')->order_by('id')->result();
    }
}
