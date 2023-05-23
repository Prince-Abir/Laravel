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
