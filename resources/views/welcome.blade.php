@extends('layouts._app')

@section('content')
<!-- HERO SECTION -->
<section id="hero-section" class="bg-cover bg-center bg-no-repeat" style="background-image: url('/images/assets/aron-visuals-1kdIG_258bU-unsplash.jpg');">
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="mx-auto py-32 sm:py-48 lg:py-56">
            <div class="text-center font-heading">
                <h1 class="text-5xl font-semibold tracking-tight text-white sm:text-5xl">Experience Learning Beyond the Classroom</h1>
                <p class="mt-8 text-pretty text-lg font-medium text-white sm:text-2xl">Immerse in Bali’s culture, community & innovation.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#"
                        class="rounded-md bg-primary hover:bg-white hover:text-primary border border-primary px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Explorer Programs
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ABOUT SECTION -->
<section id="about-section" class="py-24 bg-frosty-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <div class="w-full">
                <div class="aspect-w-4 aspect-h-2">
                    <img src="/images/assets/krisna-yuda-MxbjqC6Sj1w-unsplash.jpg" alt="About Sannara Bali" class="object-cover rounded-2xl shadow-lg w-full h-full">
                </div>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-primary font-heading mb-4">About Snapshot</h2>
                <p class="text-lg text-gray-700 font-body leading-relaxed">
                    Welcome to <strong class="font-heading">Sannara Bali Akademi</strong>. Where education meets culture.
                    We blend academic excellence, real-world skills, and cultural immersion to create transformative learning experiences.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
