<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Conversation') }}
        </h2>
        
    </x-slot>

    @if (session('alert-success'))
        <div class="bg-green-500 p-4 text-center">
            {{session('alert-success')}}
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-4">
                    <form action="{{ route('conversations.store') }}" method="post">
                        @csrf
                    <div class="mb-3">
                    <x-label for="discussion" value="{{ __('Start New Discussion')}}" />
                    <x-input id="email" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required />
                    <x-input-error for="name"></x-input-error>
                </div>
                <x-button>Submit</x-button>
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>
