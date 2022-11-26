<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{
    public function getData(){
        $db     = \Config\Database::connect();
        $builder = $db->table('users');
        $builder->select('users.id as usid, fullname, email, username, name');
        $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $builder->where('name', 'penghuni');
        $query = $builder->get();
        return $query->getResult();
    }
}