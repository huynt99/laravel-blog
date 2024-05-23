<?php


namespace Database\Seeders;


use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countryJsonFilePath = public_path() . "/json/countries.json";
        $countries = json_decode(file_get_contents($countryJsonFilePath));
        foreach ($countries as $country){
            Country::create([
                'country_id'=> $country->alpha_2_code,
                'alpha_3_code'=> $country->alpha_3_code,
                'en_short_name'=> $country->en_short_name,
                'nationality'=> $country->nationality,
            ]);
        }
    }
}
