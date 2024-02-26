<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyAddressRequest;
use App\Http\Requests\UpdateCompanyAddressRequest;
use App\Models\CompanyAddress;

class CompanyAddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompanyAddressRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompanyAddressRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CompanyAddress  $companyAddress
     * @return \Illuminate\Http\Response
     */
    public function show(CompanyAddress $companyAddress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyAddress  $companyAddress
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyAddress $companyAddress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompanyAddressRequest  $request
     * @param  \App\Models\CompanyAddress  $companyAddress
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompanyAddressRequest $request, CompanyAddress $companyAddress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CompanyAddress  $companyAddress
     * @return \Illuminate\Http\Response
     */
    public function destroy(CompanyAddress $companyAddress)
    {
        //
    }
}
