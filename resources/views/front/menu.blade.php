@extends('front.layout')

@section('title', 'Menu | FEASTRIA')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 hover:scale-105"
            data-alt="Gourmet food spread on a dark rustic table"
            style='background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAXX9Ezo6O1HHIkOHAsBMRAdQL5GXxoq_z7t96A5jOMa2w7kZWdQaexjjgxbPEHyuXL8bwkSboEWxfwM7JcCBka56h1mRTn-CJla3x3ysqbS6BM0juFBqCiG9HY37hS_6kCk4f7NVGqcMBCsa5llbauOvR53RvIg7NR2-yvJbn2tsrYjYHNtscY-tXxsxUP0fGDiGQf7_-erwd5wVIVmJ4yYPJnLzfNZkhDiWPOvtain3LXPRyAl1Y_yAKrx950FeGBt_wPq7gK66yd");'>
        </div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-[-0.033em] mb-6">
                Our Menu
            </h1>
            <p class="text-white/90 text-lg md:text-xl font-normal leading-relaxed mb-8 max-w-2xl mx-auto">
                A symphony of seasonal flavors curated by our master chefs.
            </p>
        </div>
    </section>

    <!-- Category Tabs -->
    <div
        class="sticky top-[73px] z-40 bg-white/95 dark:bg-background-dark/95 backdrop-blur-sm border-b border-primary/10 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 md:px-10 overflow-x-auto">
            <div class="flex items-center justify-center gap-8 md:gap-12 whitespace-nowrap">
                <a class="flex items-center gap-2 py-5 text-sm font-bold border-b-2 border-primary text-[#181311] dark:text-white transition-all"
                    href="#starters">
                    <span class="material-symbols-outlined text-xl">tapas</span> Starters
                </a>
                <a class="flex items-center gap-2 py-5 text-sm font-bold text-gray-500 hover:text-primary transition-all"
                    href="#mains">
                    <span class="material-symbols-outlined text-xl">dinner_dining</span> Mains
                </a>
                <a class="flex items-center gap-2 py-5 text-sm font-bold text-gray-500 hover:text-primary transition-all"
                    href="#desserts">
                    <span class="material-symbols-outlined text-xl">icecream</span> Desserts
                </a>
                <a class="flex items-center gap-2 py-5 text-sm font-bold text-gray-500 hover:text-primary transition-all"
                    href="#drinks">
                    <span class="material-symbols-outlined text-xl">local_bar</span> Drinks
                </a>
            </div>
        </div>
    </div>

    <!-- Menu Grid -->
    <section class="max-w-7xl mx-auto px-4 md:px-10 py-12">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Menu Item 1 -->
            <div
                class="group flex flex-col bg-white dark:bg-white/5 rounded-xl shadow-sm border border-primary/5 overflow-hidden hover:shadow-xl hover:shadow-primary/5 transition-all duration-300">
                <div class="relative aspect-[4/3] overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                        data-alt="Fresh vibrant Mediterranean salad with feta"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDMYT-LrokRvnnUlCMp8hgQKbYEiBuELYOgCEgGF6AE_GGKI_ChnCYT5neo2xFT_YOoNPD_Aru_e1uHsqSrz-R2xTWBGZ_ImbIiXSADZCVgV84yVAifedA11AjP19745FCRN_iOrnSUXwu1-E-8WrV0E5b3ZOnxBjeQ-pNQwU-pF460vSUNYlVdCt0tw4TBN_55w2e9kZULE1alLzds6KnzylROkF2bDB3cbymGjMNh5Qy_V9arHdFE4b7bgwYhGPqDyP6m_pKOTeaR");'>
                    </div>
                    <div class="absolute top-3 right-3">
                        <button
                            class="size-9 flex items-center justify-center rounded-full bg-white/90 text-gray-400 hover:text-primary shadow-md transition-colors">
                            <span class="material-symbols-outlined text-xl">favorite</span>
                        </button>
                    </div>
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-2">
                        <h3
                            class="text-lg font-bold text-[#181311] dark:text-white group-hover:text-primary transition-colors leading-tight">
                            Garden Burrata</h3>
                        <span class="text-primary font-bold text-lg">$18</span>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 flex-grow">Creamy burrata with heirloom
                        tomatoes, balsamic glaze, and fresh basil pesto.</p>
                    <button
                        class="w-full py-2.5 bg-primary/10 text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-all duration-200">
                        Add to Order
                    </button>
                </div>
            </div>
            <!-- Menu Item 2 -->
            <div
                class="group flex flex-col bg-white dark:bg-white/5 rounded-xl shadow-sm border border-primary/5 overflow-hidden hover:shadow-xl hover:shadow-primary/5 transition-all duration-300">
                <div class="relative aspect-[4/3] overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                        data-alt="Creamy truffle tagliatelle with parmesan"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBnxBytezpOXn9Ccz2jT6FojhcHeUJrXOLPC-4LtvhCenl7nZUYgjG7Dh3e8v0qE0dLjuolqDcWOsaqTXgxZWUTtUIBOJKt6vYM0xVJiGCYH6DrPcfDOtlE4tqkpRW_XjBkvuyp-S10jdLNFmtniVXmwFxyoMhpg4BSZOOcD2ucZejqQHpmRzNBoXEbm8D15Ks_7hCkEnriAyzpxqlslL61_Lqr8nlNIwUXh8_t2xCrplGzJr2N23p5aU12oBaLtWF8qjT2VqbMiuLT");'>
                    </div>
                    <div class="absolute top-3 right-3">
                        <button
                            class="size-9 flex items-center justify-center rounded-full bg-white/90 text-gray-400 hover:text-primary shadow-md transition-colors">
                            <span class="material-symbols-outlined text-xl">favorite</span>
                        </button>
                    </div>
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-2">
                        <h3
                            class="text-lg font-bold text-[#181311] dark:text-white group-hover:text-primary transition-colors leading-tight">
                            Truffle Tagliatelle</h3>
                        <span class="text-primary font-bold text-lg">$24</span>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 flex-grow">Handmade ribbon pasta tossed in a
                        luxurious black truffle cream sauce.</p>
                    <button
                        class="w-full py-2.5 bg-primary/10 text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-all duration-200">
                        Add to Order
                    </button>
                </div>
            </div>
            <!-- Menu Item 3 -->
            <div
                class="group flex flex-col bg-white dark:bg-white/5 rounded-xl shadow-sm border border-primary/5 overflow-hidden hover:shadow-xl hover:shadow-primary/5 transition-all duration-300">
                <div class="relative aspect-[4/3] overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                        data-alt="Sizzling wagyu ribeye steak with herbs"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB8LGbOrpfrDelgI51AYtQTA2pz0Lvi-RSvJb7Fuod8kUjiF1wg9wObeC3q59b2LeaBWzIfbp9rwrpP6PcVQOHX6cOcOMjXj6bIENlEj2fLOfafs5zPG9X7-QvLXIicQiJFChGvmgzxDI_Q9dy66T30o8-5iesq95rCWA6EoQg0KJyPfupPKpbxnZl7926QEVIKXMb7FvQlDpNcp72X1KI7lAnOACcUo1ONMpY4oyoMUVdFibzr5mSv_wggC6hW5jEEs4k0jUUuBzFz");'>
                    </div>
                    <div class="absolute top-3 right-3">
                        <button
                            class="size-9 flex items-center justify-center rounded-full bg-white/90 text-gray-400 hover:text-primary shadow-md transition-colors">
                            <span class="material-symbols-outlined text-xl">favorite</span>
                        </button>
                    </div>
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-2">
                        <h3
                            class="text-lg font-bold text-[#181311] dark:text-white group-hover:text-primary transition-colors leading-tight">
                            Wagyu Ribeye</h3>
                        <span class="text-primary font-bold text-lg">$55</span>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 flex-grow">Premium A5 Wagyu cut served with
                        roasted garlic butter and marrow.</p>
                    <button
                        class="w-full py-2.5 bg-primary/10 text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-all duration-200">
                        Add to Order
                    </button>
                </div>
            </div>
            <!-- Menu Item 4 -->
            <div
                class="group flex flex-col bg-white dark:bg-white/5 rounded-xl shadow-sm border border-primary/5 overflow-hidden hover:shadow-xl hover:shadow-primary/5 transition-all duration-300">
                <div class="relative aspect-[4/3] overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center group-hover:scale-110 transition-transform duration-500"
                        data-alt="Herb crusted salmon with greens"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDPBcChS86DQMjW560QeSFncMzSkjX2uJTa2qi9jpTc0ZqvsRajXYabZGrHz1B2HREDL8R6uJvnnfg3f9DJZnQgHgo-DYAJRdov3gZyYdG0abgbWLANrC6gy01FU-JbnR2quMCvLjjOaVQFRWL0J1CCGyJyQ2Dt60LL7aVaLylKlox5iErdqCrhou_CKlCcYi69Ak4_w5QSQIFkZHmz7mKBMZxRipZU-7a_YZgTbhsa_pVLjTaOUzxIRploBwVGzmUMxwS_llDec2yf");'>
                    </div>
                    <div class="absolute top-3 right-3">
                        <button
                            class="size-9 flex items-center justify-center rounded-full bg-white/90 text-gray-400 hover:text-primary shadow-md transition-colors">
                            <span class="material-symbols-outlined text-xl">favorite</span>
                        </button>
                    </div>
                </div>
                <div class="p-5 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-2">
                        <h3
                            class="text-lg font-bold text-[#181311] dark:text-white group-hover:text-primary transition-colors leading-tight">
                            Herb Crusted Salmon</h3>
                        <span class="text-primary font-bold text-lg">$32</span>
                    </div>
                    <p class="text-sm text-gray-600 dark:text-gray-400 mb-6 flex-grow">Fresh Atlantic salmon with a
                        citrus herb crust and seasonal greens.</p>
                    <button
                        class="w-full py-2.5 bg-primary/10 text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-all duration-200">
                        Add to Order
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Special of the Day Section -->
    <section class="bg-primary/5 dark:bg-white/5 py-16 px-4 md:px-10">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row gap-12 items-center">
                <div class="w-full lg:w-1/2 relative">
                    <div
                        class="absolute -top-6 -left-6 bg-primary text-white px-6 py-3 rounded-lg font-bold shadow-lg z-10 rotate-[-5deg]">
                        Chef's Selection
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-2xl border-4 border-white dark:border-white/10">
                        <img alt="Signature Roasted Sea Bass" class="w-full h-full object-cover"
                            data-alt="Roasted whole sea bass with lemon and herbs"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0ivB7X3hA5sQyu5_v5FBXg7MMnfPCxLw5LEFap7rhQnf9H2ppA0S4hRj7RHQEEihUzN5r4UWYiW-WoUGg-RWInqga40KBHjZAw0mLuN5L1u_idi9cBoxguVg6fWEmdxkPQRNifnr_tbjyaAyfAd0gLNGOsySea4nMiSWinCXvCHEWn4AB_19hzH4DwGGObfYIKVcSndxToUU3svWG1G4tRbYX--NgGDc1QqYDS-57HJYZ42GrGBPawuf0Z9jf2bschl3Jz--vWuvG" />
                    </div>
                </div>
                <div class="w-full lg:w-1/2 space-y-6">
                    <span class="text-primary font-black uppercase tracking-widest text-sm">Today's Special</span>
                    <h2 class="text-4xl md:text-5xl font-black text-[#181311] dark:text-white leading-tight">Mediterranean
                        Sea Bass with Charred Lemon</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                        Sourced daily from sustainable waters, our wild sea bass is pan-seared to perfection with a crisp
                        skin, served over a bed of saffron-infused risotto and finished with a citrus reduction.
                    </p>
                    <div class="flex items-center gap-6 pt-4">
                        <span class="text-3xl font-black text-primary">$42</span>
                        <button
                            class="px-8 py-4 bg-primary text-white font-bold rounded-xl shadow-lg shadow-primary/30 hover:shadow-xl hover:-translate-y-1 transition-all">
                            Order Special
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
