<?php
namespace App\Models;

use CodeIgniter\Model;

class adminModel extends Model
{
    protected $table      = 'admin';
    
    function cek_login($username,$password)
    {
    	return $this->db->table($this->table);
        return $this->where('username',$username);
        return $this->where('password',$password);
          return $this->get($this->admin)->row();      
    }
}