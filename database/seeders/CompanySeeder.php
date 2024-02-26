<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\CompanyAddress;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::factory(50)->create()->each(function ($company) {
            CompanyAddress::factory(1)->create(['company_id'=>$company->id]);
        });        
    }
}
