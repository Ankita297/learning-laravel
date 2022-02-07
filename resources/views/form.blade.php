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
    <div class="container">
        <h1>
            Register Form
        </h1>
    <form action="{{url('/')}}/register" method="POST">
        @csrf
        <x-input type="text" placeholder="Enter your name" name="name" label="Name" />
        <x-input type="email" placeholder="Enter your email" name="email" label="Email" />
        <x-input type="password" placeholder="Enter your Password" name="password" label="Password" />
        <x-input type="text" placeholder=" Confirm Password" name="password_confirmation" label="Confirm Password" />

       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>
