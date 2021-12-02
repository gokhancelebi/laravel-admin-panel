<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body class="admin-panel">
<div class="header flex flex-row bg-red-500 w-full p-5 text-white">
    <div class="logo mr-5">
        <span><a href="{{route("admin.dashboard")}}">Admin Panel</a></span>
    </div>
    <div class="structure-settings ml-auto">
        <a href="{{(route('admin.structure.menus'))}}">Yapi Düzenleme</a>
    </div>
</div>
<div class="container mx-auto mt-10">
    @yield('content', 'Default content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

@if(Session::has("msg"))

    <script>
        Swal.fire(
            '{{Session::get("title")}}!',
            '{{Session::get("msg")}}',
            '{{Session::get("status")}}'
        )
    </script>

@endif


<script src="https://kit.fontawesome.com/d6e55bb259.js" crossorigin="anonymous"></script>
</body>
</html>
