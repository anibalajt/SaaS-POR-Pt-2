<!-- Create a home page (Dashboard and Welcome Screen) that:
Shows the total number of collectors and the total number of cars listed on the system. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Welcome to the Collector's Dashboard</h1>
    <p>
        <strong>Total Collectors:</strong> {{ count($collectors) }}
    </p>
    <p>
        <strong>Total Cars:</strong> {{ count($cars) }}
    </p>

    <h2>Collectors</h2>

    <ul>
        @foreach ($collectors as $collector)
        <li>
            <strong>{{ $collector['name'] }}</strong>
            <ul>
                @foreach ($collector['cars'] as $car)
                <li>
                    <strong>{{ $car['name'] }}</strong>
                    <ul>
                        <li>
                            <strong>Year:</strong> {{ $car['year'] }}
                        </li>
                    </ul>
                </li>
                @endforeach
            </ul>
        </li>
        @endforeach

    </ul>

    <h2>Cars</h2>
    <ul>
        @foreach ($cars as $car)
        <li>
            <strong>{{ $car['name'] }}</strong>
            <ul>
                <li>
                    <strong>Year:</strong> {{ $car['year'] }}
                </li>
            </ul>
        </li>
        @endforeach
    </ul>




</body>

</html>