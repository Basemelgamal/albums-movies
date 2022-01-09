@extends('layouts.app')
@section('content')
    <section class="contact-us bg-light">
        <div class="container">
            <h3 class="text-center">Login To Join Us</h3>
            <div class="row justify-content-center">
                <div class="col-md-7 col-sm-10">
                    <div class="contact-form">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="inputEmail">Your Email Addrss</label>
                                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Write Your Email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Your Password </label>
                                <input type="password" id="inputPassword" class="form-control" name="password" placeholder=" Write Your password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="text-center p-2">
                                <button type="submit" class="btn btn-gradiant">login</button>
                            </div>
                            <div>
                                <b> <span>Do not Have An Account ?</span> <a href="{{ route('register') }}" class="main-color ">Sign Up</a></b>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
