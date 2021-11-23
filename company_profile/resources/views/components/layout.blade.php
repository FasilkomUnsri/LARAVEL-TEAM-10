<html>
<head>
    <title>{{ $title ?? 'default title' }}</title>
</head>
<body>
    <main>
        {{ $slot }}
    </main>
</body>
</html>