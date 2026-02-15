@extends('front.layout')

@section('title', 'Blog & Stories | FEASTRIA')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="Gourmet dinner spread with atmospheric lighting"
            style='background-image: linear-gradient(rgba(0, 0, 0, 0.4) 0%, rgba(0, 0, 0, 0.7) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBgdfrlUFHYZolRjWZkDMq-SbWpaEsNQT-KXlu5IET4C7V1h8RN0Gfx1dzsRkEfvLujYCW2wPdfRANCuxX0Q0sSV5lpdeKW4jEOoMGwf0YNDUM-X5OzLhNN8F16qdyhtoHhjUzMpD8jl9teLsjVqIC3PJNoMWi5tdHYX-98MdiEQYMK3XDHbp9FaSPzhyYSKUNPIdqozQq12cW8CaFYyX7nnVeswef2HQDlvRZaxp05bCYzcTuzVwZ-50td-dsPhDenpvFXMOQqCZ5Z");'>
        </div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-[-0.033em] mb-6">
                Blog & Stories
            </h1>
            <p class="text-white/90 text-lg md:text-xl font-normal leading-relaxed mb-8 max-w-2xl mx-auto">
                Discover the latest culinary trends, artisanal recipes, and rich food culture stories from passionate chefs
                around the globe.
            </p>
            <div class="flex items-center justify-center gap-4">
                <button
                    class="min-w-[120px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-primary text-white text-base font-bold transition-transform hover:scale-105">
                    Latest Posts
                </button>
                <button
                    class="min-w-[120px] cursor-pointer items-center justify-center rounded-lg h-12 px-6 bg-white/20 backdrop-blur-md text-white border border-white/30 text-base font-bold transition-transform hover:scale-105">
                    Newsletters
                </button>
            </div>
        </div>
    </section>

    <!-- Category Filter -->
    <div class="px-4 md:px-10 max-w-7xl mx-auto mb-8 mt-12">
        <div class="flex items-center justify-between border-b border-primary/10 pb-4">
            <div class="flex gap-3 overflow-x-auto no-scrollbar pb-2 md:pb-0">
                <button
                    class="flex h-10 shrink-0 items-center justify-center rounded-full bg-primary px-6 text-white text-sm font-bold">All</button>
                <button
                    class="flex h-10 shrink-0 items-center justify-center rounded-full bg-primary/10 hover:bg-primary/20 text-primary px-6 text-sm font-medium transition-colors">Recipes</button>
                <button
                    class="flex h-10 shrink-0 items-center justify-center rounded-full bg-primary/10 hover:bg-primary/20 text-primary px-6 text-sm font-medium transition-colors">Food
                    Culture</button>
                <button
                    class="flex h-10 shrink-0 items-center justify-center rounded-full bg-primary/10 hover:bg-primary/20 text-primary px-6 text-sm font-medium transition-colors">Chef
                    Spotlights</button>
                <button
                    class="flex h-10 shrink-0 items-center justify-center rounded-full bg-primary/10 hover:bg-primary/20 text-primary px-6 text-sm font-medium transition-colors">Wine
                    &amp; Spirits</button>
                <button
                    class="flex h-10 shrink-0 items-center justify-center rounded-full bg-primary/10 hover:bg-primary/20 text-primary px-6 text-sm font-medium transition-colors">Events</button>
            </div>
            <div class="hidden md:flex items-center gap-2 text-primary/60 font-medium text-sm">
                <span class="material-symbols-outlined text-xl" data-icon="filter_list">filter_list</span>
                Sort by: Newest
            </div>
        </div>
    </div>

    <!-- Blog Grid -->
    <section class="max-w-7xl mx-auto px-4 md:px-10 pb-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <article class="flex flex-col gap-4 group">
                <div class="w-full aspect-[16/10] overflow-hidden rounded-xl bg-primary/5">
                    <div class="w-full h-full bg-center bg-cover transition-transform duration-500 group-hover:scale-110"
                        data-alt="Close up of fresh sourdough bread crust"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA_ZgitQh2FL-rqB_vH4CHKgix42Zc6eGbA-vLV1Ri2P4uOBooo193mqCbTUv2Amr4VwAc7r_3AgfB65jUEQ5ued6Bj6Ltw-bcGombrR8aozo68GMc7gtyy2DSDLWTqyCmiZTpWT1KA_x-rRQDkl6jV8F5jhi32qhxxCnDuA3-J2arBbKrp3co5vAoube4STB6KDoduNIy2VYP24NxP4QX2NYMQKZZ1axaMZVmMRXUWze84aYcMkWG2gLAXweDzIUzd_n1THZasdi0v");'>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-wider text-primary">
                        <span>Recipes</span>
                        <span class="size-1 rounded-full bg-primary/40"></span>
                        <span class="text-[#8a6b60] dark:text-white/60">Oct 24, 2023</span>
                    </div>
                    <h3
                        class="text-[#181311] dark:text-white text-xl font-bold leading-tight font-display group-hover:text-primary transition-colors">
                        The Ancient Art of Sourdough: A Beginner's Guide
                    </h3>
                    <p class="text-[#8a6b60] dark:text-white/70 text-sm leading-relaxed line-clamp-2">
                        Mastering the craft of wild yeast baking at home isn't just about the bread—it's about the rhythm of
                        life and fermentation.
                    </p>
                    <a class="inline-flex items-center gap-2 text-primary font-bold text-sm mt-2" href="#">
                        Read More <span class="material-symbols-outlined text-lg"
                            data-icon="arrow_forward">arrow_forward</span>
                    </a>
                </div>
            </article>
            <!-- Card 2 -->
            <article class="flex flex-col gap-4 group">
                <div class="w-full aspect-[16/10] overflow-hidden rounded-xl bg-primary/5">
                    <div class="w-full h-full bg-center bg-cover transition-transform duration-500 group-hover:scale-110"
                        data-alt="Vibrant street food market stall with steam"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAMoC40zHj0fTR3dy9IVXQm3LNFPSmN1gK3iL5l7xmcteDQJeL72i7vOhRltINfG8MKUVYklcfVacSGhHgUChL5GgStxccbCW5UBdHuG9zmjxVibWYwA9eYgUyyec2ZY8iTkKaLA4bN_bRVp3sVuleOlKb6rhCUGNGNLweElPDf9e-M4mewJFp3q4kUw5O4afo3XTTd-YbmKazcnF66TnX2-05gzSsI87RYGPPeiJRB-82f8FBYFr06ZiK6rF1gbSkiFdm86mksV5N6");'>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-wider text-primary">
                        <span>Food Culture</span>
                        <span class="size-1 rounded-full bg-primary/40"></span>
                        <span class="text-[#8a6b60] dark:text-white/60">Oct 21, 2023</span>
                    </div>
                    <h3
                        class="text-[#181311] dark:text-white text-xl font-bold leading-tight font-display group-hover:text-primary transition-colors">
                        Top 10 Street Foods to Try in Bangkok
                    </h3>
                    <p class="text-[#8a6b60] dark:text-white/70 text-sm leading-relaxed line-clamp-2">
                        A sensory journey through the world's most vibrant night markets, where smoke and spice create
                        culinary
                        magic.
                    </p>
                    <a class="inline-flex items-center gap-2 text-primary font-bold text-sm mt-2" href="#">
                        Read More <span class="material-symbols-outlined text-lg"
                            data-icon="arrow_forward">arrow_forward</span>
                    </a>
                </div>
            </article>
            <!-- Card 3 -->
            <article class="flex flex-col gap-4 group">
                <div class="w-full aspect-[16/10] overflow-hidden rounded-xl bg-primary/5">
                    <div class="w-full h-full bg-center bg-cover transition-transform duration-500 group-hover:scale-110"
                        data-alt="Chef plating a gourmet dish precisely"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAutlU-7v_VVTYRne8PjEb4KcDk020GeIFyHCQDYHAMlDF9oN3TMdHjE4gTbzkLLc1fVmxxb0EsiNzbpN9cucCgAshQX95XhoGBYYF0JM9hYoD08gfIzHQwSncul8Uslso0vZ2xhupk6AbXaIZPeqDY9WxskLOLybPU9m_LEd7aQUBf0Klr2-WjXyXc5xVZsdorTviPROusmtJsqXwRlLeRJ1Lgfjts4JK1qZr8BM_OZouVv9aCjvZrns6uqHq4d_7gYW9tdvLb_Pwf");'>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-wider text-primary">
                        <span>Chef Spotlight</span>
                        <span class="size-1 rounded-full bg-primary/40"></span>
                        <span class="text-[#8a6b60] dark:text-white/60">Oct 18, 2023</span>
                    </div>
                    <h3
                        class="text-[#181311] dark:text-white text-xl font-bold leading-tight font-display group-hover:text-primary transition-colors">
                        Inside the Mind of Michelin-Starred Chef Andre
                    </h3>
                    <p class="text-[#8a6b60] dark:text-white/70 text-sm leading-relaxed line-clamp-2">
                        We sit down with the visionary chef to discuss sustainable sourcing and the future of fine dining in
                        the
                        digital age.
                    </p>
                    <a class="inline-flex items-center gap-2 text-primary font-bold text-sm mt-2" href="#">
                        Read More <span class="material-symbols-outlined text-lg"
                            data-icon="arrow_forward">arrow_forward</span>
                    </a>
                </div>
            </article>
            <!-- Card 4 -->
            <article class="flex flex-col gap-4 group">
                <div class="w-full aspect-[16/10] overflow-hidden rounded-xl bg-primary/5">
                    <div class="w-full h-full bg-center bg-cover transition-transform duration-500 group-hover:scale-110"
                        data-alt="Vineyard landscape during sunset"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCuosyL4S7fZIwUpYdM8G_udQg6sA--jZ9OIrLms3XUE5GEjTFKLoqxIuBVQi5MU2mBkOBRgscJgTTwT8NkYO8-7KmKcsSjBTTAeQ1JcZNULjfa1anHy2Tka_IWuwfPBSepxj0zsm3pmpudyV2u3QqEjO5MJIW6dxBjs9_dsj4QMSaZ7B2MNYurlrha7NNgJ-htiGxO50rRPEyKynS1RyZ20d-GARUQoG0rLg-UzvCDedHaV8bDFNZfUG7luj1UGKQWScWZxkfKj7u-");'>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-wider text-primary">
                        <span>Wine &amp; Spirits</span>
                        <span class="size-1 rounded-full bg-primary/40"></span>
                        <span class="text-[#8a6b60] dark:text-white/60">Oct 15, 2023</span>
                    </div>
                    <h3
                        class="text-[#181311] dark:text-white text-xl font-bold leading-tight font-display group-hover:text-primary transition-colors">
                        Vineyard Tours: Exploring the Rhone Valley
                    </h3>
                    <p class="text-[#8a6b60] dark:text-white/70 text-sm leading-relaxed line-clamp-2">
                        Discovering the bold reds and nuanced whites of one of France's most celebrated wine-producing
                        regions.
                    </p>
                    <a class="inline-flex items-center gap-2 text-primary font-bold text-sm mt-2" href="#">
                        Read More <span class="material-symbols-outlined text-lg"
                            data-icon="arrow_forward">arrow_forward</span>
                    </a>
                </div>
            </article>
            <!-- Card 5 -->
            <article class="flex flex-col gap-4 group">
                <div class="w-full aspect-[16/10] overflow-hidden rounded-xl bg-primary/5">
                    <div class="w-full h-full bg-center bg-cover transition-transform duration-500 group-hover:scale-110"
                        data-alt="Assorted kitchen spices in wooden bowls"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDfc5L_Kth-QxNNqmNxY-MLxazOiu337rCeVSs_IRzL9M6AlbbIEpqksuZwlvRgwXfoZBQeXHeRA9TlduAjLGP-kvnBAU9A1_YnA1nXNML2ZP_R_qMHym_JhN4CFJMkNKRe3y9neryMD9cYRFK5gNRyfRh6lQC-BCSdEYIN71g4ZbQXrLDKkhktGiZqtEFK08LdAQORKzpA7ajvVmjXLFW7Aqaxq5jPlNGJ2o4DfYuBPkOYfBcPYAyRRyYG1ArBKGZ0KAA1aiKkB_6C");'>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-wider text-primary">
                        <span>Tips</span>
                        <span class="size-1 rounded-full bg-primary/40"></span>
                        <span class="text-[#8a6b60] dark:text-white/60">Oct 12, 2023</span>
                    </div>
                    <h3
                        class="text-[#181311] dark:text-white text-xl font-bold leading-tight font-display group-hover:text-primary transition-colors">
                        Essential Spices for the Modern Home Cook
                    </h3>
                    <p class="text-[#8a6b60] dark:text-white/70 text-sm leading-relaxed line-clamp-2">
                        Upgrade your pantry with these 12 indispensable spices that will transform your everyday home
                        cooking.
                    </p>
                    <a class="inline-flex items-center gap-2 text-primary font-bold text-sm mt-2" href="#">
                        Read More <span class="material-symbols-outlined text-lg"
                            data-icon="arrow_forward">arrow_forward</span>
                    </a>
                </div>
            </article>
            <!-- Card 6 -->
            <article class="flex flex-col gap-4 group">
                <div class="w-full aspect-[16/10] overflow-hidden rounded-xl bg-primary/5">
                    <div class="w-full h-full bg-center bg-cover transition-transform duration-500 group-hover:scale-110"
                        data-alt="Elegant cocktails being prepared at a bar"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCrYifAgqBDNasEyD7OQ5sgJCOTl6AE30lJ4vtdPfk9FECpdNt762OyOkSau18RMNBxaDSWa_gASh4LT0nCeT1CDXG8Q_P3iAFxn6E-eeX6rIBMo45YL4XOu6fRED3GufoK-LysLZd9niaA1D5gz423WZbwFI1UXwofM2UfustkOhjnKXahsXnaCMG1AjzHSVKbNIFwBgjIjmWFYyF_qcnSW3ziovhlxSmD2A2Kpod_-meBbFozp0f7wWFSQTqaroZYZWhNZQk-BvyX");'>
                    </div>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-wider text-primary">
                        <span>Events</span>
                        <span class="size-1 rounded-full bg-primary/40"></span>
                        <span class="text-[#8a6b60] dark:text-white/60">Oct 09, 2023</span>
                    </div>
                    <h3
                        class="text-[#181311] dark:text-white text-xl font-bold leading-tight font-display group-hover:text-primary transition-colors">
                        Winter Mixology Workshop 2023
                    </h3>
                    <p class="text-[#8a6b60] dark:text-white/70 text-sm leading-relaxed line-clamp-2">
                        Join us for an exclusive evening learning the art of the perfect holiday cocktail with master
                        mixologists.
                    </p>
                    <a class="inline-flex items-center gap-2 text-primary font-bold text-sm mt-2" href="#">
                        Read More <span class="material-symbols-outlined text-lg"
                            data-icon="arrow_forward">arrow_forward</span>
                    </a>
                </div>
            </article>
        </div>
        <div class="flex mt-16 justify-center">
            <button
                class="flex min-w-[200px] cursor-pointer items-center justify-center rounded-lg h-12 px-8 bg-primary/10 text-primary hover:bg-primary hover:text-white text-base font-bold transition-all">
                Load More Stories
            </button>
        </div>
    </section>
@endsection
