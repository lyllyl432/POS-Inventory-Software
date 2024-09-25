<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Unit extends BaseController
{
    protected $helpers = ['form'];
    protected $unitModel;
    public function initController(
        RequestInterface $request,
        ResponseInterface $response,
        LoggerInterface $logger
    ) {
        parent::initController($request, $response, $logger);

        $this->unitModel = model('UnitModel');

        // Log that the controller has been initialized
        $logger->info('Controller Initialized');
    }
    public function index(): string
    {
        return view('pages/settings/unit');
    }
    //create unit
    public function create()
    {
        $data = [
            'unit_name' => $this->request->getPost('unit_name'),
            'unit_short_name' => $this->request->getPost('unit_short_name'),
        ];

        $rules = [
            'unit_name' => 'required|is_unique[unit.unit_name]|max_length[20]',
            'unit_short_name' => 'required|max_length[5]',
        ];


        if (!$this->validateData($data, $rules)) {
            return $this->response->setJSON(['message' => 'error', 'value' => $this->unitListTable()]);
        }

        // $validData = $this->validator->getValidated();
        if (!$this->unitModel->insert($data, false)) {
            return $this->response->setJSON(['message' => 'error', 'value' => $this->unitListTable()]);
        }
        return $this->response->setJSON(['message' => 'success', 'value' => $this->unitListTable()]);
    }
    //update unit 
    public function update()
    {
        $unit_id = $this->request->getPost('unit_id');
        $data = [
            'unit_name' => $this->request->getPost('unit_name'),
            'unit_short_name' => $this->request->getPost('unit_short_name'),
        ];
        $rules = [
            'unit_name' => 'required|is_unique[unit.unit_name]|max_length[20]',
            'unit_short_name' => 'required|max_length[5]',
        ];


        if (!$this->validateData($data, $rules)) {
            return $this->response->setJSON(['message' => 'error']);
        }
        $validData  = $this->validator->getValidated();
        $this->unitModel->update($unit_id, $validData);
        return $this->response->setJSON(['message' => 'success', 'value' => $this->unitListTable()]);
    }
    public function delete()
    {
        $unit_id = $this->request->getPost('primary_key');
        $this->unitModel->where('id', $unit_id)->delete();
        return $this->unitListTable();
    }
    //create unit table template
    public function unitListTable()
    {
        $units = $this->unitModel->findAll();
        return view('pages/settings/unit-table', ['list' => $units]);
    }
}
