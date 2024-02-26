<?php

namespace App\Interfaces;

interface CompanyRepositoryInterface
{
    public function list($pageLimit);
}