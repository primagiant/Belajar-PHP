<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Project extends BaseController
{

    protected $projectModel;
    public function __construct()
    {
        $this->projectModel = new ProjectModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Project | All Project',
            'project' => $this->projectModel->getProject(),
        ];
        return view('project/index', $data);
    }

    public function detail($id)
    {
        $project =  $this->projectModel->getProject($id);

        $data = [
            'title' => "Project | " . $project['nama_project'],
            'project' => $project,
        ];
        return view('project/detail', $data);
    }

    public function tambah()
    {
        $validation =  \Config\Services::validation();
        $data = [
            'title' => "Project | Tambah Data",
            'validation' => $validation,
        ];
        return view('project/tambah', $data);
    }

    public function saveProject()
    {
        if (!$this->validate([
            'nama_project' => "required",
            "display" => [
                'rules' => "uploaded[display]|max_size[display,2048]|is_image[display]|mime_in[display,image/png,image/jpg,image/jpeg]",
            ],
        ])) {
            return redirect()->to('/project/tambah')->withInput();
        }

        // Kelola Gambar
        $fileDisplay = $this->request->getFile('display');
        // Generate Nama Bru
        $imageName = $fileDisplay->getRandomName();
        // Pindahkan File ke Folder Img
        $fileDisplay->move('img/project/' . $this->request->getVar('nama_project'), $imageName);

        $this->projectModel->save([
            "nama_project" => $this->request->getVar('nama_project'),
            "id_kategori" => $this->request->getVar('kategori'),
            "display" => $imageName,
        ]);

        // flash data
        session()->setFlashData("msg", "Data have been created");

        // Redirect
        return redirect()->to('/project');
    }

    public function deleteProject($id)
    {
        $this->projectModel->find($id);
        // Hapus Gambar
        unlink('img/' . $project['image']);

        session()->setFlashData("msg", "Data have been Deleted");
        return redirect()->to('/project');
    }
}
