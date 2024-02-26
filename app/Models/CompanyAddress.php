<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAddress extends Model
{
    use HasFactory;


    /**
     * Get the company that owns the address.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

}
