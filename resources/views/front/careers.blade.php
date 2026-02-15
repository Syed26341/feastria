@extends('front.layout')

@section('title', 'Careers | FEASTRIA')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[50vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="Busy commercial kitchen team working together"
            style='background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("https://images.unsplash.com/photo-1556910103-1c02745a30bf?ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=80");'>
        </div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <span class="text-primary font-bold uppercase tracking-[0.3em] text-sm mb-4 block">Join Our Team</span>
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-tight mb-6">
                Careers
            </h1>
            <p class="text-white/90 text-lg md:text-xl font-normal max-w-2xl mx-auto mb-8 leading-relaxed">
                We are always looking for passionate, talented, and driven individuals to join the FEASTRIA family.
            </p>
        </div>
    </section>

    <!-- Our Culture -->
    <section class="py-20 px-4 md:px-10 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-20">
            <div class="space-y-6">
                <h2 class="text-4xl font-black text-[#181311] dark:text-white">Why Work With Us?</h2>
                <p class="text-[#181311]/70 dark:text-white/70 text-lg leading-relaxed">
                    At FEASTRIA, we believe that our staff is our most valuable ingredient. We foster a supportive,
                    creative, and fast-paced environment where learning and growth are encouraged.
                </p>
                <ul class="space-y-4 pt-4 dark:text-white/90">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">check_circle</span>
                        <span>Competitive salary and benefits package</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">check_circle</span>
                        <span>Opportunities for career advancement</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">check_circle</span>
                        <span>Staff meals and dining discounts</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">check_circle</span>
                        <span>Continuous training and mentorship</span>
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="h-64 rounded-xl overflow-hidden bg-gray-200">
                    <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Cocktail crafting" class="w-full h-full object-cover">
                </div>
                <div class="h-64 rounded-xl overflow-hidden bg-gray-200 mt-8">
                    <img src="https://images.unsplash.com/photo-1600565193348-f74bd3c7ccdf?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Chefs talking" class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <!-- Open Positions -->
        <div class="bg-primary/5 dark:bg-white/5 rounded-3xl p-8 md:p-16">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-black text-[#181311] dark:text-white mb-4">Current Openings</h2>
                <p class="text-[#181311]/60 dark:text-white/60">Ready to make your mark? Apply for one of our open roles
                    below.</p>
            </div>

            <div class="space-y-4">
                <!-- Job 1 -->
                <div
                    class="bg-white dark:bg-white/5 p-6 rounded-xl flex flex-col md:flex-row justify-between items-center gap-4 border border-[#e6dedb] dark:border-white/10 hover:border-primary transition-colors group">
                    <div class="text-center md:text-left">
                        <h3
                            class="text-xl font-bold text-[#181311] dark:text-white group-hover:text-primary transition-colors">
                            Line Cook</h3>
                        <p class="text-sm text-[#8a6b60] dark:text-white/60">Kitchen • Full Time • $22 - $26/hr</p>
                    </div>
                    <button
                        class="px-6 py-2 border border-primary text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-all text-sm">
                        View Details
                    </button>
                </div>
                <!-- Job 2 -->
                <div
                    class="bg-white dark:bg-white/5 p-6 rounded-xl flex flex-col md:flex-row justify-between items-center gap-4 border border-[#e6dedb] dark:border-white/10 hover:border-primary transition-colors group">
                    <div class="text-center md:text-left">
                        <h3
                            class="text-xl font-bold text-[#181311] dark:text-white group-hover:text-primary transition-colors">
                            Front of House - Server</h3>
                        <p class="text-sm text-[#8a6b60] dark:text-white/60">Service • Part Time / Full Time • $15/hr + Tips
                        </p>
                    </div>
                    <button
                        class="px-6 py-2 border border-primary text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-all text-sm">
                        View Details
                    </button>
                </div>
                <!-- Job 3 -->
                <div
                    class="bg-white dark:bg-white/5 p-6 rounded-xl flex flex-col md:flex-row justify-between items-center gap-4 border border-[#e6dedb] dark:border-white/10 hover:border-primary transition-colors group">
                    <div class="text-center md:text-left">
                        <h3
                            class="text-xl font-bold text-[#181311] dark:text-white group-hover:text-primary transition-colors">
                            Bartender</h3>
                        <p class="text-sm text-[#8a6b60] dark:text-white/60">Bar • Full Time • Experience Required</p>
                    </div>
                    <button
                        class="px-6 py-2 border border-primary text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-all text-sm">
                        View Details
                    </button>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-[#181311]/70 dark:text-white/70 mb-4">Don't see the right fit? Send us your resume anytime.
                </p>
                <a href="mailto:careers@feastria.com"
                    class="inline-block text-primary font-bold underline underline-offset-4 hover:text-[#d3451b]">careers@feastria.com</a>
            </div>
        </div>
    </section>
@endsection
