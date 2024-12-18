<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{

    public $name;
    public $phone;
    public $email;
    public $message;
    public $successMessage = null;

    protected $rules = [
        'name' => 'required|string|max:255',
        'phone' => 'nullable|string|max:20',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
    ];
    public function submit()
    {
        // Validate form data
        $this->validate();

        // Store data in the database
        Contact::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => $this->message,
        ]);
            // Optionally, reset form fields
            $this->reset();

            // Show success message
            $this->successMessage = 'Your message has been sent successfully!';
        }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
