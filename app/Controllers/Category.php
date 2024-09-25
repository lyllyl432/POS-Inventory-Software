<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Category extends BaseController
{
    protected $categoryModel;

    public function initController(
        RequestInterface $request,
        ResponseInterface $response,
        LoggerInterface $logger
    ) {
        parent::initController($request, $response, $logger);

        $this->categoryModel = model('CategoryModel');

        // Log that the controller has been initialized
        $logger->info('Controller Initialized');
    }
    public function index(): string
    {
        return view('pages/settings/category');
    }

    public function create()
    {
        $data = [
            'category_code' => $this->request->getPost('category_code'),
            'category_name' => $this->request->getPost('category_name'),
        ];
        $rules = [
            'category_code' => 'required|is_unique[category.category_code]',
            'category_name' => 'required|max_length[30]',
        ];

        if (!$this->validateData($data, $rules)) {
            return $this->response->setJSON(['message' => 'error', 'value' => $this->categoryListTable()]);
        }

        $validData = $this->validator->getValidated();

        if (!$this->categoryModel->insert($validData, false)) {
            return $this->response->setJSON(['message' => 'error', 'value' => $this->categoryListTable()]);
        }
        return $this->response->setJSON(['message' => 'success', 'value' => $this->categoryListTable()]);
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $data = [
            'category_code' => $this->request->getPost('category_code'),
            'category_name' => $this->request->getPost('category_name'),
        ];
        $rules = [
            'category_code' => "required|is_unique[category.category_code,id,{$id}]",
            'category_name' => 'required|max_length[30]',
        ];

        if (!$this->validateData($data, $rules)) {
            return $this->response->setJSON(['message' => 'error', 'value' => $this->categoryListTable()]);
        }

        $validData  = $this->validator->getValidated();
        $this->categoryModel->update($id, $validData);
        return $this->response->setJSON(['message' => 'success', 'value' => $this->categoryListTable()]);
    }

    public function delete()
    {
        $id = $this->request->getPost('primary_key');
        $this->categoryModel->where('id', $id)->delete();
        return $this->categoryListTable();
    }

    public function categoryListTable()
    {
        $category = $this->categoryModel->findAll();
        return view('pages/settings/category-table', ['list' => $category]);
    }
}
