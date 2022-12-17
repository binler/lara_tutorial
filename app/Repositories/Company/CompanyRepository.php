<?php
namespace App\Repositories\Company;

use App\Repositories\EloquentRepository;
use App\Repositories\Company\CompanyInterface;
use App\Models\Company;

class CompanyRepository extends EloquentRepository implements CompanyInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Company::class;
    }
    /**
     * Get 5 posts hot in a month the last
     * @return mixed
     */
    public function search() {
    }

    public function paginate(int $limit)
    {
        return $this->_model->paginate($limit)->withQueryString();
    }
}
