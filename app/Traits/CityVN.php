<?php


namespace App\Traits;


trait CityVN
{
    /**
     * Get city vn
     * @return array|mixed|null
     */
    protected function getCityVN(): array
    {
        $cityJsonFilePath = public_path() . "/json/city_vn.json";
        $city = (array) json_decode(file_get_contents($cityJsonFilePath));
        return $city;
    }

    /**
     * Random city
     * @return mixed
     */
    protected function randomCity()
    {
        $city = $this->getCityVN();
        return $city[array_rand($city)];
    }

    protected function getCityWithSlug($slug)
    {
        $city = $this->getCityVN();
        return $city[89];
    }
}
