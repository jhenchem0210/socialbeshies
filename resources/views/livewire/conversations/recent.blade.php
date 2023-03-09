<div>
    @foreach($conversations as $conversation)
    <div class="p-2 bg-slate-400">
        <p>{{ $conversation->name }}</p>
</div>
    @endforeach
</div>
