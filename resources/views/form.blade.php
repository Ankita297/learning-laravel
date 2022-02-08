<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #2b6996;">
        <a class="navbar-brand" href="#">Tech</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/register') }}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/customer') }}">Customer</a>
                </li>


            </ul>

        </div>
    </nav>
    <br />
    <br />


    <div class="container">
        <h1>
            Register Form
        </h1>
        <form action="{{ url('/') }}/register" method="POST">
            @csrf
            <x-input type="text" placeholder="Enter your name" name="name" label="Name" />
            <x-input type="email" placeholder="Enter your email" name="email" label="Email" />
            <x-input type="password" placeholder="Enter your Password" name="password" label="Password" />
            <x-input type="text" placeholder=" Confirm Password" name="password_confirmation"
                label="Confirm Password" />


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br />
        <br />

        {!! Form::open(['url' => 'register', 'method' => 'post']) !!}

        {!! Form::text('name', '', [
    'placeholder' => 'enter your name',
]) !!}

        <br />
        <br />
        {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']) !!}


        {!! Form::close() !!}



    </div>
</body>

</html>
