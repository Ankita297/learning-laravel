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

<nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #2b6996;">
    <a class="navbar-brand" href="#">

      @if(session()->has('user_name'))

        {{session()->get('user_name')}}
        @else
        Guest
       @endif
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/register')}}">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/customer')}}">Customer</a>
            </li>


        </ul>

    </div>
</nav>
<br/>
<br/>

<a href="{{route('customer.create')}}"><button>Add</button></a>
<a href="{{url('/customer/trash')}}"><button>Trash</button></a>


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
<th>Action</th>

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
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-danger">Inactive</span>

                    @endif

                </td>
                <td>
                   {{-- <a href="{{url('/customer/delete/')}}/{{$customer->customers_id}}"><button class="btn btn-danger">Delete</button></a> --}}

                   <a href="{{route('customer.delete',['id'=>$customer->customers_id])}}"><button class="btn btn-danger">Trash</button></a>
                   <a href="{{route('customer.edit',['id'=>$customer->customers_id])}}"><button class="btn btn-success">Edit</button></a>

                </td>

            </tr>
             @endforeach



                </tbody>
            </table>
</body>
</html>
