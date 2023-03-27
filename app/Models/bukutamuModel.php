<?php

namespace App\Models;

use CodeIgniter\Model;

class bukutamuModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'buku_tamu';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['tanggal_masuk', 'jam_masuk', 'jam_keluar', 'nama', 'dari_mana', 'telpon', 'keperluan',];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    function tampil_datatamu($id = null)
    {
        if ($id != '') {
            // $query = $this->where('id', $id)->first();
            $query = $this->find($id);

            $data = [
                'id' => $query['id'],
                'tanggal' => $query['tanggal_masuk'],
                'jam_masuk' => $query['jam_masuk'],
                'jam_keluar' => $query['jam_keluar'],
                'nama' => $query['nama'],
                'dari' => $query['dari_mana'],
                'telpon' => $query['telpon'],
                'keperluan' => $query['keperluan']
            ];
            // dd($data['keperluan']);

        } else {
            $data = [
                'id' => '',
                'tanggal' => '',
                'jam_masuk' => '',
                'jam_keluar' => '',
                'nama' => '',
                'dari' => '',
                'telpon' => '',
                'keperluan' => '',
            ];
        }
        return $data;
    }
}
