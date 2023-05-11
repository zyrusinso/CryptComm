@push('css')
@livewireStyles
@endpush

<div>
    @foreach ($users as $user)
        <h1>{{ $user->name }}</h1>
        <h2>{{ $user->username }}</h2>
    @endforeach
</div>

@push('scripts')
    @livewireScripts
@endpush
