<x-layout :title="$code . ' — Student Portal'">
    <h1>{{ $code }}</h1>

    <p>{{ $title }}</p>

    @isset($units)
        <p><strong>Units:</strong> {{ $units }}</p>
    @endisset

    <p>
        <a href="{{ route('courses.index') }}">Back to all courses</a>
    </p>
</x-layout>
