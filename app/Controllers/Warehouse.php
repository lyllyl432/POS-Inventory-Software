<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Warehouse extends BaseController
{
    protected $warehouseModel;

    public function initController(
        RequestInterface $request,
        ResponseInterface $response,
        LoggerInterface $logger
    ) {
        parent::initController($request, $response, $logger);

        $this->warehouseModel = model('WarehouseModel');

        // Log that the controller has been initialized
        $logger->info('Controller Initialized');
    }
    public function index(): string
    {
        return view('pages/settings/warehouse');
    }

    public function create()
    {
        $data = [
            'warehouse_name' => $this->request->getPost('warehouse_name'),
            'warehouse_phone' => $this->request->getPost('warehouse_phone'),
            'warehouse_country' => $this->request->getPost('warehouse_country'),
            'warehouse_city' => $this->request->getPost('warehouse_city'),
            'warehouse_email' => $this->request->getPost('warehouse_email'),
            'warehouse_zip_code' => $this->request->getPost('warehouse_zip_code'),
        ];
        $rules = [
            'warehouse_name' => 'required|max_length[50]',
            'warehouse_phone' => 'required|max_length[20]|regex_match[/^[0-9]{11}$/]',
            'warehouse_country' => 'required|max_length[30]',
            'warehouse_city' => 'required|max_length[30]',
            'warehouse_email' => "required|max_length[50]|valid_email|is_unique[warehouse.warehouse_email]",
            'warehouse_zip_code' => 'required|integer|max_length[30]',
        ];

        if (!$this->validateData($data, $rules)) {
            return $this->response->setJSON(['message' => 'error', 'value' => $this->warehouseListTable()]);
        }

        $validData = $this->validator->getValidated();

        if (!$this->warehouseModel->insert($validData, false)) {
            return $this->response->setJSON(['message' => 'error', 'value' => $this->warehouseListTable()]);
        }
        return $this->response->setJSON(['message' => 'success', 'value' => $this->warehouseListTable()]);
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $data = [
            'warehouse_name' => $this->request->getPost('warehouse_name'),
            'warehouse_phone' => $this->request->getPost('warehouse_phone'),
            'warehouse_country' => $this->request->getPost('warehouse_country'),
            'warehouse_city' => $this->request->getPost('warehouse_city'),
            'warehouse_email' => $this->request->getPost('warehouse_email'),
            'warehouse_zip_code' => $this->request->getPost('warehouse_zip_code'),
        ];
        $rules = [
            'warehouse_name' => 'required|max_length[50]',
            'warehouse_phone' => 'required|max_length[20]|regex_match[/^[0-9]{11}$/]',
            'warehouse_country' => 'required|max_length[30]',
            'warehouse_city' => 'required|max_length[30]',
            'warehouse_email' => "required|max_length[50]|valid_email|is_unique[warehouse.warehouse_email,id,{$id}]",
            'warehouse_zip_code' => 'required|integer|max_length[30]',
        ];

        if (!$this->validateData($data, $rules)) {
            return $this->response->setJSON(['message' => 'error', 'value' => $this->warehouseListTable()]);
        }

        $validData  = $this->validator->getValidated();
        $this->warehouseModel->update($id, $validData);
        return $this->response->setJSON(['message' => 'success', 'value' => $this->warehouseListTable()]);
    }

    public function delete()
    {
        $id = $this->request->getPost('primary_key');
        $this->warehouseModel->where('id', $id)->delete();
        return $this->warehouseListTable();
    }

    public function warehouseListTable()
    {
        $warehouse = $this->warehouseModel->findAll();
        return view('pages/settings/warehouse-table', ['list' => $warehouse]);
    }
}
