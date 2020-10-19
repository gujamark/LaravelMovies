<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@if(isset($title))
                {{ $title }}
            @else
                No Title
            @endif
    </title>
    <style>
        .light, .light a:visited {
            background-color: lightblue;
        }

        .dark, .dark a:visited {
            background-color: black;
            color: white;
        }

        a:visited {
            color: white;
        }
    </style>
</head>
<body class="{{ $theme ?? ''}}">
    @include('navigation')
    @yield('content')

    @if($show_footer ?? false)
        <h3>@yield('footer')</h3>
    @endif

</body>
</html>