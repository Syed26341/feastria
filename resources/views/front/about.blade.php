@extends('front.layout')

@section('title', 'About Us | FEASTRIA')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="Interior of a modern luxury restaurant"
            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDSZKehpJDdb0ygyedD2jB2PnwpLmf7MbgAkd0KrM3kLi3HvWf8PLvWjm2eyj6lIsVZia__lbhI7UDG19YeIllCUJukl8OnQWhOrRNj8WgIXcLtIYb-2EQ2FavdDyjUn2FuLA8g9UJHyQYUCD1XGVHgnOplFn6Ieoz3LOMCoZ-QCKU-DelNelkb2Ps-L8kfVIobmSdM8QR_EfsBS2NoLhF2V5EeFHPBqjttKipTnR2huhtuYKE3CE2gnM46E6cIz89zwWzA50YtayYR");'>
        </div>
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-[-0.033em] mb-4">
                About Us
            </h1>
            <p class="text-white/90 text-lg md:text-xl font-normal leading-relaxed mb-8">
                Our Journey from Kitchen Concept to Culinary Destination
            </p>
            <nav class="flex items-center justify-center gap-2 text-white/70 text-sm font-medium">
                <a class="hover:text-white transition-colors" href="{{ route('home') }}">Home</a>
                <span class="material-symbols-outlined text-xs">chevron_right</span>
                <span class="text-white">About Us</span>
            </nav>
        </div>
    </section>

    <!-- Story Section -->
    <section class="py-20 px-4 md:px-10 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6 order-2 lg:order-1">
                <span class="text-primary font-bold uppercase tracking-widest text-sm">Established 2012</span>
                <h2 class="text-[#181311] dark:text-white text-4xl md:text-5xl font-black leading-tight tracking-tighter">
                    The Feastria Tale
                </h2>
                <div class="space-y-4 text-[#8a6b60] dark:text-white/70 leading-relaxed text-lg">
                    <p>
                        Feastria began as a modest dream in a small backyard kitchen. Our founders, driven by a passion for
                        authentic Mediterranean flavors and modern culinary techniques, wanted to create a space where every
                        meal felt like a celebration of community and craft.
                    </p>
                    <p>
                        What started as a pop-up dining experience quickly blossomed into one of the city's most beloved
                        culinary landmarks. We believe that fine dining shouldn't be pretentious—it should be personal.
                    </p>
                    <p>
                        Today, Feastria stands as a testament to the power of fresh ingredients, innovative cooking, and the
                        simple joy of sharing a table with those we love.
                    </p>
                </div>
            </div>
            <div class="relative group order-1 lg:order-2">
                <div
                    class="absolute -inset-4 bg-primary/10 rounded-xl -rotate-2 group-hover:rotate-0 transition-transform duration-500">
                </div>
                <div class="relative w-full aspect-square bg-cover bg-center rounded-xl shadow-2xl"
                    data-alt="A chef carefully plating a gourmet dish in a kitchen"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD54YVYMT5GXZ7gvyRr9pO92W8oWZsl0tv4E8tuiih_nEmPQmU4g3Eu6AHMlAXxupXjM4hHi-KEU8VmCQLVQAn7iRlMwr5DW4QkFp17oCLL1OJ2UcDw_DCfC2pvuOu6P5YDF7HkxZtgali-ceceidF1xd2NOFpSnPzn1RxZhpd4wfMzQHLG12EwSIFGFViqyOF8ZJp9zHgrTi4SqdwlXOXq84a0HxflE4ZIi7XYF7P_HNP7_nG-fzj7w-YY1oXyTwGAAnnoACZ-eOfj");'>
                </div>
            </div>
        </div>
    </section>

    <!-- Philosophy Section -->
    <section class="py-20 bg-background-light dark:bg-background-dark/50">
        <div class="max-w-7xl mx-auto px-4 md:px-10">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-black mb-4">Our Culinary Philosophy</h2>
                <div class="w-20 h-1.5 bg-primary mx-auto rounded-full"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div
                    class="flex flex-col items-center text-center gap-4 p-6 hover:bg-white dark:hover:bg-white/5 rounded-2xl transition-all border border-transparent hover:border-primary/10 shadow-sm hover:shadow-md">
                    <div class="size-16 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-2">
                        <span class="material-symbols-outlined text-4xl">eco</span>
                    </div>
                    <h3 class="text-xl font-bold">Fresh Ingredients</h3>
                    <p class="text-[#8a6b60] dark:text-white/60">We source only the finest seasonal produce at the peak of
                        its ripeness, ensuring vibrant flavors in every bite.</p>
                </div>
                <div
                    class="flex flex-col items-center text-center gap-4 p-6 hover:bg-white dark:hover:bg-white/5 rounded-2xl transition-all border border-transparent hover:border-primary/10 shadow-sm hover:shadow-md">
                    <div class="size-16 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-2">
                        <span class="material-symbols-outlined text-4xl">agriculture</span>
                    </div>
                    <h3 class="text-xl font-bold">Local Farms</h3>
                    <p class="text-[#8a6b60] dark:text-white/60">Supporting our community by partnering with local
                        sustainable farms to bring you high-quality, ethically-raised produce.</p>
                </div>
                <div
                    class="flex flex-col items-center text-center gap-4 p-6 hover:bg-white dark:hover:bg-white/5 rounded-2xl transition-all border border-transparent hover:border-primary/10 shadow-sm hover:shadow-md">
                    <div class="size-16 rounded-2xl bg-primary/10 flex items-center justify-center text-primary mb-2">
                        <span class="material-symbols-outlined text-4xl">restaurant_menu</span>
                    </div>
                    <h3 class="text-xl font-bold">Chef Vision</h3>
                    <p class="text-[#8a6b60] dark:text-white/60">Innovation led by tradition. Our culinary team blends
                        classic techniques with modern artistry to surprise your palate.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="py-24 px-4 md:px-10 max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row items-end justify-between mb-16 gap-4">
            <div class="flex flex-col gap-2">
                <span class="text-primary font-bold uppercase tracking-widest text-sm">The Talent</span>
                <h2 class="text-[#181311] dark:text-white text-4xl font-black">Meet the Culinary Masters</h2>
            </div>
            <p class="max-w-md text-[#8a6b60] dark:text-white/60">The passionate team dedicated to crafting your
                unforgettable dining experience at Feastria.</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Chef 1 -->
            <div
                class="group bg-white dark:bg-background-dark/30 rounded-2xl overflow-hidden shadow-lg border border-[#f5f1f0] dark:border-white/5 transition-transform hover:-translate-y-2">
                <div class="aspect-[4/5] bg-cover bg-center overflow-hidden"
                    data-alt="Professional portrait of a male executive chef in whites"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAPsUpNWezq1WbaEYLR-RYlhFP6klv8FpM76wWBjeM93IpDAEkj3EsSW0MNadrzYsmlO2-QkyEeC8bp-O-QYeGofsIGqbYTy5Xn7_pSDC9cBte4wQkuH3TP765hV-j0IMAooJhH6OYjCgwnmlDFaogbsk3jgwoGMuctR-BDdk_KPHo2s6S3aDow94_E3abLYIXJsVAYS3GHAVS_rej4I7qtucW1xMLRufTEonIOjFhwBb03XYLPysUMtm7SRRuQ3Y4mFK_IWjkSol4e");'>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold mb-1">Marcus Sterling</h3>
                    <p class="text-primary font-medium text-sm mb-4">Executive Chef</p>
                    <div class="flex justify-center gap-3">
                        <a class="size-8 rounded-full bg-background-light dark:bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-lg">public</span>
                        </a>
                        <a class="size-8 rounded-full bg-background-light dark:bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-lg">alternate_email</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Chef 2 -->
            <div
                class="group bg-white dark:bg-background-dark/30 rounded-2xl overflow-hidden shadow-lg border border-[#f5f1f0] dark:border-white/5 transition-transform hover:-translate-y-2">
                <div class="aspect-[4/5] bg-cover bg-center overflow-hidden"
                    data-alt="Professional portrait of a female sous chef in a kitchen"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD2HUHw7kqogh0kW7p5umkSvHlIoK5Evk936RiZ4pvmMq6aoJfbQ45fTvbB82m7062TTEYy7vIAhHT6c_5AC21jn-W8kvScpsfdK31m2YGvGZXATuAZDhvP5VWwEu3QMoEMZF7Q_AcrSJJTrFYkhdnPgYm_PxkcCcTXBpj4SfN_lSOD66VhLLYS-fe4D2d7txzmTvice9a_ljeGgu1af90Y-zAngTRKZDyQxQ5qj-2m-47CkxrGT_aFqanG7ZrvM-qOlzs-RPWTvEIu");'>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold mb-1">Elena Rossi</h3>
                    <p class="text-primary font-medium text-sm mb-4">Sous Chef</p>
                    <div class="flex justify-center gap-3">
                        <a class="size-8 rounded-full bg-background-light dark:bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-lg">public</span>
                        </a>
                        <a class="size-8 rounded-full bg-background-light dark:bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-lg">alternate_email</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Chef 3 -->
            <div
                class="group bg-white dark:bg-background-dark/30 rounded-2xl overflow-hidden shadow-lg border border-[#f5f1f0] dark:border-white/5 transition-transform hover:-translate-y-2">
                <div class="aspect-[4/5] bg-cover bg-center overflow-hidden"
                    data-alt="Professional portrait of a pastry chef holding a dessert"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCbO7eP_gGQM_OyUq6LzKAZ4QdLd_8dFF8o2FoetFOvmSuPpFqgTkdigVEI4Z-XDJQ2N8VAcbvGh5dS3zNKEo9nLhlTlQ_CHLDuOuFABDowPvKTEifu-d3rYFpo6iMBVEBYCPKsvg5U2BBix2G-yjYLY4WLP9jK_gCrQ75kdHpY_9gqQw7IPcP6z1b8MyBt8aFEs4beu7guU4nAZQOXmvOcKqRN6PF-oZlj8OYrPMrD2J_MLgS9fdt57bs8gzpedtyLVMaNTOdPbn5j");'>
                </div>
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold mb-1">Julian Vance</h3>
                    <p class="text-primary font-medium text-sm mb-4">Pastry Lead</p>
                    <div class="flex justify-center gap-3">
                        <a class="size-8 rounded-full bg-background-light dark:bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-lg">public</span>
                        </a>
                        <a class="size-8 rounded-full bg-background-light dark:bg-white/5 flex items-center justify-center hover:bg-primary hover:text-white transition-colors"
                            href="#">
                            <span class="material-symbols-outlined text-lg">alternate_email</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
