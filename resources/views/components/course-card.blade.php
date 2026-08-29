@props(['code', 'title', 'units' => 3])

<article {{ $attributes->merge(['class' => 'card']) }}>
    <h2>
        <a href="{{ route('courses.show', ['course' => $code]) }}">
            {{ $code }}
        </a>
    </h2>

    <p>{{ $title }}</p>
    <small>{{ $units }} {{ $units === 1 ? 'unit' : 'units' }}</small>

    @if ($slot->isNotEmpty())
        <div>{{ $slot }}</div>
    @endif
</article>
