<?php

namespace App\Models;

use CodeIgniter\Model;


class ModelAdmin extends Model
{


    public  function hitung_user()
    {
        return $this->db->table('tbl_user')
            ->countAll();
    }

    public  function hitung_ta()
    {
        return $this->db->table('tbl_ta')
            ->countAll();
    }

    public  function hitung_ruangan()
    {
        return $this->db->table('tbl_ruangan')
            ->countAll();
    }

    public  function hitung_prodi()
    {
        return $this->db->table('tbl_prodi')
            ->countAll();
    }

    public  function hitung_mhs()
    {
        return $this->db->table('tbl_mhs')
            ->countAll();
    }


    public  function hitung_matakul()
    {
        return $this->db->table('tbl_matakul')
            ->countAll();
    }

    public  function hitung_kelas()
    {
        return $this->db->table('tbl_kelas')
            ->countAll();
    }

    public  function hitung_jadwal()
    {
        return $this->db->table('tbl_jadwal')
            ->countAll();
    }


    public  function hitung_gedung()
    {
        return $this->db->table('tbl_gedung')
            ->countAll();
    }

    public  function hitung_fakultas()
    {
        return $this->db->table('tbl_fakultas')
            ->countAll();
    }

    public  function hitung_dosen()
    {
        return $this->db->table('tbl_dosen')
            ->countAll();
    }
}
