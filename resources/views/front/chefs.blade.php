@extends('front.layout')

@section('title', 'Our Chefs | FEASTRIA')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="Team of chefs in a professional kitchen"
            style='background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAw5EbojkyQ6FVVNA9csDbY3N1_xvAqV8Vrd0dQWBGE0a1w-qqx0SWVRU72ZQ4kdpH6qqlyi2NI7lMdpgFSRfQ0T5Phu8MBPdJihuDQGmOSem93UkofL_KXCenAZGYmMhcUlkDByKEb5-EIFCnLUjyIUCFuPfJSVplp-qeBkAFURmyobip8F9mhguh-dmaDQFJ2o6pnJ94Ig5sf97v6zNUd-h1jQl-yfneHLfGapq9unGcz7mVshozjd3IZ-QaGcrvMWmZ6k1rA2xmU");'>
        </div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <span class="text-primary font-bold uppercase tracking-[0.3em] text-sm mb-4 block">The Culinary Team</span>
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-tight mb-6">
                Meet the Masters
            </h1>
            <p class="text-white/90 text-lg md:text-xl font-normal max-w-2xl mx-auto leading-relaxed">
                Passion, precision, and a relentless pursuit of perfection. Meet the visionaries behind every dish.
            </p>
        </div>
    </section>

    <!-- Chef Profiles -->
    <section class="py-20 px-4 md:px-10 max-w-7xl mx-auto">
        <!-- Executive Chef -->
        <div class="flex flex-col lg:flex-row gap-12 items-center mb-24">
            <div class="w-full lg:w-1/2 aspect-[3/4] rounded-2xl overflow-hidden shadow-2xl relative group">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB85c6lyC22hLDP5xCWDbp_P6lLBmMtjWDYd_jbJM54onLETIZCx0qp6_CIDtCnQ6TFoVlyzX1vHB6x6A0Mhy7UGQm9qKmCeDormAeZaiGmB2nakf6yArLZBoluDS31khHDjMg-mGlf2uOdaXKocF5KGie92YoPTN8RJytF5y5gmLzLvOJJSoF6jkRNQqstdkAemoyiHmKyPHE1l_aoSMGzFy8vPs6ydGbtt0tNz2CQs3uJdS14dTPjfrlGcrF_y47URl1-qXBJPDU_"
                    alt="Portrait of Executive Chef Julian Mercier"
                    class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
            </div>
            <div class="w-full lg:w-1/2 space-y-6">
                <div class="border-l-4 border-primary pl-6">
                    <span class="text-primary font-bold uppercase tracking-widest text-sm">Executive Chef</span>
                    <h2 class="text-4xl md:text-5xl font-black text-[#181311] dark:text-white mt-2">Julian Mercier</h2>
                </div>
                <p class="text-[#181311]/70 dark:text-white/70 text-lg leading-relaxed">
                    With over 20 years of experience in Michelin-starred kitchens across Paris and Tokyo, Chef Julian brings
                    a worldly perspective to Feastria. His philosophy is simple: respect the ingredient.
                </p>
                <p class="text-[#181311]/70 dark:text-white/70 text-lg leading-relaxed">
                    "Cooking is an act of love. It is about memory, tradition, and the surprise of the new. I want every
                    guest to taste the story on the plate."
                </p>
                <div class="pt-4 flex gap-4">
                    <a href="#" class="text-[#181311] dark:text-white hover:text-primary transition-colors"><i
                            class="fab fa-instagram text-xl"></i></a>
                    <a href="#" class="text-[#181311] dark:text-white hover:text-primary transition-colors"><i
                            class="fab fa-twitter text-xl"></i></a>
                </div>
            </div>
        </div>

        <!-- Chef Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Chef 2 -->
            <div class="group bg-white dark:bg-white/5 rounded-xl overflow-hidden shadow-lg border border-primary/5">
                <div class="aspect-square overflow-hidden bg-gray-200">
                    <!-- Placeholder for Head Chef -->
                    <div class="w-full h-full bg-cover bg-center grayscale group-hover:grayscale-0 transition-all duration-500"
                        style='background-image: url("https://images.unsplash.com/photo-1583394838336-acd977736f90?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80");'>
                    </div>
                </div>
                <div class="p-6">
                    <span class="text-primary text-xs font-bold uppercase">Chef de Cuisine</span>
                    <h3 class="text-xl font-bold text-[#181311] dark:text-white mb-2">Elena Rodriguez</h3>
                    <p class="text-[#181311]/60 dark:text-white/60 text-sm">Reviewing the fusion of Latin American spices
                        with French technique.</p>
                </div>
            </div>

            <!-- Chef 3 -->
            <div class="group bg-white dark:bg-white/5 rounded-xl overflow-hidden shadow-lg border border-primary/5">
                <div class="aspect-square overflow-hidden bg-gray-200">
                    <!-- Placeholder for Pastry Chef -->
                    <div class="w-full h-full bg-cover bg-center grayscale group-hover:grayscale-0 transition-all duration-500"
                        style='background-image: url("https://images.unsplash.com/photo-1576237728638-7013ac352a94?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80");'>
                    </div>
                </div>
                <div class="p-6">
                    <span class="text-primary text-xs font-bold uppercase">Pastry Chef</span>
                    <h3 class="text-xl font-bold text-[#181311] dark:text-white mb-2">Kenji Tanaka</h3>
                    <p class="text-[#181311]/60 dark:text-white/60 text-sm">Master of structural desserts and delicate
                        flavor balances.</p>
                </div>
            </div>

            <!-- Chef 4 -->
            <div class="group bg-white dark:bg-white/5 rounded-xl overflow-hidden shadow-lg border border-primary/5">
                <div class="aspect-square overflow-hidden bg-gray-200">
                    <!-- Placeholder for Sommelier -->
                    <div class="w-full h-full bg-cover bg-center grayscale group-hover:grayscale-0 transition-all duration-500"
                        style='background-image: url("https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80");'>
                    </div>
                </div>
                <div class="p-6">
                    <span class="text-primary text-xs font-bold uppercase">Head Sommelier</span>
                    <h3 class="text-xl font-bold text-[#181311] dark:text-white mb-2">Sarah Jenkins</h3>
                    <p class="text-[#181311]/60 dark:text-white/60 text-sm">Curating a world-class cellar with a focus on
                        biodynamic wines.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="bg-[#181311] dark:bg-black/50 py-24 px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <span class="material-symbols-outlined text-primary text-6xl mb-6">format_quote</span>
            <h2 class="text-2xl md:text-4xl text-white font-serif italic leading-relaxed mb-8">
                "We do not just cook for you. We create moments, memories, and emotions. The plate is our canvas, and the
                flavors are our colors."
            </h2>
            <p class="text-primary font-bold uppercase tracking-widest text-sm">— The Feastria Team</p>
        </div>
    </section>
@endsection
