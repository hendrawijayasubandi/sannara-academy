@extends('layouts._app')

@section('content')
<!-- HERO SECTION -->
<section id="hero-section" class="bg-cover bg-center bg-no-repeat" style="background-image: url('/images/assets/aron-visuals-1kdIG_258bU-unsplash.jpg');">
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="mx-auto py-32 sm:py-48 lg:py-56">
            <div class="text-center font-heading">
                <h1 class="text-5xl font-semibold tracking-tight text-white sm:text-5xl">Find the Right Program for You</h1>
                <p class="mt-8 text-pretty text-lg font-medium text-white sm:text-2xl">From one-month voyages to short courses and customized corporate trainings.</p>
            </div>
        </div>
    </div>
</div>

<!-- PROGRAM HIGHLIGHT SECTION-->
<section id="program-highlights" class="py-24 bg-frosty-white">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-primary font-heading">Program Highlights</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden flex flex-col h-[420px]">
                <img src="{{ asset('images/assets/florian-giorgio-PSJ-B59f-LE-unsplash.jpg') }}" alt="Program 1" class="w-full h-60 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold font-heading mb-2 text-primary">Global Exchange</h3>
                    <p class="text-primary font-body">Experience diverse learning through international collaboration.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden flex flex-col h-[420px]">
                <img src="{{ asset('images/assets/fadhil-abhimantra-EPKUN4ViBGM-unsplash.jpg') }}" alt="Program 2" class="w-full h-60 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold font-heading mb-2 text-primary">Skill Workshop</h3>
                    <p class="text-primary font-body">Practical training to sharpen your professional abilities.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-md overflow-hidden flex flex-col h-[420px]">
                <img src="{{ asset('images/assets/ruben-hutabarat-vqR8ejL6Oe8-unsplash.jpg') }}" alt="Program 3" class="w-full h-60 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold font-heading mb-2 text-primary">Mentorship</h3>
                    <p class="text-primary font-body">Guidance from experts to help you grow and succeed.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
