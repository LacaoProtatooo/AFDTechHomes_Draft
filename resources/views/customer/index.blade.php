<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])

    <title>AffordiTech</title>
</head>
<body class="bg-green-200 ">
    @include('common.header')

    @if ($customerinfo)
    {{-- <h1>Welcome {{ $customerinfo->name }}</h1> --}}
    @else
        <h1>No customer information available</h1>
    @endif

    <div class="max-w-screen-xl flex flex-wrap items-center mx-auto p-4 ml-20">
        @include('common.card')
    </div>

    @include('common.footer')
</body>
</html>