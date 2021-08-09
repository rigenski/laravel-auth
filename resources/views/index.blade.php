@extends('layouts.app')

@section('main')
    <main>
        <div class="container">
            <div class="wrapper">

                <nav class="nav">
                    <div class="nav_title">
                        AuthText
                    </div>
                    <ul class="nav_list">
                        <li>
                            <a class="nav_item" href="#">Dashboard</a>
                        </li>
                        <li>
                            <a class="nav_item" href="#">Course</a>
                        </li>
                        <li>
                            <a class="nav_item" href="#">Discuss</a>
                        </li>
                        <li>
                            <a href={{route('logout')}}>
                                <button class="logout">
                                    Logout        
                                </button>
                            </a>
                        </li>
                    </ul>
                    <label class="nav_drawer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                        </svg>
                    </label>
                </nav>
                <section class="hero">
                    <div class="hero_left">
                        <h1 class="hero_title">Welcome {{auth()->user()->name}}.</h1>
                        <p class="hero_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                        <div class="hero_cta">
                            <button class="hero_button">
                                Get Started
                            </button>
                        </div>
                    </div>
                    <div class="hero_right">
                        <img src={{asset('assets/img/hero-illust.png')}} class="hero_image" alt="">
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection