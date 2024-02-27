<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])

    <title>AffordiTech</title>
</head>
<body>
    @include('common.header')

    @if ($customerinfo)
    <h1> Welcome {{ $customerinfo->name }}</h1>

    @else
        <h1>No customer information available</h1>
    @endif

    @foreach ($properties as $property)
    <p>{{ $property->name }}</p>
    <!-- Display other property information -->
    @endforeach

{{--     
    <a href="{{ route('property.create') }}">Create Property</a>
    <br>
    <a href="{{ route('logout') }}">Logout</a>

    <h2>Properties</h2>
    <table border="1">
        <thead>
            <tr>
                <th>image_path</th>
                <th>Address</th>
                <th>Price</th>
                <th>Description</th>
                <th>Rooms</th>
                <th>Square Meters</th>
                <th>CR</th>
                <th>Status</th>
                <th>Parking</th>
            </tr>
        </thead>
        <tbody>
            @foreach($properties as $property)
                <tr>
                    <td>
                        @php
                            $imagePaths = explode(',', $property->img_path);
                        @endphp
                        @foreach($imagePaths as $imagePath)
                            <img src="{{ asset($imagePath) }}" alt="Property Image" style="max-width: 100px;">
                        @endforeach
                    </td>
                    <td>{{ $property->address }}</td>
                    <td>{{ $property->price }}</td>
                    <td>{{ $property->Description }}</td>
                    <td>{{ $property->rooms }}</td>
                    <td>{{ $property->sqm }}</td>
                    <td>{{ $property->cr }}</td>
                    <td>{{ $property->status }}</td>
                    <td>{{ $property->parking }}</td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}

    @include('common.footer')
</body>
</html>