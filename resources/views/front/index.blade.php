@extends('front.layout')

@section('content')
    <!-- 1. Hero Section -->
    <section class="relative w-full h-[85vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="Exquisite gourmet dish plated beautifully on table"
            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD1bSW3X_iaNCPMSLZjmIyln4CJe_ruDFPThAJ_DGWCc4-z9EaxjlD8nPGmhl5kZmfOPVIfeVPuZioGUlSWGb54Z1NEPjdtD6EB5IPCaJPLEKncTFNQJ2ZImWe5pJ0sM2Me3Z1tO1LTsc1tCnYhCiWKgUirm-wHHjupeCjoORzdmCBFpEjuCkQoglhnj4Iy3b50HhORskkk6okUpBQvL1WneEjxPUOoLWPOTAtJ4ICRUMxm1PyfIcQ7xo1UaQFpCUUMq2qT_UnoxbeV");'>
        </div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-[-0.033em] mb-6">
                A Symphony of Flavors
            </h1>
            <p class="text-white/90 text-lg md:text-xl font-normal leading-relaxed mb-10 max-w-2xl mx-auto">
                Experience fine dining reimagined with locally sourced ingredients, crafted by world-class chefs to delight
                your senses.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('menu') }}"
                    class="w-full sm:w-auto min-w-[180px] cursor-pointer flex items-center justify-center rounded-lg h-14 px-8 bg-primary text-white text-lg font-bold hover:scale-105 transition-transform">
                    View Menu
                </a>
                <a href="{{ route('reservations') }}"
                    class="w-full sm:w-auto min-w-[180px] cursor-pointer flex items-center justify-center rounded-lg h-14 px-8 bg-white/10 backdrop-blur-md border border-white/30 text-white text-lg font-bold hover:bg-white/20 transition-all">
                    Reserve Now
                </a>
            </div>
        </div>
    </section>
    <!-- 2. About Section -->
    <section class="py-20 px-4 md:px-20 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <span class="text-primary font-bold tracking-widest uppercase text-sm">Our Story</span>
                <h2 class="text-4xl md:text-5xl font-bold leading-tight text-[#181311] dark:text-white">
                    Crafting Excellence on Every Plate
                </h2>
                <p class="text-lg text-[#181311]/70 dark:text-gray-400 leading-relaxed">
                    Founded on the principle of culinary integrity, FEASTRIA brings together tradition and innovation. Every
                    ingredient is hand-selected from local sustainable farms to ensure the highest quality experience for
                    our guests.
                </p>
                <p class="text-lg text-[#181311]/70 dark:text-gray-400 leading-relaxed">
                    Our journey began with a simple idea: that fine dining should be an immersive storytelling experience
                    that connects people to the land and the season.
                </p>
                <div class="pt-4">
                    <a href="{{ route('about') }}" class="text-primary font-bold flex items-center gap-2 group">
                        Learn more about our heritage
                        <span
                            class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </a>
                </div>
            </div>
            <div class="relative group">
                <div
                    class="absolute -inset-4 bg-primary/10 rounded-xl -rotate-2 group-hover:rotate-0 transition-transform duration-500">
                </div>
                <div class="relative w-full aspect-square bg-cover bg-center rounded-xl shadow-2xl"
                    data-alt="Chef preparing a gourmet meal with precision"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB85c6lyC22hLDP5xCWDbp_P6lLBmMtjWDYd_jbJM54onLETIZCx0qp6_CIDtCnQ6TFoVlyzX1vHB6x6A0Mhy7UGQm9qKmCeDormAeZaiGmB2nakf6yArLZBoluDS31khHDjMg-mGlf2uOdaXKocF5KGie92YoPTN8RJytF5y5gmLzLvOJJSoF6jkRNQqstdkAemoyiHmKyPHE1l_aoSMGzFy8vPs6ydGbtt0tNz2CQs3uJdS14dTPjfrlGcrF_y47URl1-qXBJPDU_");'>
                </div>
            </div>
        </div>
    </section>
    <!-- 3. Culinary Highlights -->
    <section class="py-20 bg-primary/5 dark:bg-primary/5">
        <div class="max-w-7xl mx-auto px-4 md:px-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Culinary Highlights</h2>
                <p class="text-[#181311]/60 dark:text-gray-400 max-w-xl mx-auto">Explore our signature dishes, each a unique
                    blend of texture, color, and unparalleled taste.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Dish 1 -->
                <div
                    class="bg-white dark:bg-background-dark/50 rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow group">
                    <div class="w-full aspect-[4/3] bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                        data-alt="Juicy wagyu ribeye steak with truffle butter"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCVxkDfVb07CAyGtjna-Omjpex9sonOzDSDvOjyd1Ik7zTX8nt0oUEx6-D618FbcuprWbHdrKPxs_OFHeAF5KPIUo0qVXH8PJHxvYyh2EMm7Rr619v5OnAAvd8ND4ui40YjzaTqpka6beX_1dqTcrqJ8s0GafiM8agBQ-HIVesPyjtQ6-CpiJ_4Cz8txNlKm3EgKyJvOdU3WdTHIkPo0KjdFXlh7qmt-7SiSkHvCvy73-0RRI8K-hNNavWdBLc7rlrSSYvvZMdRX9vw");'>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Wagyu Ribeye</h3>
                        <p class="text-[#181311]/70 dark:text-gray-400 mb-4">Premium cut served with artisanal truffle
                            butter and charred asparagus.</p>
                        <span class="text-primary font-bold">$68</span>
                    </div>
                </div>
                <!-- Dish 2 -->
                <div
                    class="bg-white dark:bg-background-dark/50 rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow group">
                    <div class="w-full aspect-[4/3] bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                        data-alt="Creamy risotto with wild forest mushrooms"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAvQKCT_qeucuJRqXAV6weMJuk1hww9arkn9NhHtbPWRcSYQqTiB24nCA9ot6BhbAoRyqUDHnFT8sdjE38-MXIu1kGQz3boLfN5_RO_QMQp1_QkKb2Tx7HtTQMIHZD8QFtW5qnVGFb25nvNp8engi-psXeULirmzgzdLj5qapfLmkjxQQYjwS7ynwkEUvNmVjdn3xgVln6T8X3Qq5PFAcoxzxQRm4rrJfTSnS8dqUH7TnCcDRUT10_2GQBedKjvI2Qtx-wPO2ZwK49G");'>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Wild Mushroom Risotto</h3>
                        <p class="text-[#181311]/70 dark:text-gray-400 mb-4">Creamy arborio rice with foraged forest
                            mushrooms and aged parmesan.</p>
                        <span class="text-primary font-bold">$34</span>
                    </div>
                </div>
                <!-- Dish 3 -->
                <div
                    class="bg-white dark:bg-background-dark/50 rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-shadow group">
                    <div class="w-full aspect-[4/3] bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                        data-alt="Seared scallops with citrus herb oil"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD757u1deSViP-5rm9ErYUdQOQZiiLlDwA3SDHa4ZRh8XcX6zVscNXGxrYfARwKUp52s2sCw8tfdz6TG08ZUnegItCFDYrlCuLsY_lrwZ23m1kWS8Fb93vXDSmmyevVYkz3w1krdrbWlHXP19y0hdI4nJkTrrIuNy1PNa7OtjuUkrODGHkyaxjXzD321nrAJBojejbuF60uWZDW2wwd09wkCzCBrLp6awkdNV-X4TgAsDQGTpE9utkp5qxgxcH8UFxWy9BauPy2qDHa");'>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Citrus Scallops</h3>
                        <p class="text-[#181311]/70 dark:text-gray-400 mb-4">Pan-seared sea scallops with zesty herb oil and
                            cauliflower silk.</p>
                        <span class="text-primary font-bold">$42</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 4. Experiences -->
    <section class="py-20 px-4 md:px-10 max-w-7xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center lg:text-left">Unforgettable Experiences</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="relative h-[400px] rounded-xl overflow-hidden group">
                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-700"
                    data-alt="Elegant private dining room setup"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAsUQp8If4OMOCXK0P_BshTRze6EUc85dBsvLfxRIgdmFnvdRQhs1PsOI52vREF61OiYa9GYdjWeT0TIdL5lvFQdBTILYrgb-YIV6MtTbXXNXrRrRckDB1dtyWSWvdPqvoGCgwXybgaEfp_QlyisNG6vUG0z-FoKJVkWoaIrBaCmdxNmxdQC9EcZeotTKmZWYsqNyeadD4WpyWuVnH3yX_M-4hwbgkjnPTINL3ht5KvYAA_oRVyHzxkKDU_saBIhtSbXk47A-p05TNz");'>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 p-8">
                    <h3 class="text-white text-2xl font-bold mb-2">Private Dining</h3>
                    <p class="text-white/80 text-sm mb-4">Bespoke celebrations in our exclusive heritage room.</p>
                    <a href="{{ route('private-events') }}"
                        class="bg-white text-[#181311] px-4 py-2 rounded font-bold text-sm hover:bg-primary hover:text-white transition-colors">Book
                        Space</a>
                </div>
            </div>
            <div class="relative h-[400px] rounded-xl overflow-hidden group">
                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-700"
                    data-alt="Wine tasting event with various glasses"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC-n7zMM1KuDWmsthrNTVP5Akfii24H1rQuhOICF3t3ECTBUhNSzd1rBi7GkFVZ7W9QmeiTXe8SkMRtVfm_Bi-R-4Qq-NcnfvNZ8qKfrsLeLfUMiWD505ddTIvZ1Nm3MBSRgtsJMrKWGS0k5imi2IVslFGJy8-RjYuwe-IAM_jEEkoHuaSGy8qeQqnDlGepo00Fbx4u0xg6i18ZV9iJVbeLvxIeLzDXA0GaS_L_l0vikjb2l4CaYbSAkg6Ggh_l4xmr0w9sCVooDzdC");'>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 p-8">
                    <h3 class="text-white text-2xl font-bold mb-2">Wine Tasting</h3>
                    <p class="text-white/80 text-sm mb-4">Curated selection from our sommelier's private cellar.</p>
                    <a href="{{ route('reservations') }}"
                        class="bg-white text-[#181311] px-4 py-2 rounded font-bold text-sm hover:bg-primary hover:text-white transition-colors">View
                        Dates</a>
                </div>
            </div>
            <div class="relative h-[400px] rounded-xl overflow-hidden group">
                <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-700"
                    data-alt="Chef presenting a special dish to guests"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD9viRXWmfcTl6R9P8zrZ5ylUsf5OM28BzRwE4JQz0hjbQThqjmEMUh8SBPARZAYVmvFy4kuY2QPnB7BhF-eNubLdTEc2MUxMT0FTwQyW9YogG8YJHOS24kmf2K7Qdzge8nCzIgl3NvO2P4SidzRh1ofxWSWc_ycP9r0IhFUdCRuz1zYRzE6txEZEBtkOzDFMSPbiGIaAy0Y_r8VGg-OPUymTkQ0vXi3HNlJmNJHAN9mLhKCUrKzWN0l-ugYy3uMymh6L8W4Ng6QNKI");'>
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                <div class="absolute bottom-0 p-8">
                    <h3 class="text-white text-2xl font-bold mb-2">Chef's Table</h3>
                    <p class="text-white/80 text-sm mb-4">Go behind the scenes for an 8-course culinary odyssey.</p>
                    <a href="{{ route('experiences') }}"
                        class="bg-white text-[#181311] px-4 py-2 rounded font-bold text-sm hover:bg-primary hover:text-white transition-colors">Inquire
                        Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- 5. Testimonials (Slider Mockup) -->
    <section class="py-20 bg-background-light dark:bg-background-dark">
        <div class="max-w-4xl mx-auto px-4 text-center">
            <span class="material-symbols-outlined text-primary text-6xl mb-6">format_quote</span>
            <div class="overflow-hidden">
                <div class="transition-all duration-500">
                    <p class="text-2xl md:text-3xl font-medium italic leading-relaxed text-[#181311] dark:text-white mb-8">
                        "The attention to detail at FEASTRIA is simply unmatched. Every dish tells a story, and the
                        atmosphere is the perfect backdrop for a memorable evening. A true culinary gem."
                    </p>
                    <div class="flex items-center justify-center gap-4">
                        <div class="size-12 rounded-full bg-cover bg-center" data-alt="Portrait of a satisfied customer"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB0eHOe3DRD2A2DmLgLVMI-K3UnvH59Dduobo23eqrbFsuEhzitlNuTqYrvd2y_mEy0G5pPBMe9GCs85pNcxgilulDAGlD-l3W3eyk-e7btmZ0er3wIo20yKXvEC1hezAO1FduAWpp4cMSg6Kr67pP3pH44ukTRFDpCf7tl9YBgItB3mwrb_2_YeO_CWEBj9sM8VVqDR4KTbefeQ1oRRcM_ynWeQitunM8y19GGkEWVtBp6ggslfkIn9YLknPMQUyKl0Wbt5cArrxxF");'>
                        </div>
                        <div class="text-left">
                            <h4 class="font-bold">Sarah Jenkins</h4>
                            <p class="text-sm text-[#181311]/60 dark:text-gray-400">Food Critic, The Daily Palate</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center gap-2 mt-10">
                <div class="size-2 rounded-full bg-primary"></div>
                <div class="size-2 rounded-full bg-primary/20"></div>
                <div class="size-2 rounded-full bg-primary/20"></div>
            </div>
        </div>
    </section>
    <!-- 6. Newsletter -->
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
