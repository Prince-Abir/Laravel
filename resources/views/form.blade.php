<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{url('/home')}}">Navbar</a>
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" href="{{url('/home')}}" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="{{url('/register')}}" aria-current="page">Register <span class="visually-hidden">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link active" href="{{url('/register/view')}}" aria-current="page">View <span class="visually-hidden">(current)</span></a>
                  </li>
          
              </ul>
              <form class="d-flex my-2 my-lg-0">
                  <input class="form-control me-sm-2" type="text" placeholder="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
    </div>
    </nav>

    <form action="{{ url('/') }}/register" method="post">

        @csrf

        {{-- <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre> --}}

        <div class="container">
          
        
            <x-input label="Enter Your Name: " type="text"  name="name"/>
            <x-input label="Enter Your Email: " type="email"  name="email"/>
            <x-input label="Enter Your Password: " type="password"  name="password"/>
            <x-input label="Confirm Password: " type="password"  name="confirm_password"/>


            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

</body>

</html>
