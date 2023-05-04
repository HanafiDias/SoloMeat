<?php

// namespace App\Http\Livewire;

use App\Models\produk;
use App\Models\toko;
use Livewire\Component;


// class HitungCounter extends Component
// {


//     public $produk;

//     public function mount($id)
//     {
//         $this->produk = toko::find($id);
//     }

//     public function hitung()
//     {
//         $this->produk->counter++;
//         $this->produk->save();
//         $this->emit('counterUpdated', $this->produk->counter);
//     }

//     public function render()
//     {
//         return view('livewire.hitung-counter');
//     }