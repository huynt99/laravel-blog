<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class MainMenu extends Component
{
    const ROOT_PARENT = 0;
    private $genealogy = [];
    public $menu;

    public function mount()
    {
        $t =$this->menu(self::ROOT_PARENT);
        $this->menu = $this->menu(self::ROOT_PARENT);
    }

    public function render()
    {
        return view('livewire.main-menu');
    }

    /**
     * Get Main Menu
     * @param int $parent
     * @param string $child
     * @return array
     */
    protected function menu(int $parent, $child = '')
    {
        $categories = Category::where('parent_id', $parent)->get();
        foreach ($categories as $category) {
            if (empty($child)) {
                $this->genealogy[$category->id] = [
                    'name' => $category->name,
                    'url_key' => $category->url_key
                ];
            } else {
                $this->genealogy[$category->parent_id]['children'][$category->id] = [
                    'name' => $category->name,
                    'url_key' => $category->url_key
                ];
            }
            $this->menu($category->id , $child . '--');
        }

        return $this->genealogy;
    }
}
