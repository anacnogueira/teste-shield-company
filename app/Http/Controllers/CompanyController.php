<?php

namespace App\Http\Controllers;

use App\Interfaces\CompanyRepositoryInterface;
use Illuminate\Http\JSonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 

class CompanyController extends Controller
{
    private CompanyRepositoryInterface $companyRepository;

    public function __construct(CompanyRepositoryInterface $companyRepository) {
        $this->companyRepository = $companyRepository;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        return response()->json([
            'data' => $this->companyRepository->list()
        ]);
    }

 
}
