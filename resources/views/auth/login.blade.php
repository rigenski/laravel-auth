@extends('layouts.app')

@section('main')
    <main class="auth">
        <div class="container">
            <div class="auth_card">
                <div class="auth_left">
                    <img src={{ asset('assets/img/login-illust.jpg')}} class="auth_image" alt="">
                </div>
                <div class="auth_right">
                    <h2 class="auth_title">Sign In</h2>
                    <div class="auth_group">
                        <form class="auth_form" action={{ route('postLogin') }} method="post">
                            @csrf
                            <input type="email" id="email" name="email" class="auth_input" placeholder="Email" autocomplete="off" value={{old('email')}} >
                            @error('email')
                            <p class="auth_message">*{{ $message }}</p>
                            @enderror
                            @if(session('error'))
                                <p class="auth_message">*{{ session('error') }}</p>
                            @endif
                            <input type="password" id="password" name="password" class="auth_input" placeholder="Password"  autocomplete="off" value={{old('password')}}>
                            @error('password')
                                <p class="auth_message">*{{ $message }}</p>
                            @enderror
                            <div class="auth_wrapper">
                                <a href={{ route('register') }} class="auth_util">Create Account !</a>
                                <button class="auth_submit">Continue</button>
                            </div>
                        </form>
                        <p>or</p>
                        <div class="auth_social">
                            <ul>
                                <li>
                                    <a class="auth_icon" href="#"><img src={{ asset('assets/icon/google-icon.png')}} alt=""></a>
                                </li>
                                <li>
                                    <a class="auth_icon" href="#"><img src={{ asset('assets/icon/facebook-icon.png')}} alt=""></a>
                                </li>
                                <li>
                                    <a class="auth_icon" href="#"><img src={{ asset('assets/icon/twitter-icon.png')}} alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection