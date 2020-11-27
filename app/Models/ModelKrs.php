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

    public function matkulwar()
    {
        return $this->db->table('tbl_jadwal')
            ->join('tbl_matakul', 'tbl_matakul.id_matakul = tbl_jadwal.id_matakul', 'left')
            ->join('tbl_kelas', 'tbl_kelas.id_kelas = tbl_jadwal.id_kelas', 'left')
            ->join('tbl_ruangan', 'tbl_ruangan.id_ruangan = tbl_jadwal.id_ruangan', 'left')
            ->join('tbl_dosen', 'tbl_dosen.id_dosen = tbl_jadwal.id_dosen')
            ->get()->getResultArray();
    }
}
