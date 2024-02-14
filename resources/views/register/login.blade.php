<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>

<body>
    <h1>Login Form</h1>
    <form action="/login/store" method="POST">
        @csrf
        <div>
            <input type="email" placeholder="Email" name="email" value="{{old('email')}}">

        </div>
        @error('email')
        <p>{{$message}}</p>
        @enderror
        <div>
            <input type="password" placeholder="Password" name="password">

        </div>
        @error('password')
        <p>{{$message}}</p>
        @enderror
        <button type="submit">Login</button>
    </form>
</body>

</html>