@extends('front.layout')

@section('title', 'Contact Us | FEASTRIA')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="Interior of a modern cozy restaurant with warm lighting"
            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBf6YSq1E5ler9khXGb65DfDabjv6E_cBMs57KHJw3UuNSsNwaAxnrvaohnXvyHk7ExLvLoiAOXfNp-5Bzbs8HjwrgkNfV_v19U0fsCHmgyKsliFRMNKeEYA6E6KvnBNLFjXWnn5mh0lZXjjJauHm33kmibJgX2NSMEpBlJyqjWyVWJoG2TDGwGQYV0M8qyzEAyIrh5FQ9bm7JjMk6MzaMQ1oyzJUmHf3HHBa_p9k-aUB_qsrzFXTZqDVYT2078mv7GSKYQcgHgdAOl");'>
        </div>
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-[-0.033em] mb-6">
                Contact Us
            </h1>
            <p class="text-white/90 text-lg md:text-xl font-normal leading-relaxed mb-8 max-w-2xl mx-auto">
                We'd love to hear from you. Reach out with any questions, feedback, or just to say hello. Our team is here
                to
                help.
            </p>
            <div class="flex items-center justify-center gap-4">
                <a href="{{ route('faq') }}"
                    class="min-w-[140px] cursor-pointer flex items-center justify-center rounded-lg h-12 px-6 bg-primary text-white text-base font-bold transition-transform hover:scale-105 hidden md:flex">
                    View FAQ
                </a>
                <a href="#map"
                    class="min-w-[140px] cursor-pointer flex items-center justify-center rounded-lg h-12 px-6 bg-white/10 backdrop-blur-md border border-white/20 text-white text-base font-bold hover:bg-white/20 transition-all hidden md:flex">
                    Location
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-20 px-4 md:px-10 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Left: Contact Form -->
            <div class="flex flex-col gap-8 bg-white dark:bg-[#2d1d17] p-8 md:p-10 rounded-2xl shadow-xl shadow-primary/5">
                <div class="flex flex-col gap-2">
                    <h2 class="text-2xl font-bold text-[#181311] dark:text-white">Send us a message</h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Fill out the form below and we'll get back to you
                        within 24 hours.</p>
                </div>
                <form class="flex flex-col gap-6">
                    <div class="flex flex-col gap-2">
                        <label class="text-[#181311] dark:text-white text-sm font-bold">Full Name</label>
                        <input
                            class="form-input w-full rounded-lg border-[#e6dedb] dark:border-white/10 dark:bg-background-dark focus:border-primary focus:ring-1 focus:ring-primary h-14 px-4 transition-all"
                            placeholder="Enter your name" type="text" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[#181311] dark:text-white text-sm font-bold">Email Address</label>
                        <input
                            class="form-input w-full rounded-lg border-[#e6dedb] dark:border-white/10 dark:bg-background-dark focus:border-primary focus:ring-1 focus:ring-primary h-14 px-4 transition-all"
                            placeholder="yourname@email.com" type="email" />
                    </div>
                    <div class="flex flex-col gap-2">
                        <label class="text-[#181311] dark:text-white text-sm font-bold">Message</label>
                        <textarea
                            class="form-textarea w-full rounded-lg border-[#e6dedb] dark:border-white/10 dark:bg-background-dark focus:border-primary focus:ring-1 focus:ring-primary p-4 transition-all"
                            placeholder="How can we help you?" rows="5"></textarea>
                    </div>
                    <button
                        class="w-full bg-primary hover:bg-[#d64a1b] text-white font-bold h-14 rounded-lg shadow-lg shadow-primary/30 transition-all text-lg flex items-center justify-center gap-2 mt-2"
                        type="submit">
                        <span>Send Message</span>
                        <span class="material-symbols-outlined text-xl">send</span>
                    </button>
                </form>
            </div>

            <!-- Right: Info & Map Block -->
            <div class="flex flex-col gap-10">
                <!-- Contact Info Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 gap-6">
                    <div
                        class="flex items-start gap-4 p-6 rounded-xl bg-primary/5 dark:bg-primary/10 border border-primary/10 transition-transform hover:-translate-y-1">
                        <div class="bg-primary text-white p-3 rounded-lg">
                            <span class="material-symbols-outlined">call</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Phone</h4>
                            <p class="text-gray-600 dark:text-gray-300">+1 (555) FEASTRIA</p>
                            <p class="text-xs text-gray-400 mt-1">Mon-Fri: 9am - 10pm</p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4 p-6 rounded-xl bg-primary/5 dark:bg-primary/10 border border-primary/10 transition-transform hover:-translate-y-1">
                        <div class="bg-primary text-white p-3 rounded-lg">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Email</h4>
                            <p class="text-gray-600 dark:text-gray-300">hello@feastria.com</p>
                            <p class="text-xs text-gray-400 mt-1">Direct support anytime</p>
                        </div>
                    </div>
                    <div
                        class="flex items-start gap-4 p-6 rounded-xl bg-primary/5 dark:bg-primary/10 border border-primary/10 transition-transform hover:-translate-y-1">
                        <div class="bg-primary text-white p-3 rounded-lg">
                            <span class="material-symbols-outlined">location_on</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1">Address</h4>
                            <p class="text-gray-600 dark:text-gray-300">123 Culinary Way, Food District<br />New York, NY
                                10001</p>
                        </div>
                    </div>
                </div>

                <!-- Map Block -->
                <div id="map"
                    class="flex-1 min-h-[300px] rounded-2xl overflow-hidden relative border border-primary/10 shadow-lg group">
                    <div class="absolute inset-0 bg-cover bg-center filter grayscale contrast-125 opacity-40 dark:opacity-20 group-hover:filter-none group-hover:opacity-60 transition-all duration-700"
                        data-alt="Abstract map pattern showing street blocks" data-location="New York City"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDl3yMkSlCW6JlIbQkZRQrFwMGuVPBb8aqGttIqSbfq5T8N7T4O97TCSZce3FyBqWxkCrR-LWQ3Ru_S-qVKYgRSzryV0D-PH7O_-vgYAMRGaJpK115BwtOnYN9sQNFdU7TJytaWovBVlDDRQDdKna3NvUwxQ6uvqB9li_efj2pe7cRpOmjb-PH-M5ZCwsn9lZG3772DDejjmAm7ItbZIdzCnOX1QP0kDfSqORFXeT2ZrPMynSPR5D7CGehtg3jWfqp_PnjOu-7QGfk4');">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-transparent"></div>
                    <div class="relative h-full w-full flex items-center justify-center flex-col gap-4 p-8">
                        <div class="relative">
                            <span
                                class="material-symbols-outlined text-primary text-6xl drop-shadow-lg animate-bounce">location_on</span>
                            <div
                                class="absolute bottom-1 left-1/2 -translate-x-1/2 w-4 h-1 bg-primary/20 rounded-full blur-sm">
                            </div>
                        </div>
                        <div
                            class="bg-white/90 dark:bg-background-dark/90 backdrop-blur-sm p-4 rounded-xl shadow-xl border border-primary/10 text-center max-w-[240px]">
                            <p class="font-bold text-sm">FEASTRIA Headquarters</p>
                            <p class="text-xs text-gray-500 mt-1">123 Culinary Way, NY</p>
                            <button
                                class="mt-3 text-primary text-xs font-bold flex items-center justify-center gap-1 hover:underline w-full">
                                Open in Maps <span class="material-symbols-outlined text-sm">open_in_new</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-24 px-4">
        <div
            class="max-w-5xl mx-auto bg-primary rounded-3xl p-8 md:p-16 flex flex-col md:flex-row items-center justify-between gap-10 overflow-hidden relative">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-32 h-32 bg-white/10 rounded-full -ml-16 -mb-16"></div>
            <div class="relative z-10 max-w-lg text-center md:text-left">
                <h2 class="text-3xl md:text-4xl font-black text-white mb-4 leading-tight">Join the Inner Circle</h2>
                <p class="text-white/80 text-lg">Receive exclusive invitations to tasting events, seasonal menu previews,
                    and culinary secrets from our chefs.</p>
            </div>
            <div class="relative z-10 w-full md:w-auto">
                <form class="flex flex-col sm:flex-row gap-3 w-full max-w-md mx-auto">
                    <input class="flex-1 h-14 rounded-lg px-6 border-none focus:ring-2 focus:ring-white text-[#181311]"
                        placeholder="Your email address" type="email" />
                    <button
                        class="h-14 px-8 bg-background-dark text-white font-bold rounded-lg hover:bg-background-dark/80 transition-all">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
