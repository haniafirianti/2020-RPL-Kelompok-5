<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Perpustakaan @stack('title')</title>
    @include ('admin.include.head')
</head>

<body>
    <div class="ecaps-page-wrapper">
        @include ('admin.include.sidebar')

        <div class="ecaps-page-content">
            @include ('admin.include.header')

                <div class="main-content dashboard-pt" style="padding-top:1%;">
                <div class="container-fluid">
                @yield('content')

                @include ('admin.include.footer')
            </div>
        </div>
    </div>

   @include ('admin.include.js')
   @section ('js')

   @show

</html>