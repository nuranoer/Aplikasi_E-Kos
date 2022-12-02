<?php

namespace App\Models;

use CodeIgniter\Model;

class penghuniModel extends Model
{
    protected $table      = 'penghuni';
    protected $primaryKey = 'id_penghuni';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_penghuni', 'pass_penghuni', 'email_penghuni', 'status', 'nohp', 'alamat_penghuni'];

    // protected $validationRules = [
    //     'nama_penghuni' => 'required',
    //     'pass_penghuni' => 'required',
    //     'email_penghuni' => 'required',
    //     'status' => 'required',
    //     'nohp' => 'required',
    //     'alamat_penghuni' => 'required',
    // ];

    // protected $validationMessages = [
    //     'nama_penghuni' => [
    //         'required' => 'nama harus diisi'
    //     ],
    //     'pass_penghuni' => [
    //         'required' => 'password harus dipilih, jika kosong, silahkan isi dari data master'
    //     ],
    //     'email_penghuni' => [
    //         'required' => 'email harus diisi'
    //     ],
    //     'status' => [
    //         'required' => 'status lahir harus diisi'
    //     ],
    //     'nohp' => [
    //         'required' => 'nohp harus diisi'
    //     ],
    //     'alamat_penghuni' => [
    //         'required' => 'alamat harus diisi'
    //     ],
    // ];
}
