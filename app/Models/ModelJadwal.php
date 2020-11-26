<?php

namespace App\Models;

use CodeIgniter\Model;


class ModelJadwal extends Model
{

    public function matakul($id_prodi)
    {
        return $this->db->table('tbl_matakul')
            ->where('id_prodi', $id_prodi)
            ->get()->getResultArray();
    }




    public  function allData($id_prodi)
    {
        return $this->db->table('tbl_jadwal')
            ->join('tbl_matakul',  'tbl_matakul.id_matakul =  tbl_jadwal.id_matakul', 'left')
            ->join('tbl_prodi',  'tbl_prodi.id_prodi =  tbl_jadwal.id_prodi', 'left')
            ->join('tbl_dosen',  'tbl_dosen.id_dosen =  tbl_jadwal.id_dosen', 'left')
            ->join('tbl_kelas',  'tbl_kelas.id_kelas =  tbl_jadwal.id_kelas', 'left')
            ->join('tbl_ta',  'tbl_ta.id_ta  = tbl_jadwal.id_ta', 'left')
            ->join('tbl_ruangan',  'tbl_ruangan.id_ruangan =  tbl_jadwal.id_ruangan', 'left')
            ->where('tbl_jadwal.id_prodi', $id_prodi)
            ->orderBy('tbl_matakul.smt', 'ASC')
            ->get()->getResultArray();
    }


    public function tampilDosen()
    {
        return $this->db->table('tbl_dosen')
            ->orderBy('id_dosen', 'ASC')
            ->get()->getResultArray();
    }

    public function tampilKelas($id_prodi)
    {
        return $this->db->table('tbl_kelas')
            ->where('id_prodi', $id_prodi)
            ->get()->getResultArray();
    }





    public function add($data)
    {
        $this->db->table('tbl_jadwal')->insert($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tbl_jadwal')
            ->where('id_jadwal', $data['id_jadwal'])
            ->delete($data);
    }
}
