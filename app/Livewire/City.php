<?php

namespace App\Livewire;

use App\Models\Country;
use App\Traits\CityVN;
use Livewire\Component;

class City extends Component
{
    use CityVN;

    public $country;
    public $cities;
    public $selectedCountry = 'VN';

    public function mount()
    {
        $this->country = Country::firstWhere('en_short_name', 'Vietnam');
    }

    public function render()
    {
        if(!is_null($this->selectedCountry)){
            $this->cities = $this->getCityVN();
        }
        return view('livewire.city');
    }
}
