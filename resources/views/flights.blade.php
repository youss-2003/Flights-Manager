<!-- resources/views/flights/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight List</title>
    <link rel="icon" type="image/x-icon" href="https://seeklogo.com/images/H/hong-kong-airlines-logo-B5E8D635C9-seeklogo.com.png">
</head>
<body>
    <h1>Flight List</h1>

    @if($flights->isEmpty())
        <p>No flights available.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>From City</th>
                    <th>To City</th>
                    <th>Airline</th>
                    <th>Old Price</th>
                    <th>New Price</th>
                    <th>Duration</th>
                    <th>Has Wifi</th>
                    <th>Is Direct</th>
                    <th>Showcase</th>
                </tr>
            </thead>
            <tbody>
                @foreach($flights as $flight)
                    <tr>
                        <td>{{ $flight->from_city }}</td>
                        <td>{{ $flight->to_city }}</td>
                        <td>{{ $flight->airline }}</td>
                        <td>${{ number_format($flight->oldprice, 2) }}</td>
                        <td>${{ number_format($flight->newprice, 2) }}</td>
                        <td>{{ $flight->duration }}</td>
                        <td>{{ $flight->has_wifi ? 'Yes' : 'No' }}</td>
                        <td>{{ $flight->is_direct ? 'Yes' : 'No' }}</td>
                        <td>{{ $flight->showcase ? 'Yes' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
