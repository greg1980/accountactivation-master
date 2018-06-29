<?php

use Illuminate\Database\Seeder;
use App\Registration;

class RegistrationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <20; $i++) { 

        	Registration::create (

        	[
                'fname'=> "fname$i",
                'year_of_call'=> "year_of_call$i",
                'lname'=> "lname$i",
                'address'=> "address$i",
                'company'=> "company$i",
                'branch'=> "branch$i",
                'position'=> "position$i",
                'committee'=> "committee$i",
                'addcommittee'=> "addcommittee$i",
        	]
             );
        }
    }
}
