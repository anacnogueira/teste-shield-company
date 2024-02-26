<?php

namespace App\Repositories;

use App\Interfaces\CompanyRepositoryInterface;
use App\Models\Company;

class CompanyRepository implements CompanyRepositoryInterface
{
    protected $company;
    
    
    public function __construct(Company $company)
    {
        $this->company = $company;
    }
    
    public function list()
    {
        $companies = $this->company->all();

        return $companies;
    }
}