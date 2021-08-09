@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            <div class="wrapper">
                <h1 class="home_title">Home Page,</h1>
                <h2 class="home_desc">Welcome {{ auth()->user()->name }}</h2>
                <a href={{ route('logout') }}>
                    <button class="logout">
                        Logout
                    </button>
                </a>
            </div>
        </div>
    </main>
@endsection