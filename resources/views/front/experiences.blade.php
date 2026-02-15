@extends('front.layout')

@section('title', 'Experiences | FEASTRIA')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[60vh] min-h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="High-end restaurant interior with warm lighting"
            style='background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuCndxXESdYtfzuSLjp1QuzdsDr4bNQhG9QwtSstb2KL0tdpozvBqttS28uw49dwUVOZ3ETIszeittqQxkwxjxxOtU90I0UMVUJUmmqOwIhAQhBjl1_UyZ8Vf8Eo0yVRCyhfIppC0EWv_AQGYg4zKQ7hwvc6eMOsLur5ulDS0jcuryzc5RDQZ0fxcBT3AquQ7XyjxzXlZJA70rIY9nbEiiO3oEeT2ViLTeqV6Gjd-FBbZ2CuTkHW6c2aEf99_Gj_mjCe4WuubG-BHMYR");'>
        </div>
        <div class="relative z-10 text-center px-4 max-w-4xl">
            <span class="text-primary font-bold uppercase tracking-[0.3em] text-sm mb-4 block">Unforgettable Moments</span>
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-tight mb-6">
                Experiences
            </h1>
            <p class="text-white/80 text-lg md:text-xl font-normal max-w-2xl mx-auto mb-8 leading-relaxed">
                Bespoke culinary moments curated for the refined palate. From the comfort of your home to the heat of the
                kitchen.
            </p>
            <button
                class="flex mx-auto min-w-[180px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-14 px-8 bg-primary text-white text-sm font-black uppercase tracking-widest hover:bg-primary/90 hover:scale-105 transition-all">
                Explore All
            </button>
        </div>
    </section>

    <!-- Experiences Grid Section -->
    <section class="max-w-[1200px] mx-auto px-6 py-20">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-4">
            <div class="max-w-xl">
                <h2 class="text-3xl md:text-4xl font-black text-[#181311] dark:text-white leading-tight">Our Curated
                    Offerings</h2>
                <p class="text-[#181311]/60 dark:text-white/60 mt-4 text-lg">We believe every meal should be a story.
                    Discover the chapter that speaks to you.</p>
            </div>
            <div
                class="flex items-center gap-2 text-primary font-bold uppercase tracking-widest text-xs cursor-pointer hover:gap-4 transition-all">
                Scroll to discover <span class="material-symbols-outlined text-lg">arrow_downward</span>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">
            <!-- Card 1: Private Dining -->
            <div class="experience-card flex flex-col group">
                <div class="relative w-full aspect-[4/5] rounded-xl overflow-hidden mb-6 shadow-2xl shadow-primary/5">
                    <img alt="Elegant private dining table setting" class="card-image w-full h-full object-cover"
                        data-alt="Elegant private dining table with candlelight"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAG88KbsCyqv61prE8XuKtZsgiPZBlglGt0sEixkFk76vGn-WaVWu2wSdwS3cnUDzq806iGGrAUClkG7q-b3mtbPFFHLJk0Re-2hjygE_MCwnzvuwe6q5pKk6vNUC4gaL4GyU2Uqn9pW-40WvYEl2VvgUtonvF-OmK3P7SEC7MUeWFB3n1hUfD1MmIyRKIFNUijFLmMCsyM9BHcNvFIhJWNiYdCUPqSrCz45dmRx4dBOGYGQXUAU2iQS41ECesNbXhwugr9IpaRY6rC" />
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded text-[10px] font-black uppercase tracking-widest text-primary">
                        Exclusive</div>
                </div>
                <h3 class="text-2xl font-bold text-[#181311] dark:text-white mb-3">Private Dining</h3>
                <p class="text-[#181311]/70 dark:text-white/70 text-base leading-relaxed mb-6">
                    Intimate gatherings with personalized menus crafted by our master chefs. Perfect for anniversaries and
                    corporate milestones.
                </p>
                <a class="mt-auto flex items-center gap-2 text-primary font-black uppercase tracking-widest text-sm hover:underline underline-offset-8"
                    href="#">
                    Learn More <span class="material-symbols-outlined text-lg">chevron_right</span>
                </a>
            </div>
            <!-- Card 2: Chef’s Table -->
            <div class="experience-card flex flex-col group">
                <div class="relative w-full aspect-[4/5] rounded-xl overflow-hidden mb-6 shadow-2xl shadow-primary/5">
                    <img alt="Chef plating a gourmet dish" class="card-image w-full h-full object-cover"
                        data-alt="Professional chef preparing a gourmet meal"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAw5EbojkyQ6FVVNA9csDbY3N1_xvAqV8Vrd0dQWBGE0a1w-qqx0SWVRU72ZQ4kdpH6qqlyi2NI7lMdpgFSRfQ0T5Phu8MBPdJihuDQGmOSem93UkofL_KXCenAZGYmMhcUlkDByKEb5-EIFCnLUjyIUCFuPfJSVplp-qeBkAFURmyobip8F9mhguh-dmaDQFJ2o6pnJ94Ig5sf97v6zNUd-h1jQl-yfneHLfGapq9unGcz7mVshozjd3IZ-QaGcrvMWmZ6k1rA2xmU" />
                    <div
                        class="absolute top-4 left-4 bg-primary px-3 py-1 rounded text-[10px] font-black uppercase tracking-widest text-white">
                        Popular</div>
                </div>
                <h3 class="text-2xl font-bold text-[#181311] dark:text-white mb-3">Chef’s Table</h3>
                <p class="text-[#181311]/70 dark:text-white/70 text-base leading-relaxed mb-6">
                    Behind-the-scenes access to the culinary team. Watch as art is made right before your eyes in a
                    high-octane environment.
                </p>
                <a class="mt-auto flex items-center gap-2 text-primary font-black uppercase tracking-widest text-sm hover:underline underline-offset-8"
                    href="#">
                    Learn More <span class="material-symbols-outlined text-lg">chevron_right</span>
                </a>
            </div>
            <!-- Card 3: Seasonal Events -->
            <div class="experience-card flex flex-col group">
                <div class="relative w-full aspect-[4/5] rounded-xl overflow-hidden mb-6 shadow-2xl shadow-primary/5">
                    <img alt="Festive holiday table setting" class="card-image w-full h-full object-cover"
                        data-alt="Seasonal outdoor garden party dinner"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB1rC5823RgVCjpIye75trVx4ifG_0pRotKfdRJcQrd3lYaVVU8DbeFbErucUWiuyEnZiRf-e3IaLwDJwaVXRoEHDDrdtmrMh2dWPt-f97j9fY3VeY-yQ17Eo-I-8bVCkVr6s5EZh03OwgH1EnK-bPeLnGZS7xe2hBh8vsNFoAmHia6yQg9cdX3U40XgZbLhM82WW30Tzxf5zIlnN88F6dShes52jCsucigR-OexEacfWDPklVJpwLCZQSqkD4m2UsMdWvvLJX0OgAo" />
                    <div
                        class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded text-[10px] font-black uppercase tracking-widest text-primary">
                        Limited Time</div>
                </div>
                <h3 class="text-2xl font-bold text-[#181311] dark:text-white mb-3">Seasonal Events</h3>
                <p class="text-[#181311]/70 dark:text-white/70 text-base leading-relaxed mb-6">
                    Limited-time pop-ups and holiday-themed feasts that celebrate the best ingredients nature provides at
                    this very moment.
                </p>
                <a class="mt-auto flex items-center gap-2 text-primary font-black uppercase tracking-widest text-sm hover:underline underline-offset-8"
                    href="#">
                    Learn More <span class="material-symbols-outlined text-lg">chevron_right</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter / CTA Section -->
    <section class="bg-[#181311] dark:bg-black/40 py-20 px-6 overflow-hidden relative">
        <div class="absolute top-0 right-0 w-64 h-64 bg-primary/20 rounded-full blur-3xl -mr-32 -mt-32"></div>
        <div class="max-w-[800px] mx-auto text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-black text-white leading-tight mb-6">Ready for an unforgettable evening?
            </h2>
            <p class="text-white/60 text-lg mb-10 max-w-xl mx-auto">Join our inner circle to get first access to upcoming
                seasonal events and exclusive bookings.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <input
                    class="min-w-[300px] h-14 bg-white/5 border border-white/20 rounded-lg px-6 text-white placeholder:text-white/40 focus:ring-primary focus:border-primary"
                    placeholder="Email address" type="email" />
                <button
                    class="h-14 px-8 bg-primary text-white font-black uppercase tracking-widest rounded-lg hover:bg-primary/90 transition-all">Join
                    Club</button>
            </div>
        </div>
    </section>
@endsection
