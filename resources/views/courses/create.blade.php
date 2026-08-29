<x-layout title="Add Course — Student Portal">
    <h1>Add a Course</h1>

    <form method="POST" action="{{ route('courses.store') }}">
        @csrf

        <label for="code">Course code</label>
        <input id="code" name="code" type="text" required>

        <label for="title">Course title</label>
        <input id="title" name="title" type="text" required>

        <label for="units">Units</label>
        <input id="units" name="units" type="number" min="1" required>

        <button type="submit">Save Course</button>
    </form>
</x-layout>
