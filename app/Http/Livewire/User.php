<?php

namespace App\Http\Livewire;

use App\Models\User as UserModel;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
class User extends Component
{
    public function render()
    {
        $authUserId = Auth::id();

        // Fetch names of users excluding the authenticated user
        $this->userNames = UserModel::where('id', '!=', $authUserId)->pluck('name');

        return view('livewire.user');
    }
}
