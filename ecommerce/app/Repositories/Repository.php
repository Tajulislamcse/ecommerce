<?php
namespace App\Repositories;

class Repository implements IRepository
{
    protected $model;
    public function get($id)
    {
        return $this->model->findOrFail($id);
    }
    public function getAll()
    {
        return $this->model->all();
    }
    public function add($data)
    {
        $this->model->create($data);
    }
    public function getWithFilter($field, $fieldValue, $orderColumn, $orderDirection, 
        $itemCount)
    {
        return $this->model->where($field, $fieldValue)
            ->orderBy($orderColumn, $orderDirection)
            ->take($itemCount)
            ->get();
    }
    public function update($data, $id)
    {
        $record = $this->model->findOrFail($id);
        $record->update($data);
    }
    public function delete($id)
    {
        $this->model->destroy($id);
    }
    public function getModel()
    {
        return $this->model;
    }
    public function setModel($model)
    {
        $this->model = $model;
    }
}