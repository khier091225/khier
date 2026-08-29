<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Student Portal' }}</title>
    <style>
        * { box-sizing: border-box; }
        body { max-width: 800px; margin: 0 auto; padding: 1rem; font-family: Arial, sans-serif; line-height: 1.5; color: #222; }
        nav { display: flex; gap: 1rem; padding: 1rem 0; border-bottom: 1px solid #ccc; }
        nav a { color: #175ea8; text-decoration: none; }
        nav a.active { font-weight: bold; text-decoration: underline; }
        main { padding: 1rem 0; }
        .card, .alert { margin-bottom: 1rem; padding: 1rem; border: 1px solid #ccc; border-radius: 4px; }
        .alert-info { background: #eef6ff; }
        .alert-success { background: #eefbf1; }
        .alert-danger { background: #fff0f0; }
        label { display: block; margin-top: 0.75rem; }
        input, textarea, select { width: 100%; max-width: 500px; padding: 0.5rem; }
        button { margin-top: 1rem; padding: 0.5rem 1rem; }
        footer { margin-top: 2rem; padding-top: 1rem; border-top: 1px solid #ccc; }
    </style>
</head>
<body>
    @include('partials.nav')

    <main>
        {{ $slot }}
    </main>

    @include('partials.footer')
</body>
</html>
