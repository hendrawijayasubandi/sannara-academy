@extends('layouts._app')

@section('content')
    <!-- HERO SECTION -->
    <section id="hero-section" class="bg-center bg-no-repeat bg-cover"
        style="background-image: url('/images/assets/aron-visuals-1kdIG_258bU-unsplash.jpg');">
        <div class="relative px-6 isolate pt-14 lg:px-8">
            <div class="py-32 mx-auto sm:py-48 lg:py-56">
                <div class="text-center font-heading">
                    <h1 class="text-5xl font-semibold tracking-tight text-white sm:text-5xl">Find the Right Program for You
                    </h1>
                    <p class="mt-8 text-lg font-medium text-white text-pretty sm:text-2xl">From one-month voyages to short
                        courses and customized corporate trainings.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROGRAM HIGHLIGHT SECTION-->
    <section id="program-highlights" class="py-24 bg-frosty-white">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="mb-16 text-center">
                <h2 class="text-3xl font-bold text-primary font-heading">Program Highlights</h2>
            </div>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden flex flex-col h-[420px]">
                    <img src="{{ asset('images/assets/florian-giorgio-PSJ-B59f-LE-unsplash.jpg') }}" alt="Program 1"
                        class="object-cover w-full h-60">
                    <div class="flex flex-col flex-grow p-6">
                        <h3 class="mb-2 text-xl font-bold font-heading text-primary">Nusantara Learning Voyage</h3>
                        <p class="text-primary font-body">One-month immersive learning journey.</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden flex flex-col h-[420px]">
                    <img src="{{ asset('images/assets/fadhil-abhimantra-EPKUN4ViBGM-unsplash.jpg') }}" alt="Program 2"
                        class="object-cover w-full h-60">
                    <div class="flex flex-col flex-grow p-6">
                        <h3 class="mb-2 text-xl font-bold font-heading text-primary">MasterClass</h3>
                        <p class="text-primary font-body">4–7 day intensive courses tailored to professionals.</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white rounded-2xl shadow-md overflow-hidden flex flex-col h-[420px]">
                    <img src="{{ asset('images/assets/ruben-hutabarat-vqR8ejL6Oe8-unsplash.jpg') }}" alt="Program 3"
                        class="object-cover w-full h-60">
                    <div class="flex flex-col flex-grow p-6">
                        <h3 class="mb-2 text-xl font-bold font-heading text-primary">Custom & Corporate Programs</h3>
                        <p class="text-primary font-body">Bespoke programs for organizations and institutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
