<!DOCTYPE html>
<html lang="es">
<head>
    @vite('resources/css/app.css')
    <title>@yield('page_title', 'Layout')</title>
</head>
<body class="bg-[#F3F4F6]">
    
    <header>@yield('header_content')</header>

    <main>

        @yield('main_content')

    </main>

    <footer>@yield('footer_content', 'Footer')</footer>

</body>
</html>