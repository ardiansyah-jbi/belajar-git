<?php

namespace App\Models;

use CodeIgniter\Model;


class ModelMatkul extends Model
{


    public  function allData()
    {
        return $this->db->table('tbl_matakul')
            ->orderBy('id_matakul', 'DESC')
            ->get()->getResultArray();
    }

    public  function allDataMatkul($id_prodi)
    {
        return $this->db->table('tbl_matakul')
            ->orderBy('smt', 'ASC')
            ->where('id_prodi', $id_prodi)
            ->get()->getResultArray();
    }

    public function add($data)
    {
        $this->db->table('tbl_matakul')->insert($data);
    }

    public function edit($data)
    {
        $this->db->table('tbl_matakul')
            ->where('id_matakul', $data['id_matakul'])
            ->update($data);
    }

    public function delete_data($data)
    {
        $this->db->table('tbl_matakul')
            ->where('id_matakul', $data['id_matakul'])
            ->delete($data);
    }
}
