<!DOCTYPE html>
<html lang="en">

<head>
    @include('head')
</head>

<body class="animsition"><!--class="animsition" -->
    <!-- header -->
    @include('header')

    <!-- Reusable Notification Component -->

    <!-- cart    -->
    @include('cart')

    @yield('content')



    @include('footer')
</body>

</html>
