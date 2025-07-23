<!DOCTYPE html>
<html>
<head>
    <title>Diamond Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
