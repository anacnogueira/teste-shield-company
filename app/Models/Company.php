<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;


    /**
     * Get the address associated with the company.
     */
    public function address()
    {
        return $this->hasOne(CompanyAddress::class);
    }
}
