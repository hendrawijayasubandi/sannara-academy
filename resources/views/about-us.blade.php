@extends('layouts._app')

@section('content')
<!-- HERO SECTION -->
<section id="hero-section" class="bg-cover bg-center bg-no-repeat" style="background-image: url('/images/assets/aron-visuals-1kdIG_258bU-unsplash.jpg');">
    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="mx-auto py-32 sm:py-48 lg:py-56">
            <div class="text-center font-heading">
                {{-- <h1 class="text-5xl font-semibold tracking-tight text-white sm:text-5xl">Lorem Ipsum</h1> --}}
                <p class="mt-8 text-pretty text-lg font-medium text-white sm:text-2xl">About Sannara Bali Akademi We believe learning should be an adventure. Our programs combine academic rigor with cultural exploration to create a unique educational experience.</p>
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

<!-- FORM SECTION -->
<section id="contact" class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
            <!-- Form Section -->
            <div class="bg-frosty-white rounded-2xl shadow-md p-8 h-full">
                <h2 class="text-2xl font-bold text-center text-primary font-heading mb-6">Get In Touch</h2>
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block mb-1 font-heading text-primary">Name</label>
                        <input type="text" id="name" name="name" class="w-full border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-1 font-heading text-primary">Email</label>
                        <input type="email" id="email" name="email" class="w-full border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required>
                    </div>
                    <div>
                        <label for="message" class="block mb-1 font-heading text-primary">Message</label>
                        <textarea id="message" name="message" rows="6" class="w-full border rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary" required></textarea>
                    </div>
                    <div class="text-left">
                        <button type="submit" class="w-40 px-6 py-2 bg-primary text-white font-heading rounded-md shadow-md hover:bg-primary/90">
                            Submit
                        </button>
                    </div>
                </form>
            </div>

            <!-- Our Location -->
            <div class="rounded-2xl flex flex-col justify-between h-full">
                <h3 class="text-2xl font-heading font-bold text-center text-primary mb-6">Our Location</h3>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 mb-6">
                    <div class="flex items-center gap-4">
                        <i class="ri-mail-line text-primary text-4xl"></i>
                        <span class="font-body text-primary">contact@sannara.com</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <i class="ri-global-line text-primary text-4xl"></i>
                        <span class="font-body text-primary">www.sannara.com</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <i class="ri-linkedin-box-line text-primary text-4xl"></i>
                        <span class="font-body text-primary">linkedin.com/sannara</span>
                    </div>
                </div>

                <div class="w-full h-96 rounded-lg overflow-hidden">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!..." 
                        class="w-full h-full border-0"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
