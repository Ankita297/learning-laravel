<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

<div class="container">
    <h1 class="text-center">{{$title}}</h1>
    <form method="POST" action="{{$url}}">
        @csrf
@php
$demo=1
@endphp
<div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control" placeholder="" value={{$customer->name??" "}} >

  </div>
  <br/>
  <div class="form-group">
    <label >Email</label>
    <input type="email" name="email" class="form-control" placeholder="" value={{$customer->email??" "}} >

  </div>
  <br/>
  <div class="form-group">
    <label >Password</label>
    <input type="password" name="password" class="form-control" placeholder="" value={{$customer->password??" "}} >

  </div>
  <br/>
  <div class="form-group">
    <label >Country</label>
    <input type="text" name="country" class="form-control" placeholder="" value={{$customer->country??" "}} >

  </div>
  <br/>
  <div class="form-group">
    <label >State</label>
    <input type="text" name="state" class="form-control" placeholder="" value={{$customer->state??" "}} >

  </div>
  <br/>

  <div class="form-group">
    <label >Address</label>
    <input type="text" name="address" class="form-control" placeholder="" value={{$customer->address??" "}} >

  </div>
  <br/>
  <div class="form-group">
    <label >DOB</label>
    <input type="date" name="dob" class="form-control" placeholder="" value={{$customer->dob?? ""}} >

  </div>
  <br/>
  <p>Please select your gender:</p>
  <input type="radio"  name="gender" value="M"   {{$customer->gender??" "=="M"?"checked":""}}
  />
  <label for="male">Male</label><br>
  <input type="radio"  name="gender" value="W"   {{$customer->gender??" "=="W"?"checked":""}}
  />

  <label for="female">female</label><br>
  <input type="radio"  name="gender" value="O"   {{$customer->gender?? " "=="O"?"checked":""}}
  />

  <label for="other">Other</label>
  <br/><br/>




        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
