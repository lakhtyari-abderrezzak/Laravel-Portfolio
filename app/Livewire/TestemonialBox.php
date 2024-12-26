<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

class TestemonialBox extends Component
{
    use WithPagination;
    
    #[Computed()]
    public function testemonials() {
        return Contact::latest()->paginate(6);
    }
    public function render()
    {
        
        // dd($testemonials);
        return view('livewire.testemonial-box');
    }
}
