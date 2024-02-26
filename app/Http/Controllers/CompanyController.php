<?php

namespace App\Http\Controllers;

use App\Interfaces\CompanyRepositoryInterface;
use Illuminate\Http\JSonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Resources\CompanyCollection;


class CompanyController extends Controller
{
    private CompanyRepositoryInterface $companyRepository;

    public function __construct(CompanyRepositoryInterface $companyRepository)
    {
        $this->companyRepository = $companyRepository;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): JsonResponse
    {
        $pageLimit = 10;       
        
        $filter['zip_code'] = null !== $request->input('zip_code') ? $request->input('zip_code') : null;
        $order = null !== $request->input('order') ? $request->input('order') : null;
        $sort = null !== $request->input('sort') ? $request->input('sort') : null;
                
        // return response()->json(
        //     $this->companyRepository->list($filter, $order, $sort, $pageLimit)
        // );

        return response()->json(new CompanyCollection(
            $this->companyRepository->list($filter, $order, $sort, $pageLimit)
        ));
    }

 
}
