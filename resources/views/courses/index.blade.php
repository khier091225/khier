<x-layout title="Courses — Student Portal">
    <h1>Courses</h1>

    @forelse ($courses as $course)
        <x-course-card
            :code="$course['code']"
            :title="$course['title']"
            :units="$course['units'] ?? 3"
        />
    @empty
        <p>No courses available.</p>
    @endforelse
</x-layout>
