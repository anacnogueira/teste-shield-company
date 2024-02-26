<?php

namespace App\Repositories;

use App\Interfaces\CompanyRepositoryInterface;
use App\Models\Company;
use App\Http\Resources\CompanyCollection;
use Illuminate\Database\Query\Builder;

class CompanyRepository implements CompanyRepositoryInterface
{
    protected $company;
    
    
    public function __construct(Company $company)
    {
        $this->company = $company;
    }
    
    public function list($filter, $pageLimit)
    {
        $companies = $this->company
            ->with('address');

            if (isset($filter['zip_code'])) {
                $companies->whereIn('id', function(Builder $query) use($filter){
                    $this->filterZipCode($query, $filter['zip_code']);
                });

            }
        
        return new CompanyCollection($companies->paginate($pageLimit));
    }


    protected function filterZipCode($query, $zipCode)
    {
        return $query->select('company_id')
        ->from('company_addresses')
        ->where('zip_code','LIKE', $zipCode.'%');
    }
}