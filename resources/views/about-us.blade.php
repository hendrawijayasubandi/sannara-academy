@extends('layouts._app')

@section('content')
    <!-- HERO SECTION -->
    <section id="hero-section" class="bg-center bg-no-repeat bg-cover"
        style="background-image: url('/images/assets/hero section img.png');">
        <div class="relative px-6 isolate pt-14 lg:px-8">
            <div class="py-32 mx-auto sm:py-48 lg:py-56">
                <div class="text-center font-heading">
                    {{-- <h1 class="text-5xl font-semibold tracking-tight text-white sm:text-5xl">Lorem Ipsum</h1> --}}
                    <p class="mt-8 text-lg font-medium text-white text-pretty sm:text-2xl">About Sannara Bali Akademi We
                        believe learning should be an adventure. Our programs combine academic rigor with cultural
                        exploration to create a unique educational experience.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MEET THE TEAM SECTION -->
    <section id="team" class="py-24 bg-frosty-white">
        <div class="mb-12 text-center">
            <h2 class="text-3xl font-bold text-primary font-heading">Meet The Team</h2>
        </div>

        <div class="grid grid-cols-1 gap-10 px-6 mx-auto md:grid-cols-2 lg:grid-cols-3 max-w-7xl lg:px-8">
            <!-- Card 1 -->
            <div class="flex flex-col h-full">
                <img src="{{ asset('images/assets/Bryan Auriol.jpg') }}" alt="Team Member"
                    class="rounded-2xl w-full aspect-[3/2] object-cover mb-4">
                <div class="flex-grow text-left">
                    <h3 class="text-2xl font-bold font-heading text-primary">Bryan Auriol</h3>
                    <p class="mb-2 text-lg font-semibold font-heading text-primary">Managing Directos</p>
                    <p class="mb-4 text-sm text-primary font-body">Short description</p>
                </div>
                <div class="flex justify-center">
                    <a href="#" class="text-3xl transition-colors duration-300 text-primary hover:text-blue-600">
                        <i class="ri-linkedin-box-fill"></i>
                    </a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex flex-col h-full">
                <img src="{{ asset('images/assets/Komang Sarining.jpg') }}" alt="Team Member"
                    class="rounded-2xl w-full aspect-[3/2] object-cover mb-4">
                <div class="flex-grow text-left">
                    <h3 class="text-2xl font-bold font-heading text-primary">Komang Sarining</h3>
                    <p class="mb-2 text-lg font-semibold font-heading text-primary">Secretary and Finance</p>
                    <p class="mb-4 text-sm text-primary font-body">Short description</p>
                </div>
                <div class="flex justify-center">
                    <a href="#" class="text-3xl transition-colors duration-300 text-primary hover:text-blue-600">
                        <i class="ri-linkedin-box-fill"></i>
                    </a>
                </div>
            </div>

            <!-- Card 3 -->
            {{-- <div class="flex flex-col h-full">
                <img src="{{ asset('images/assets/people-1.png') }}" alt="Team Member"
                    class="rounded-2xl w-full aspect-[3/2] object-cover mb-4">
                <div class="flex-grow text-left">
                    <h3 class="text-2xl font-bold font-heading text-primary">Michael Lee</h3>
                    <p class="mb-2 text-lg font-semibold font-heading text-primary">Creative Director</p>
                    <p class="mb-4 text-sm text-primary font-body">Crafting innovative experiences through design and
                        storytelling.</p>
                </div>
                <div class="flex justify-center">
                    <a href="#" class="text-3xl text-primary">
                        <i class="ri-linkedin-box-fill"></i>
                    </a>
                </div>
            </div> --}}
        </div>
    </section>

    <!-- FORM SECTION -->
    <section id="contact" class="relative py-24 bg-white">
        <!-- Background Pattern -->
        <div class="absolute inset-0 z-0 bg-repeat pointer-events-none"
            style="background-image: url('/images/assets/patternpad-2025-07-19-09-37-05.svg'); background-size: 500px;">
        </div>

        <!-- Content Wrapper with higher z-index -->
        <div class="relative z-10 px-6 mx-auto max-w-7xl lg:px-8">
            <div class="grid items-start grid-cols-1 gap-6 md:grid-cols-2">
                <!-- Form Section -->
                <div class="h-full p-8 shadow-md bg-frosty-white rounded-2xl">
                    <h2 class="mb-6 text-2xl font-bold text-center text-primary font-heading">Get In Touch</h2>
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block mb-1 font-heading text-primary">Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                                required>
                        </div>
                        <div>
                            <label for="email" class="block mb-1 font-heading text-primary">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-primary"
                                required>
                        </div>
                        <div>
                            <label for="message" class="block mb-1 font-heading text-primary">Message</label>
                            <textarea id="message" name="message" rows="6"
                                class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-primary" required></textarea>
                        </div>
                        <div class="text-left">
                            <button type="submit"
                                class="w-40 px-6 py-2 text-white rounded-md shadow-md bg-primary font-heading hover:bg-primary/90">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Our Location -->
                <div class="h-full p-8 shadow-md bg-frosty-white rounded-2xl">
                    <div class="flex flex-col justify-between h-full rounded-2xl">
                        <h3 class="mb-6 text-2xl font-bold text-center font-heading text-primary">Our Location</h3>
                        <div class="grid grid-cols-1 gap-4 mb-6 sm:grid-cols-2">
                            <div class="flex items-center gap-4">
                                <i class="text-4xl ri-mail-line text-primary"></i>
                                <span class="font-body text-primary">contact@sannara.com</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <i class="text-4xl ri-global-line text-primary"></i>
                                <span class="font-body text-primary">www.sannara.com</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <i class="text-4xl ri-linkedin-box-fill text-primary"></i>
                                <span class="font-body text-primary">linkedin.com/sannara</span>
                            </div>
                        </div>

                        <div class="w-full overflow-hidden rounded-lg h-96">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!..." class="w-full h-full border-0"
                                allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
