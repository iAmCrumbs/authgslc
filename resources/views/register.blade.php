@extends('template')

@section('title', 'Register')

@section('content')

<main class="form-signin w-25 mx-auto py-3 my-5 border border-dark rounded">
    <form class="mx-auto px-5" method="POST" action="/createUser">
        @csrf
        <h1 class="h3 mb-3 fw-normal text-center fw-bold">Sign Up</h1>
        <div class="form-floating my-4">
            <input name="username" type="text" class="form-control" id="floatingInput" placeholder="Username">
            <label for="floatingInput">Username</label>
            @error('username')
                <div class="text-danger mt-2">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-floating my-4">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
            @error('email')
                <div class="text-danger mt-2">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-floating my-4">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
            @error('password')
                <div class="text-danger mt-2">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-floating my-4">
            <input name="phone_number" type="text" class="form-control" id="floatingInput" placeholder="PhoneNumber">
            <label for="floatingInput">Phone Number</label>
            @error('phoneNumber')
                <div class="text-danger mt-2">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-floating my-4">
            <input name="address" type="text" class="form-control" id="floatingInput" placeholder="Address">
            <label for="floatingInput">Address</label>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>

    </form>
</main>

@endsection
