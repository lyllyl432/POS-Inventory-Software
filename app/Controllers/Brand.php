<?php

namespace App\Controllers;

class Brand extends BaseController
{
    protected $helpers = ['form', 'filesystem'];
    protected $brandModel;
    public function __construct()
    {
        $this->brandModel = model('BrandModel');
    }
    public function index(): string
    {
        return view('pages/settings/brand');
    }
    //create brand 
    public function create()
    {
        $data = [
            'brand_name' => $this->request->getPost('brand_name'),
            'brand_description' => $this->request->getPost('brand_description'),
        ];
        if (!empty($this->request->getFile('userfile')->getName())) {
            $rules = [
                'userfile' => [
                    'label' => 'Image File',
                    'rules' => [
                        'uploaded[userfile]',
                        'is_image[userfile]',
                        'mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                        'max_size[userfile,1000]',
                        'max_dims[userfile,2000,2000]',
                    ],
                ],
                'brand_name' => 'required|is_unique[brand.brand_name]',
                'brand_description' => 'required|max_length[50]',
            ];

            if (!$this->validateData($data, $rules)) {
                return $this->response->setJSON(['message' => 'error', 'value' => $this->brandListTable()]);
            }
            $img = $this->request->getFile('userfile');

            $validData  = $this->validator->getValidated();
            $imageName = $img->getRandomName();
            $img->move('uploads/', $imageName);

            $validData['brand_image'] = 'uploads/' . $imageName;

            if (!$this->brandModel->insert($validData, false)) {
                return $this->response->setJSON(['message' => 'error', 'value' => $this->brandListTable()]);
            }
        } else {
            $file = new \CodeIgniter\Files\File($this->request->getPost('no_image'));
            $imageName = $file->getBasename();
            $rules = [
                'brand_name' => 'required|is_unique[brand.brand_name]',
                'brand_description' => 'required|max_length[50]',
            ];
            if (!$this->validateData($data, $rules)) {
                return $this->response->setJSON(['message' => 'error', 'value' => $this->brandListTable()]);
            }
            $validData  = $this->validator->getValidated();
            $validData['brand_image'] = 'images/' . $imageName;
            if (!$this->brandModel->insert($validData, false)) {
                return $this->response->setJSON(['message' => 'error', 'value' => $this->brandListTable()]);
            }
        }
        return $this->response->setJSON(['message' => 'success', 'value' => $this->brandListTable()]);
    }
    //update brand
    public function update()
    {
        $brand_id = $this->request->getPost('brand_id');
        $data = [
            'brand_name' => $this->request->getPost('brand_name'),
            'brand_description' => $this->request->getPost('brand_description'),
        ];

        if (!empty($this->request->getFile('userfile')->getName())) {
            $rules = [
                'userfile' => [
                    'label' => 'Image File',
                    'rules' => [
                        'uploaded[userfile]',
                        'is_image[userfile]',
                        'mime_in[userfile,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                        'max_size[userfile,1000]',
                        'max_dims[userfile,2000,2000]',
                    ],
                ],
                'brand_name' => 'required|is_unique[brand.brand_name]',
                'brand_description' => 'required|max_length[50]',
            ];

            if (!$this->validateData($data, $rules)) {
                return $this->response->setJSON(['message' => 'error', 'value' => $this->brandListTable()]);
            }
            $file = new \CodeIgniter\Files\File($this->request->getPost('recent_image_src'));

            if (file_exists(FCPATH . "uploads\\" . $file->getBasename())) {
                unlink(FCPATH . "uploads\\" . $file->getBasename());

                $img = $this->request->getFile('userfile');

                $validData  = $this->validator->getValidated();
                $imageName = $img->getRandomName();
                $img->move('uploads/', $imageName);

                $validData['brand_image'] = 'uploads/' . $imageName;

                $this->brandModel->update($brand_id, $validData);
            }
        } else {

            $rules = [
                'brand_name' => 'required|is_unique[brand.brand_name]',
                'brand_description' => 'required|max_length[50]',
            ];
            if (!$this->validateData($data, $rules)) {
                return $this->response->setJSON(['message' => 'error', 'value' => $this->brandListTable()]);
            }
            $validData  = $this->validator->getValidated();
            $this->brandModel->update($brand_id, $validData);
        }
        return $this->response->setJSON(['message' => 'success', 'value' => $this->brandListTable()]);
    }
    //delete brand
    public function delete()
    {
        $brand_id = $this->request->getPost('primary_key');
        $this->brandModel->where('id', $brand_id)->delete();
        return $this->brandListTable();
    }
    //create brand table template
    public function brandListTable()
    {
        $brand = $this->brandModel->findAll();
        return view('pages/settings/brand-table', ['list' => $brand]);
    }
}
