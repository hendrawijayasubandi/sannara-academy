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

<!-- WHY SANNARA SECTION -->
<section id="features" class="py-24 bg-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-primary font-heading">Why Sannara</h2>
            {{-- <p class="text-lg text-primary mt-4">Lorem Ipsum</p> --}}
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="flex flex-col items-center justify-center text-center p-6 h-72 bg-frosty-white rounded-2xl shadow-md">
                <div class="mb-4 text-primary">
                    <!-- Example icon -->
                    <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <h3 class="text-primary text-xl font-bold font-heading mb-2">Global Learning</h3>
                <p class="text-primary font-heading">Engage in diverse, cross-cultural education.</p>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col items-center justify-center text-center p-6 h-72 bg-frosty-white rounded-2xl shadow-md">
                <div class="mb-4 text-primary">
                    <!-- Example icon -->
                    <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <h3 class="text-primary text-xl font-bold font-heading mb-2">Expert Mentorship</h3>
                <p class="text-primary">Learn from leading industry professionals.</p>
            </div>

            <!-- Card 3 -->
            <div class="flex flex-col items-center justify-center text-center p-6 h-72 bg-frosty-white rounded-2xl shadow-md">
                <div class="mb-4 text-primary">
                    <!-- Example icon -->
                    <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <h3 class="text-primary text-xl font-bold font-heading mb-2">Cultural Immersion</h3>
                <p class="text-primary">Immerse yourself in Bali's rich traditions.</p>
            </div>
            

            <!-- Card 4 -->
            <div class="flex flex-col items-center justify-center text-center p-6 h-72 bg-frosty-white rounded-2xl shadow-md">
                <div class="mb-4 text-primary">
                    <!-- Example icon -->
                    <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <h3 class="text-primary text-xl font-bold font-heading mb-2">Impact Projects</h3>
                <p class="text-primary">Work on real-world, community-driven projects.</p>
            </div>

            <!-- Card 5 -->
            <div class="flex flex-col items-center justify-center text-center p-6 h-72 bg-frosty-white rounded-2xl shadow-md">
                <div class="mb-4 text-primary">
                    <!-- Example icon -->
                    <svg class="w-10 h-10 mx-auto" fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <h3 class="text-primary text-xl font-bold font-heading mb-2">Career-Focused Certification</h3>
                <p class="text-primary">Boost your academic and professional profile.</p>
            </div>
        </div>
    </div>
</section>

@endsection
