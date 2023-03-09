<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Conversations') }}           
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                @foreach($conversations as $conversation)
                    <div class="mb-3 border rounded px-2">
                        <p class="text-sm text-gray-500">>{{$conversation->created_at->diffForHumans() }}</p>
                        
                        <a class="text-blue-700" href=" {{ route ('conversations.show', ['conversation'=>$conversation->id] ) }}" {{$conversation->name}}</a>

                        <p class="text-sm text-gray-600"> {{$conversation->user->name}} </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
