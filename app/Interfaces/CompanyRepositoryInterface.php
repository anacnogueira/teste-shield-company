<?php

namespace App\Interfaces;

interface CompanyRepositoryInterface
{
    public function list($filter, $order, $sort, $pageLimit);
}