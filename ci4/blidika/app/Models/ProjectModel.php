<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjectModel extends Model
{
    protected $table      = 'project';
    protected $primaryKey = 'project_id';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_kategori', 'display', "nama_project"];

    public function getProject($id = false)
    {
        if ($id == false) {
            return $this->join('kategori', 'kategori.id_kategori = project.id_kategori')
                ->select('project.*')
                ->select('kategori.nama_kategori')
                ->orderBy('project.id_project')->findAll();
        };
        return $this->where(['id_project' => $id])->first();
    }
}
