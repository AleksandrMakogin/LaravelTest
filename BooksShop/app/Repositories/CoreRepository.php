<?php
namespace App\Repositories;


abstract class CoreRepository
{
    protected $model;

    public function __construct()
    {
        $this->model = app($this->getModelClass());
    }

    /**
     * @return mixed
     */
    abstract protected function getModelClass();

    /**
     * @return mixed
     */


    protected function startConditions()
    {
        return clone $this->model;
    }

    public  function  getId($id){
        return $this->startConditions()->find($id);
    }

    public function getRequestID($get = true, $id = 'id')
    {
        if ($get){
            $data = $_GET;
        } else {
            $data = $_POST;
        }
        $id = !empty($data[$id]) ? (int)$data[$id] : null;
        //Если $id не получили то выбросим сразу ошибку
        if (!$id){
            throw new \Exception('Проверить Откуда id, если getRequestID(false) == $_POST', 404);
        }
        return $id;
    }
}
