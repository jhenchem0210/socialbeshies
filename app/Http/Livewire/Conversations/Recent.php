<?php

namespace App\Http\Livewire\Conversations;

use Livewire\Component;
use App\Models\Conversation;
class Recent extends Component
{
    public $conversations;
    public function mount()
    {
        $this->conversations = Conversation::latest()->limit(4)->get;
    }
    public function render()
    {
        return view('livewire.conversations.recent');
    }
}
