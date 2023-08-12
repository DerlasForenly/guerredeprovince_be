<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 */
class BaseRepository
{
    public function __construct(protected Model $model)
    {
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $model = $this->getById($id);

        if ($model) {
            $model->update($data);

            return $model;
        }

        return false;
    }

    public function delete($id): bool
    {
        $model = $this->getById($id);

        if ($model) {
            $model->delete();

            return true;
        }

        return false;
    }

    public function applyCriteria(Criteria $criteria)
    {
        return $criteria->apply($this->model->query());
    }
}