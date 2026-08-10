```blade
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'Md. Tanvir Rahman | Laravel & WordPress Developer')
    </title>

    <meta name="description"
          content="@yield('meta_description', 'Md. Tanvir Rahman - Laravel, PHP, WordPress and eCommerce Developer.')">

    <!-- Google Font -->
    <link rel="preconnect"
          href="https://fonts.googleapis.com">

    <link rel="preconnect"
          href="https://fonts.gstatic.com"
          crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
          rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet"
          href="{{ asset('assets/css/style.css') }}">

    @stack('styles')

</head>

<body>

    <!-- Header -->
    @include('website.includes.header')


    <!-- Main Content -->
    <main>

        @yield('content')

    </main>


    <!-- Footer -->
    @include('website.includes.footer')


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Custom JS -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')

</body>

</html>
```
