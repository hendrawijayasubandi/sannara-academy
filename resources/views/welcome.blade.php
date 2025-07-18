@extends('layouts._app')

@section('content')
    <!-- HERO SECTION -->
    <section id="hero-section" class="bg-center bg-no-repeat bg-cover"
        style="background-image: url('/images/assets/aron-visuals-1kdIG_258bU-unsplash.jpg');">
        <div class="relative px-6 isolate pt-14 lg:px-8">
            <div class="py-32 mx-auto sm:py-48 lg:py-56">
                <div class="text-center font-heading">
                    <h1 class="text-5xl font-semibold tracking-tight text-white sm:text-5xl">Experience Learning Beyond the
                        Classroom</h1>
                    <p class="mt-8 text-lg font-medium text-white text-pretty sm:text-2xl">Immerse in Bali’s culture,
                        community & innovation.</p>
                    <div class="flex items-center justify-center mt-10 gap-x-6">
                        <a href="#"
                            class="rounded-md bg-primary hover:bg-white hover:text-primary border border-primary px-3.5 py-2.5 text-lg font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Explorer
                            Programs
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about-section" class="py-24 bg-frosty-white">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 gap-10 md:grid-cols-2">
                <div class="w-full">
                    <div class="aspect-w-3 aspect-h-2">
                        <img src="/images/assets/krisna-yuda-MxbjqC6Sj1w-unsplash.jpg" alt="About Sannara Bali"
                            class="object-cover w-full h-full shadow-lg rounded-2xl">
                    </div>
                </div>
                <div>
                    <h2 class="mb-4 text-3xl font-bold text-primary font-heading">About Snapshot</h2>
                    <p class="text-lg leading-relaxed text-gray-700 font-body">
                        Welcome to <strong class="font-heading">Sannara Bali Akademi</strong>. Where education meets
                        culture.
                        We blend academic excellence, real-world skills, and cultural immersion to create transformative
                        learning experiences.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY SANNARA SECTION -->
    <section id="features" class="py-24 bg-white">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="mb-16 text-center">
                <h2 class="text-3xl font-bold text-primary font-heading">Why Sannara</h2>
            </div>
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <div
                    class="flex flex-col items-center justify-center p-6 text-center transition shadow-md h-72 bg-frosty-white rounded-2xl hover:outline hover:outline-primary hover:outline-3">
                    <div class="mb-4 text-7xl text-primary">
                        <i class="ri-earth-fill"></i>
                    </div>
                    <h3 class="mb-2 text-2xl font-bold text-primary font-heading">Global Learning</h3>
                    <p class="text-md text-primary font-heading">Engage in diverse, cross-cultural education.</p>
                </div>

                <!-- Card 2 -->
                <div
                    class="flex flex-col items-center justify-center p-6 text-center transition shadow-md h-72 bg-frosty-white rounded-2xl hover:outline hover:outline-primary hover:outline-3">
                    <div class="mb-4 text-7xl text-vivid-sky-blue">
                        <i class="ri-presentation-fill"></i>
                    </div>
                    <h3 class="mb-2 text-2xl font-bold text-primary font-heading">Expert Mentorship</h3>
                    <p class="text-md text-primary font-heading">Learn from leading industry professionals.</p>
                </div>

                <!-- Card 3 -->
                <div
                    class="flex flex-col items-center justify-center p-6 text-center transition shadow-md h-72 bg-frosty-white rounded-2xl hover:outline hover:outline-primary hover:outline-3">
                    <div class="mb-4 text-7xl text-pink">
                        <i class="ri-flower-fill"></i>
                    </div>
                    <h3 class="mb-2 text-2xl font-bold text-primary font-heading">Cultural Immersion</h3>
                    <p class="text-md text-primary font-heading">Immerse yourself in Bali's rich traditions.</p>
                </div>

                <!-- Card 4 -->
                <div
                    class="flex flex-col items-center justify-center p-6 text-center transition shadow-md h-72 bg-frosty-white rounded-2xl hover:outline hover:outline-primary hover:outline-3">
                    <div class="mb-4 text-7xl text-tosca">
                        <i class="ri-rocket-2-fill"></i>
                    </div>
                    <h3 class="mb-2 text-2xl font-bold text-primary font-heading">Impact Projects</h3>
                    <p class="text-md text-primary font-heading">Work on real-world, community-driven projects.</p>
                </div>

                <!-- Card 5 -->
                <div
                    class="flex flex-col items-center justify-center p-6 text-center transition shadow-md h-72 bg-frosty-white rounded-2xl hover:outline hover:outline-primary hover:outline-3">
                    <div class="mb-4 text-7xl text-sunshine-yellow">
                        <i class="ri-graduation-cap-fill"></i>
                    </div>
                    <h3 class="mb-2 text-2xl font-bold text-primary font-heading">Career-Focused Certification</h3>
                    <p class="text-md text-primary font-heading">Boost your academic and professional profile.</p>
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

    <!-- TESTIMONIAL SECTION-->
    <section id="testimonial" class="py-24 bg-white">
        <div class="max-w-4xl px-6 mx-auto text-center lg:px-8 font-heading">
            <h2 class="mb-12 text-3xl font-bold text-primary font-heading">What our client say</h2>

            <div
                class="flex items-center justify-center max-w-xl p-8 mx-auto text-center shadow-md bg-frosty-white outline outline-1 outline-primary h-80 rounded-2xl">
                <p class="text-lg italic text-primary font-body">
                    "Sannara gave me a global perspective and real impact experience." — <span
                        class="font-semibold font-body text-primary">Alumni, France</span>
                </p>
            </div>
        </div>
    </section>

    <!-- CTA SECTION-->
    <section id="cta" class="py-20 text-center bg-frosty-white text-primary">
        <div class="max-w-3xl px-6 mx-auto">
            <h2 class="mb-4 text-3xl font-bold md:text-4xl font-heading">Ready to Start Your Journey?</h2>
            <h2 class="text-xl font-bold md:text-3xl font-heading">Apply Now!</>
        </div>
    </section>

    <!-- FORM SECTION -->
    <section id="contact" class="py-24 bg-white">
        <div class="px-6 mx-auto max-w-7xl lg:px-8">
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
    </section>
@endsection

@section('scripts')
@endsection
