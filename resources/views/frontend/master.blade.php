
<!DOCTYPE html>
<html lang="en">

<!--home-123:03  -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>


  @include('frontend.include.style')
</head>
<body>

@include('frontend.include.header')

@yield('body')
@include('frontend.include.footer')

@include('frontend.include.script')
</body>

<!--home-123:18  -->
</html>
