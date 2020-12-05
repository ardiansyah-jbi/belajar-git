<?php

namespace App\Models;

use CodeIgniter\Model;


class ModelJadosen extends Model
{

    public  function allData($ta_dinamis)
    {
        return $this->db->table('tbl_jadwal')
            ->join('tbl_matakul',  'tbl_matakul.id_matakul =  tbl_jadwal.id_matakul', 'left')
            ->join('tbl_prodi',  'tbl_prodi.id_prodi =  tbl_jadwal.id_prodi', 'left')
            ->join('tbl_dosen',  'tbl_dosen.id_dosen =  tbl_jadwal.id_dosen', 'left')
            ->join('tbl_kelas',  'tbl_kelas.id_kelas =  tbl_jadwal.id_kelas', 'left')
            ->join('tbl_ta',  'tbl_ta.id_ta  = tbl_jadwal.id_ta', 'left')
            ->join('tbl_ruangan',  'tbl_ruangan.id_ruangan =  tbl_jadwal.id_ruangan', 'left')
            ->where('nidn', session()->get('username'))
            ->where('tbl_matakul.semester', $ta_dinamis['semester'])
            ->get()->getResultArray();
    }
}
