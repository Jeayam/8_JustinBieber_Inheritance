@extends('layouts.layout')
@section('Title', 'Home') 
@section('body_style', "font-family: 'Inter', sans-serif; min-height: 100vh; display: flex; flex-direction: column;")


@section('content')
        <main class="flex-1">
            <section class="mx-auto max-w-7xl px-4 py-12 md:px-8">
                <p class="text-sm font-semibold uppercase tracking-wide text-slate-700 dark:text-slate-300">
                    About Me
                </p>
                <h1 class="mt-3 text-4xl font-bold text-slate-900 dark:text-slate-50">
                    Jonathan Adriel Dan Jason
                </h1>
                <span class="text-sm font-semibold uppercase tracking-wide text-slate-900 dark:text-slate-50">
                    Studen UC MAKASSAR
                </span>
    
                <div class="mt-6 grid grid-cols-1 gap-8 lg:grid-cols-2 lg:items-stretch">
                    <div class="space-y-4 text-left leading-relaxed text-slate-600 dark:text-slate-100">
                        <p>
                            Jonathan Adriel Dan Jason adalah seorang mahasiswa di Universitas Islam Negeri Makassar yang sedang menjalani perkuliahan di program studi Teknik Informatika. Ia memiliki minat yang kuat dalam bidang teknologi dan programming, serta aktif dalam berbagai kegiatan kemahasiswaan.
                        </p>
                        <p>
                            Dengan dedikasi dan semangat belajar yang tinggi, Jonathan terus berusaha untuk meningkatkan kemampuan dan pengetahuannya dalam dunia teknologi informasi. Ia juga senang berkontribusi dalam proyek-proyek open source dan komunitas developer.
                        </p>
                    </div>
                </div>
            </section>
        </main>
    @endsection


