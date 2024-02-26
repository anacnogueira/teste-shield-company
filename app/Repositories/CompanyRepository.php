<?php

namespace App\Repositories;

use App\Interfaces\CompanyRepositoryInterface;
use App\Models\Company;
use App\Http\Resources\CompanyCollection;

class CompanyRepository implements CompanyRepositoryInterface
{
    protected $company;
    
    
    public function __construct(Company $company)
    {
        $this->company = $company;
    }
    
    public function list($pageLimit)
    {
        $companies = $this->company->with('address')->paginate($pageLimit);

        return new CompanyCollection($companies);
    }
}