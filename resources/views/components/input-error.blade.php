@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li class="bg-red-100 text-red-700 border-l-4 border-red-500 p-3 rounded-md">{{ $message }}</li>
        @endforeach
    </ul>
@endif
