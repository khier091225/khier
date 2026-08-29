<nav aria-label="Main navigation">
    <a href="{{ route('home') }}" @class(['active' => request()->routeIs('home')])>
        Home
    </a>
    <a href="{{ route('about') }}" @class(['active' => request()->routeIs('about')])>
        About
    </a>
    <a href="{{ route('courses.index') }}" @class(['active' => request()->routeIs('courses.*')])>
        Courses
    </a>
    <a href="{{ route('contact') }}" @class(['active' => request()->routeIs('contact')])>
        Contact
    </a>
</nav>
