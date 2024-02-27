<?php

namespace Modules\Business\Repositories;

use App\Repositories\BaseRepository;
use Modules\Business\Repositories\Criteries\MyBusinessCriteria;
use Modules\Region\Models\Region;

class BusinessRepository extends BaseRepository
{
    public function getMyBusinesses()
    {
        return $this->applyCriteria(new MyBusinessCriteria());
    }

    public function getRegionBusiness(Region $region)
    {
        return $this->model->where('region_id', $region->id)->get();
    }
}