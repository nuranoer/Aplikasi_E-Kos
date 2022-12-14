<?php
namespace App\Models;

use CodeIgniter\Model;

class adminModel extends Model
{
    protected $table      = 'admin';

    public function getJumlahPenghuni(){
        return $this->db->table('users')->where('username !=', 'adinepg')->countAllResults();
    }
    
    public function getJumlahKamar(){
        return $this->db->table('kamar')->countAllResults();
    }
    
    function cek_login($username,$password)
    {
    	return $this->db->table($this->table);
        return $this->where('username',$username);
        return $this->where('password',$password);
          return $this->get($this->admin)->row();      
    }
}