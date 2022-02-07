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
        <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Name" id="email">
          </div>
          <span class="text-danger">

          @error('name')
{{$message}}
          @enderror
        </span>
<br/>
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="text" name="email" class="form-control" placeholder="Enter email" id="email">
        </div>
        <span class="text-danger">

            @error('email')
  {{$message}}
            @enderror
          </span>
  <br/>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="password" name="password" class="form-control" placeholder="Enter password" id="pwd">
        </div>
        <span class="text-danger">

            @error('password')
  {{$message}}
            @enderror
          </span>
  <br/>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Enter password" id="pwd">
          </div>
          <span class="text-danger">

            @error('password_confirmation')
  {{$message}}
            @enderror
          </span>
  <br/>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>
