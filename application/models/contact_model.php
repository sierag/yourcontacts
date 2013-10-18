<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_model extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }

    public function get_all($uid)
    {
        $contacts = $this->db->order_by('cid')
            ->get_where('contacts', array('uid' => $uid))
            ->result_array();
        
        return $contacts;
    }

    public function get_names($uid)
    {
        $contacts = $this->db->select('name')
            ->order_by('name')
            ->get_where('contacts', array('uid' => $uid))
            ->result_array();

        return $contacts;
    }

    public function get_data($uid, $name)
    {
        $contact = $this->db->select('name, street, streetnr, zipcode, city, country, email, phone')
            ->get_where('contacts', array('uid' => $uid, 'name' => $name))
            ->row_array();

        return $contact;
    }

    public function add($name, $street, $streetnr, $zipcode, $city, $country, $email, $phone, $uid)
    {
        $query = $this->db->get_where('contacts', array('name' => $name, 'uid' => $uid));
        
        if ($query->num_rows == 1) {
            return FALSE;
        }

        $this->db->insert('contacts', array(
        	'name' => $name, 
        	'street' => $street, 
        	'streetnr' => $streetnr, 
        	'zipcode' => $zipcode, 
        	'city' => $city, 
        	'country' => $country, 
        	'email' => $email, 
        	'phone' => $phone, 
        	'uid' => $uid
        ));

        $this->db->set('contacts', 'contacts+1', FALSE)
            ->where('uid', $uid)
            ->update('users');

        return TRUE;
    }

    public function delete($name, $uid)
    {
        $this->db->delete('contacts', array('name' => $name, 'uid' => $uid));

        $this->db->set('contacts', 'contacts-1', FALSE)
            ->where('uid', $uid)
            ->update('users');
    }

    public function update($name, $street, $streetnr, $zipcode, $city, $country, $email, $phone, $uid)
    {
        $this->db->where(array('uid' => $uid, 'name' => $name))->update('contacts', array('street' => $street, 
        	'streetnr' => $streetnr, 
        	'zipcode' => $zipcode, 
        	'city' => $city, 
        	'country' => $country,'email' => $email, 'phone' => $phone));        
    }
}
