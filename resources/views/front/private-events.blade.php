@extends('front.layout')

@section('title', 'Private Events | FEASTRIA')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="Luxurious private dining room with chandelier"
            style='background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAsUQp8If4OMOCXK0P_BshTRze6EUc85dBsvLfxRIgdmFnvdRQhs1PsOI52vREF61OiYa9GYdjWeT0TIdL5lvFQdBTILYrgb-YIV6MtTbXXNXrRrRckDB1dtyWSWvdPqvoGCgwXybgaEfp_QlyisNG6vUG0z-FoKJVkWoaIrBaCmdxNmxdQC9EcZeotTKmZWYsqNyeadD4WpyWuVnH3yX_M-4hwbgkjnPTINL3ht5KvYAA_oRVyHzxkKDU_saBIhtSbXk47A-p05TNz");'>
        </div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <span class="text-primary font-bold uppercase tracking-[0.3em] text-sm mb-4 block">Celebrations &
                Gatherings</span>
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-tight mb-6">
                Private Events
            </h1>
            <p class="text-white/90 text-lg md:text-xl font-normal max-w-2xl mx-auto mb-8 leading-relaxed">
                From intimate anniversary dinners to grand corporate galas, create unforgettable memories in our exclusive
                spaces.
            </p>
            <button
                class="mx-auto min-w-[200px] cursor-pointer items-center justify-center rounded-lg h-14 px-8 bg-primary text-white text-sm font-black uppercase tracking-widest hover:bg-primary/90 hover:scale-105 transition-all">
                Inquire Now
            </button>
        </div>
    </section>

    <!-- Event Spaces Section -->
    <section class="py-20 px-4 md:px-10 max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-black text-[#181311] dark:text-white mb-4">Our Venues</h2>
            <p class="text-[#181311]/60 dark:text-white/60 text-lg max-w-2xl mx-auto">Choose the perfect setting for your
                occasion. Each space offers a unique ambiance and dedicated service.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
            <div class="order-2 lg:order-1 space-y-6">
                <h3 class="text-3xl font-bold text-[#181311] dark:text-white">The Heritage Room</h3>
                <p class="text-[#181311]/70 dark:text-white/70 text-lg leading-relaxed">
                    Our signature private dining room features reclaimed wood accents, a dedicated wine wall, and soundproof
                    privacy. Perfect for board meetings and family reunions.
                </p>
                <ul class="space-y-3 text-[#181311]/80 dark:text-white/80">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">group</span>
                        <span>Capacity: 24 Seated / 40 Standing</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">restaurant</span>
                        <span>Plated Dinner or Family Style</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">settings_input_hdmi</span>
                        <span>Full AV Capabilities</span>
                    </li>
                </ul>
            </div>
            <div class="order-1 lg:order-2 h-[400px] rounded-2xl overflow-hidden shadow-2xl">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9vjClDNa6Vx8vqb2KEiCjVZUOrcWZdcB49uLwKmlTmots0qT3kdJBlaAZceAJJ9UUsVF9SpKS0ELJWl9_AO6bYAutAtJ49yDf1XoAIxI3FANQo4H8fG2VktipEvHK9GiqIJEbfuZ1KoHqelQrNJFEXeAe3gchymu-IgHNM4ay0DrmatWv0m0Q3pZPQXfdMmj39cGCa0GhehB8N6gv_81RNu4NY422lDiFsryhlalq0pdqpfIY2mgXj2zt59rQiGlSKFI45AeiEa-H"
                    alt="Heritage Room Interior"
                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="h-[400px] rounded-2xl overflow-hidden shadow-2xl">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6rC78nSk02gI2aKs8V32awxr-Zr6v1rFoIkeI2-AP6P676FaPNaIoeHV8WfSZ00UqmOAA79fiBVKfUSehjdmIyNeHU4QLKneeY6GZDcRxZw9QgmA42QKvY0dpdtE6lghY4ELpCxd5L7YG02rzgFHgVIBq5qup8ptbtB-I1iTdgleeedywMyfHYOFnk83lravr5-8Moo7Ln9aRB9CCq5UMffZt-TmOdBA6a0WmpzaNtWVzkxAqj67cESjygcyoudjziQfaRCYtVY_5"
                    alt="Garden Terrace"
                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
            </div>
            <div class="space-y-6">
                <h3 class="text-3xl font-bold text-[#181311] dark:text-white">The Garden Terrace</h3>
                <p class="text-[#181311]/70 dark:text-white/70 text-lg leading-relaxed">
                    An open-air sanctuary surrounded by lush greenery and ambient lighting. Ideal for cocktail receptions,
                    bridal showers, and summer soirées.
                </p>
                <ul class="space-y-3 text-[#181311]/80 dark:text-white/80">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">group</span>
                        <span>Capacity: 60 Seated / 100 Standing</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">local_bar</span>
                        <span>Dedicated Outdoor Bar</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">wb_sunny</span>
                        <span>Retractable Roof System</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Inquiry Form -->
    <section class="bg-[#181311] dark:bg-black/40 py-20 px-4 text-white">
        <div class="max-w-3xl mx-auto text-center mb-12">
            <span class="text-primary font-bold uppercase tracking-widest text-sm mb-2 block">Start Planning</span>
            <h2 class="text-4xl font-black mb-4">Event Inquiry</h2>
            <p class="text-white/70">Tell us about your event, and our dedicated events manager will contact you within 24
                hours.</p>
        </div>

        <form class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
            <input type="text" placeholder="Your Name"
                class="w-full bg-white/5 border border-white/20 rounded-lg h-14 px-6 text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all">
            <input type="email" placeholder="Email Address"
                class="w-full bg-white/5 border border-white/20 rounded-lg h-14 px-6 text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all">
            <input type="tel" placeholder="Phone Number"
                class="w-full bg-white/5 border border-white/20 rounded-lg h-14 px-6 text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all">
            <select
                class="w-full bg-white/5 border border-white/20 rounded-lg h-14 px-6 text-white/70 focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all appearance-none cursor-pointer">
                <option>Select Event Type</option>
                <option>Birthday / Anniversary</option>
                <option>Corporate Event</option>
                <option>Wedding / Reception</option>
                <option>Other</option>
            </select>
            <div class="md:col-span-2">
                <textarea placeholder="Tell us more about your event (Date, Guest Count, Special Requests)"
                    class="w-full bg-white/5 border border-white/20 rounded-lg h-32 p-6 text-white focus:border-primary focus:ring-1 focus:ring-primary outline-none transition-all resize-none"></textarea>
            </div>
            <div class="md:col-span-2 text-center mt-4">
                <button type="button"
                    class="bg-primary text-white font-black uppercase tracking-widest px-10 py-4 rounded-lg hover:bg-white hover:text-primary transition-colors">
                    Submit Inquiry
                </button>
            </div>
        </form>
    </section>
@endsection
