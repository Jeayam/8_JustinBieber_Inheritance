@extends('layouts.layout')
@section('Title', 'Home') 
@section('body_style', "font-family: 'Inter', sans-serif; min-height: 100vh; display: flex; flex-direction: column;")


@section('content')
        <main class="flex-1">
        <section class="px-4 py-20 md:px-8 md:py-32" aria-labelledby="hero-title">
            <div class="mx-auto flex max-w-7xl flex-col items-center gap-12 lg:flex-row lg:justify-center lg:gap-20">

                <img src="{{ asset('images/image.png') }}"
                     alt="Foto Justin Bieber"
                     class="size-64 rounded-full object-cover ring-2 ring-white ring-offset-2 md:size-80 lg:size-96">

                <div class="max-w-2xl text-center lg:text-left">
                    <h1 id="hero-title" class="mt-4 text-4xl font-bold text-white md:text-6xl">
                        Hi, I'm
                        <span class="block text-5xl md:text-7xl">Justin Bieber!</span>
                    </h1>
                    <p class="mt-6 text-lg leading-relaxed text-neutral-400">
                        Explore the music, journey, achievements, and personal story of one of the world's biggest pop artists.
                    </p>

                    <a href="/about"
                       data-about-link
                       class="mt-8 inline-flex items-center justify-center rounded-full bg-neutral-200 px-6 py-3 text-base font-semibold text-neutral-950 transition-colors hover:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-neutral-300">
                        Get To Know Me
                    </a>
                </div>

            </div>
        </section>
    </main>
    @endsection


