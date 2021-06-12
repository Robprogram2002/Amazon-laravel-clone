<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Seller;

class Sellers extends Component
{
    use WithFileUploads;

    public $sellers;

    public $name;
    public $state;
    public $country;
    public $localidad;
    public $adress;
    public $img_path;
    public $description;


    public function mount($sellers)
    {
        $this->sellers = $sellers;
    }

    public function updated($field) {

        $this->validateOnly($field, [
            'name' => 'required|string|min:5',
            'description' => 'required|string|min:20|max:1000',
            'img_path' => 'required|image',
            'state' => 'required|string|min:5',
            'country' => 'required|string|min:5',
            'localidad' => 'required|string|min:5',
            'adress' => 'required|string|min:5',
        ]);
    }

    public function saveSeller() {

        $this->validate([
            'name' => 'required|string|min:5',
            'description' => 'required|string|min:20|max:1000',
            'img_path' => 'required|image',
            'state' => 'required|string|min:5',
            'country' => 'required|string|min:5',
            'localidad' => 'required|string|min:5',
            'adress' => 'required|string|min:5',
        ]);
        
        $image_path_name = time().$this->img_path->getClientOriginalName();
        $this->img_path->storeAs('sellers', $image_path_name);

        Seller::create([
            'name' => $this->name,
            'description' => $this->description,
            'img_path' => $image_path_name ,
            'state' => $this->state,
            'country' => $this->country,
            'localidad' => $this->localidad,
            'adress' => $this->adress,
            'rate' => 0.0,
        ]);

        $this->sellers = Seller::all();
        $this->name = '';
        $this->state = '';
        $this->localidad = '';
        $this->description = '';
        $this->img_path = '';
        $this->country = '';
        $this->adress = '';
        
        session()->flash('message', 'Seller successfully created.');
    }

    public function render()
    {
        return view('livewire.sellers');
    }
}
