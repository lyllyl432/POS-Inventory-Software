<?php

namespace App\Controllers;

class Unit extends BaseController
{
    protected $unitModel;
    public function __construct()
    {
        $this->unitModel = model('UnitModel');
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
            return view('pages/product/failed', ['errors' => $this->validator->getErrors()]);
        }

        // $validData = $this->validator->getValidated();
        if (!$this->unitModel->insert($data, false)) {
            return view('pages/product/failed');
        }
        return view('pages/settings/unit');
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
            return view('pages/product/failed', ['errors' => $this->validator->getErrors()]);
        }
        $validData  = $this->validator->getValidated();
        $this->unitModel->update($unit_id, $validData);
        return $this->unitListTable();
    }
    public function delete()
    {
        $unit_id = $this->request->getPost('unit_id');
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
