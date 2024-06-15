<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;
use Livewire\Attributes\On;
use App\Events\MessageEvent;
use Illuminate\Support\Facades\Auth;

class ChatComponent extends Component
{
    public $message;
    public $convo = [];

    public function mount()
    {
        $messages = Message::all();
        foreach ($messages as $message) {
            $this->convo[] = [
                'username' => $message->user->name,
                'message' => $message->message
            ];
        }
    }

    #[On('echo:chat-channel,MessageEvent')]
    public function listenForMessage($data)
    {
        $this->convo[] = [
            'username'=> $data['username'],
            'message'=> $data['message']
        ];
    }

    public function submitMessage()
    {
        MessageEvent::dispatch(Auth::user()->id, $this->message);
        $this->message = "";
    }

    public function render()
    {
        return view('livewire.chat-component');
    }
}
