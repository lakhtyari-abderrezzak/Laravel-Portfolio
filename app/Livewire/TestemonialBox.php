<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class TestemonialBox extends Component
{
    public function render()
    {
        $testemonials = Contact::latest()->paginate(6);
        // dd($testemonials);
        return view('livewire.testemonial-box', compact('testemonials'));
    }
}
