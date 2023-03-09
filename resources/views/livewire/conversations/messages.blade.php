<div>
    @foreach($conversation->messages as $message)
                    <div class="mb-3 border-b px-2 flex justify-between">
                        <div>
                        
                        <p class="text-sm text-gray-600"> {{$message->user->name}} </p>
                        <p>{{ $message->body}}</p>
                    </div>
                    <div>
                    <p class="text-sm text-gray-500">>{{$message->create_at->diffForHumans() }}</p>
                    </div>
            </div>
     @endforeach
     <div class="p-4">
                    <form wire:submit.prevent"save" method="post">
                        @csrf
                    <div class="mb-3">
                    <x-label for="message" value="{{ __('Message')}}" />
                    <x-input id="email" class="block mt-1 w-full" type="text" wire:model.lazy="body" required />
                    <x-input-error for="body"></x-input-error>
                </div>
                <x-button>Submit</x-button>
                    </form>
     </div>
</div>
