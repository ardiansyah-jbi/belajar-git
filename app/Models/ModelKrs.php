<?php

namespace App\Models;

use CodeIgniter\Model;


class ModelKrs extends Model
{


    public  function dataMhs()
    {
        return $this->db->table('tbl_mhs')
            ->join('tbl_prodi', 'tbl_prodi.id_prodi = tbl_mhs.id_prodi', 'left')
            ->join('tbl_fakultas', 'tbl_fakultas.id_fakultas = tbl_prodi.id_fakultas')
            ->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_mhs.id_kelas')
            ->join('tbl_dosen', 'tbl_dosen.id_dosen = tbl_kelas.id_dosen')
            ->where('nim', session()->get('username'))
            ->get()->getRowArray();
    }
}
