<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>State</th>
                        <th>Country</th>
                        <th>Status</th>


                    </tr>
                </thead>
                <tbody>

             @foreach ($customers as $customer)
             <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>
                @if($customer->gender=='M')
                 Male
                 @elseif($customer->gender=='W')
                 Female
                 @else
                 Other
                 @endif
                </td>
                <td>{{$customer->dob}}</td>
                <td>{{$customer->state}}</td>
                <td>{{$customer->country}}</td>
                <td>
                    @if($customer->status=="1")
                    Active
                    @else
                    Inactive

                    @endif

                </td>

            </tr>
             @endforeach



                </tbody>
            </table>
</body>
</html>
