<?php

namespace App\Controllers;

use CodeIgniter\Files\File;

class Brand extends BaseController
{
    protected $helpers = ['form'];
    protected $brandModel;
    public function __construct()
    {
        $this->brandModel = model('BrandModel');
    }
    public function index(): string
    {
        return view('pages/settings/brand');
    }
    public function create()
    {

        $data = [
            'brand_name' => $this->request->getPost('brand_name'),
            'brand_description' => $this->request->getPost('brand_description'),
        ];
        $rules = [
            'userfile' => [
                'label' => 'Image File',
                'rules' => [
                    'uploaded[userfile]',
                    'is_image[userfile]',
                    'mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[userfile,1000]',
                    'max_dims[userfile,1024,768]',
                ],
            ],
            'brand_name' => 'required|is_unique[brand.brand_name]',
            'brand_description' => 'required|max_length[50]',
        ];

        if (!$this->validateData($data, $rules)) {
            return view('pages/settings/brand', ['message' => 'error']);
        }
        $img = $this->request->getFile('userfile');
        $validData  = $this->validator->getValidated();
        if (! $img->hasMoved()) {
            $imageName = $img->getRandomName();
            $img->move('uploads/', $imageName);

            $validData['brand_image'] = 'uploads/' . $imageName;

            if (!$this->brandModel->insert($validData, false)) {
                return view('pages/settings/brand', ['message' => 'error']);
            }

            return view('pages/settings/brand', ['message' => 'success', 'value' => $this->brandListTable()]);
        }
    }
    //create product table template
    public function brandListTable()
    {
        $brand = $this->brandModel->findAll();
        return view('pages/settings/brand-table', ['list' => $brand]);
    }
}
