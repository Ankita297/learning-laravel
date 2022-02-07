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
<div class="container">
    <h1 class="text-center">Registration Form</h1>
    <form method="POST" action="{{url('/')}}/customer">
        @csrf
@php
$demo=1
@endphp

<x-input  type="text" label="Name" name="name" placeholder="Please Enter the name" :demo="$demo"/>


<x-input type="email"  label="email" name="email" placeholder="Enter the email"/>
<x-input type="password" label="Password" name="password" placeholder="Enter the Password"/>
<x-input type="text" name="country" label="Country" placeholder="Enter the country"/>
<x-input type="text" name="state" label="State" placeholder=" Enter the state"/>
<x-input type="text" name="address" label="Address" placeholder=" Enter the address"/>

<x-input type="date" name="dob" label="Date of birth" placeholder=""/>
<p>Please select your gender:</p>
<input type="radio"  name="gender" value="M">
<label for="male">Male</label><br>
<input type="radio"  name="gender" value="W">
<label for="female">female</label><br>
<input type="radio"  name="gender" value="O">
<label for="other">Other</label>
<br/><br/>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
