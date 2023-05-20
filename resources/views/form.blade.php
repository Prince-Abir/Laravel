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
            <div class="form-group" style="margin:10px">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{old('name')}}">
                <span class="text-danger">
                    @error('name')
                        {{$message}}
                    @enderror
                </span>
            </div>

            <div class="form-group" style="margin:10px">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{old('email')}}">
                <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </div>

            <div class="form-group" style="margin:10px">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
            </div>

            <div class="form-group" style="margin:10px">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password">
                <span class="text-danger">
                    @error('confirm_password')
                        {{$message}}
                    @enderror
                </span>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

</body>

</html>
