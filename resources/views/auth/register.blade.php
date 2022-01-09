@extends('layouts.app')

@section('content')
<section class="contact-us bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-10">
                <div class="contact-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group ">
                            <label for="inputName">Write Your Name</label>
                            <input type="text" id="inputName" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Write Your Name" required autofocus="name">
                            @if ($errors->has('name'))
                                dd($errors->has('name'));
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Your Email Addrss</label>
                            <input type="email" id="inputEmail" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Write Your Email" value="{{ old('email') }}"  required autocomplete="email">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Enter Password </label>
                            <input type="password" id="inputPassword" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Write Your Password" required autocomplete="new-password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="inputConfirmPassword">Confirm Password </label>
                            <input type="password" id="inputConfirmPassword" class="form-control" name="password_confirmation" placeholder="Confirm Your Password" required autocomplete="new-password">
                            @if ($errors->has('password_confirmation'))
                                <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>

                        <div class="text-center p-2">
                            <button type="submit" class="btn btn-gradiant">Sign Up</button>
                        </div>

                    </form>
                    <div>
                    <b> <span>Have An Account ?</span> <a href="{{ route('login') }}" class="main-color ">Login</a></b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
