<?php

namespace App\Http\Livewire\Conversations;

use Livewire\Component;

class Messages extends Component
{
    public $conversation;
    public $body;
    public function save()
    {
        $this->validate([
            'body'=>"required",
        ]);
        $validated['user_id'] = auth()->user()->id;
        $this->conversation->messages()->create($validated);
        $this->conversation->refresh();
    }
    public function render()
    {
        return view('livewire.conversations.messages');
    }
}
