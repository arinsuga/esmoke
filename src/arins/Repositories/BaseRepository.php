<?php

namespace Arins\Repositories;

//use App\User;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    protected $inputField, $validateInput, $validateField;

    public function __construct($parModel)
    {
        $this->model = $parModel;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function getId()
    {
        return $this->model->id;
    }

    public function getFirst()
    {
        return $this->model->first();
    }

    public function getLast()
    {
        return $this->model->orderBy('id', 'desc')->first();
    }


    public function getFillable()
    {
        return $this->model->getFillable();
    }

    public function getInputField()
    {
        return $this->inputField;
    }

    public function getValidateInput()
    {
        return $this->validateInput;
    }

    public function getValidateField()
    {
        return $this->validateField;
    }

    public function create($inputData)
    {
        return $this->model->fill($inputData)->save();
    }

    public function update($record, $inputData)
    {
        return $record->fill($inputData)->save();
    }

    public function delete($record)
    {
        return $record->delete();
    }

    public function allOrderByIdDesc()
    {
        $result = $this->model->all();
        $result = $result->sortByDesc('id');

        return $result->values()->all();
    }

    public function allOrderByDateAndIdDesc()
    {
        $result = $this->model->all();
        $result = $result->sortByDesc('id')->orderBy('date', 'desc');

        return $result->values()->all();
    }

    public function allOrderByDateAndIdDescTake($numberOfRecords)
    {
        $result = $this->model->all();
        $result = $result->sortByDesc('id')->orderBy('date', 'desc');

        return $result->values()->take($numberOfRecords)->get();
    }

}