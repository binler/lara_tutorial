<?php

namespace App\Repositories\Company;

interface CompanyInterface {
    /**
     * Get 5 posts hot in a month the last
     * @return mixed
     */
    public function search();

    public function paginate(int $limit);
}
