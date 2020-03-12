<?php
/**
 * Created by PhpStorm.
 * User: phillip
 * Date: 2/28/19
 * Time: 10:57 PM
 */

class Site_model extends CI_Model
{

    /**
     * @param string $slug
     * @return CI_DB_row
     */
    function check_slug($slug, $table = 'services')
    {
        do {
            $count = 0;
            $this->db->where('slug', $slug);
            $this->db->from($table);
            if ($this->db->count_all_results() >= 1) {
                $number = random_string('nozero', 6);
                $slug = $slug . '-' . $number;
                $this->db->where('slug', $slug);
                $this->db->from( $table);
                $count = $this->db->count_all_results();
            } else {
                $count = 0;
            }
        } while ($count >= 1);
        return $slug;
    }

    function get_result($table, $select = '', $condition = ''){
        if( $select != '' ){
            $this->db->select($select);
        }
        if( $condition != '' ){
            $this->db->where( $condition );
        }
        return $this->db->get( $table )->result();
    }

    function get_row($table = "users", $select = "", $condition = "" ){
        if( $select != '' ){
            $this->db->select($select);
        }
        if( $condition != '' ){
            $this->db->where( $condition );
        }
        return $this->db->get( $table )->row();
    }


        /**
     * @param array $data
     * @param string $table_name
     * @return int|string
     */
    function insert_data($table_name = 'users', $data = array())
    {
        if (!empty($data)) {
            try {
                $this->db->insert($table_name, $data);
                $result = $this->db->insert_id();
            } catch (Exception $e) {
                $result = $e->getMessage();
            }
            return $result;
        }
    }

    /*
     * Insert batch
     * */
    function insert_batch( $table_name = 'plans', $data = array() ){
        if( !empty($data)) {
            try {
                return $this->db->insert_batch($table_name, $data);
            } catch (Exception $e ) {
                return $e->getMessage();
            }
        }
    }

    function delete( $table, $where ){
        $this->db->where( $where );
        return $this->db->delete( $table );
    }

    // Delete service from admin
    function delete_service( $id ){
        if( $this->delete(array('sid' => $id), 'plans') ){
            return $this->delete(array('id' => $id ), 'services' );
        }
    }

    // Generate code
    //generate_code('transactions', 'trans_id');
    function generate_code($table = 'transactions', $label = 'trans_id')
    {
        do {
            $number = random_string('nozero', 8);
            $this->db->where($label, $number);
            $this->db->from($table);
            $count = $this->db->count_all_results();
        } while ($count >= 1);
        return 'PS'.$number;
    }

    function find_username($table = 'contacts', $contact = '' )
    {
        if( $this->get_row('contacts', 'id', array('name' => $contact )) ){
            do {
                $random = random_string('nozero', 5);
                $this->db->where($contact, $random);
                $this->db->from($table);
                $count = $this->db->count_all_results();
            } while ($count >= 1);
            return 'PS-'.$random;
        }else{
            return $contact;
        }
    }

    // General SQL query

    function run_sql( $query ){
        return $this->db->query( $query );
    }


    /*
     * Update
     * */

    function update($table = 'users', $data = array(), $condition = array()){
        $this->db->where( $condition );
        return $this->db->update($table, $data);
    }


    function set_field( $table, $field, $set, $where ){
        $this->db->where($where);
        $this->db->set($field, $set, false);
        return $this->db->update($table);
    }

    function auto_version($file = '')
    {
        if (!file_exists($file)):
            return $file;
        else:
            $mtime = filemtime($file);
            return base_url() . $file . '?' . $mtime;
        endif;
    }


    function count_row( $table, $where = ''){
    	if(!empty( $where)){ $this->db->where( $where ); }
        $this->db->from( $table );
        return $this->db->count_all_results();
    }

	function pagination_result($array = array() , $table = 'sms'){

		$this->db->select('*');
		$this->db->from($table);
		if( isset($array['where']) ){
			foreach ( $array['where'] as $key => $value ){
				$this->db->where( $key , $value);
			}
		}
		if( isset( $array['group_by']) ){
			$this->db->group_by( $array['group_by']);
		}
		$this->db->order_by('id', 'ASC');
		if( isset( $array['limit'])) {
			$this->db->limit($array['limit'],  $array['offset']);
		}
		return $this->db->get()->result();
	}

}
