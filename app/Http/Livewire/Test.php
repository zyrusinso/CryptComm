<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Test extends Component
{

    public function getUsers()
    {
        return User::all();
    }

    public function render()
    {
        $users = $this->getUsers();
        return view('livewire.test', compact('users'));
    }
}
