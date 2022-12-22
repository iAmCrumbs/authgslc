@extends('template')

@section('title', 'Login')

@section('content')

<main class="form-signin w-25 mx-auto py-3 my-5 border border-dark rounded">
    <form class="mx-auto px-5" style="padding-bottom:60%;">
        <h1 class="h3 mb-3 fw-normal text-center fw-bold">Sign in</h1>
        <div class="form-floating my-4">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <a href="{{route("google.login")}}" class="btn btn-primary">Sign in</button>

    </form>
</main>

@endsection
