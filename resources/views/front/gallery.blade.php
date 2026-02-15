@extends('front.layout')

@section('title', 'Gallery | FEASTRIA')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" data-alt="Atmospheric bar lighting and cocktails"
            style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('https://lh3.googleusercontent.com/aida-public/AB6AXuCkb4fN9SKzZFkK_i_yXpkejK9Tkk5xy39RhE-FVhQnhTvMR3Zx7uSvtOtyZpKw_-fzbITOpbCrtEzGOavaH2zmHUDF-yXVoFEX3Vcm9vxmD-umaT4oCW8ot0RPgjmxJmBWKT6-Q3j31HrNqRfY_SVYyWWDGHDlLTrTYELiuA7iPqKA2vbv_r0tyobXrQtETaYF7gxByFnbIa9HYthhBFd02CvR1e19KcS33fBh30_bnk8NKPDTVffJfFmBtnlKuutxo78mqUyA6RM2');">
        </div>
        <div class="relative text-center px-4">
            <h1 class="text-white text-5xl md:text-7xl font-black tracking-tight mb-4">Gallery</h1>
            <p class="text-white/90 text-lg md:text-xl max-w-2xl mx-auto font-medium">A visual journey through our culinary
                artistry and vibrant atmosphere.</p>
        </div>
    </section>

    <!-- Filters -->
    <section class="max-w-[1200px] mx-auto px-6 py-12">
        <div class="flex flex-wrap items-center justify-between gap-6 border-b border-[#e6dedb] dark:border-primary/20 pb-4">
            <div class="flex gap-8">
                <button class="relative pb-4 text-sm font-bold text-[#181311] dark:text-white">
                    All
                    <span class="absolute bottom-0 left-0 w-full h-[3px] bg-primary"></span>
                </button>
                <button
                    class="pb-4 text-sm font-bold text-[#8a6b60] dark:text-white/60 hover:text-primary transition-colors">Dining</button>
                <button
                    class="pb-4 text-sm font-bold text-[#8a6b60] dark:text-white/60 hover:text-primary transition-colors">Dishes</button>
                <button
                    class="pb-4 text-sm font-bold text-[#8a6b60] dark:text-white/60 hover:text-primary transition-colors">Events</button>
            </div>
            <div class="flex items-center gap-2 text-[#8a6b60] dark:text-white/60 text-sm">
                <span class="material-symbols-outlined text-base">grid_view</span>
                <span>Displaying 12 Moments</span>
            </div>
        </div>
        <!-- Masonry Grid -->
        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Item 1: Dining -->
            <div class="gallery-item group relative aspect-[4/5] rounded-xl overflow-hidden cursor-pointer shadow-lg">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    data-alt="Elegant restaurant interior with warm lighting"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9vjClDNa6Vx8vqb2KEiCjVZUOrcWZdcB49uLwKmlTmots0qT3kdJBlaAZceAJJ9UUsVF9SpKS0ELJWl9_AO6bYAutAtJ49yDf1XoAIxI3FANQo4H8fG2VktipEvHK9GiqIJEbfuZ1KoHqelQrNJFEXeAe3gchymu-IgHNM4ay0DrmatWv0m0Q3pZPQXfdMmj39cGCa0GhehB8N6gv_81RNu4NY422lDiFsryhlalq0pdqpfIY2mgXj2zt59rQiGlSKFI45AeiEa-H" />
                <div
                    class="overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <span class="text-primary text-xs font-bold uppercase tracking-widest mb-2">Dining</span>
                    <h3 class="text-white text-xl font-bold">Main Dining Room</h3>
                    <p class="text-white/80 text-sm mt-1">Sophisticated ambiance for unforgettable evenings.</p>
                </div>
            </div>
            <!-- Item 2: Dishes -->
            <div class="gallery-item group relative aspect-square rounded-xl overflow-hidden cursor-pointer shadow-lg">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    data-alt="Plated pasta dish with fresh garnish"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDOR-9Z6Cu0wW3KUl9SaJtPdnw4PkN3geuwqpao5vP4DsDTZGqTlzZpL13pW_wEv_8ZPMNMcAOvUYNkumi7mK5O-zhJMyyJpDRK4ogVk1SeJfRrj4YBEWjkOEAo5pd8d5hmmYotGnkrdF8eCq2Z99ZcjJJGYuOhgJOCUSSRgUfW6mmmxs4fMS4vIqJULUwAkIOnP7RdBKhnCyIcvIs0ADAf6IY23r6NNEtpojYaQkDEBTGU52ETZ5fs5mDpJ-rmucPBeLrEI6WHAeR0" />
                <div
                    class="overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <span class="text-primary text-xs font-bold uppercase tracking-widest mb-2">Dishes</span>
                    <h3 class="text-white text-xl font-bold">Signature Tagliatelle</h3>
                    <p class="text-white/80 text-sm mt-1">Hand-rolled pasta with wild mushroom ragu.</p>
                </div>
            </div>
            <!-- Item 3: Events -->
            <div class="gallery-item group relative aspect-[3/4] rounded-xl overflow-hidden cursor-pointer shadow-lg">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    data-alt="Live band playing at a restaurant event"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCRYTDKBZ15wXiePQ_AQX2jLNCvXo-XjA7GHHgzamXi2YD1PtVGfuVxfPnGc8d5sXYlNNs__NU5eIfscIKWh4D8Sx4C2IbDIlYnVWC_zWd8KosXVGGSDPA8VT3F2dxIwh3WEUzjLtOcbdQvB8wmtVmSqFi41Q4eabZVjMherZ5Y4u5TsZ8d1rgVj1Iny5QOMpS9ezgK8QaRwQhfwGUtNUYT1CU3LfLglMdOByWrfWAGl_89oUUnjLjfSfcK3UN7xxbVwCFAUUdG0S1X" />
                <div
                    class="overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <span class="text-primary text-xs font-bold uppercase tracking-widest mb-2">Events</span>
                    <h3 class="text-white text-xl font-bold">Jazz Night Fridays</h3>
                    <p class="text-white/80 text-sm mt-1">Rhythmic beats and smooth cocktails.</p>
                </div>
            </div>
            <!-- Item 4: Dishes -->
            <div class="gallery-item group relative aspect-[3/4] rounded-xl overflow-hidden cursor-pointer shadow-lg">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    data-alt="Artfully crafted cocktail with a garnish"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNp7zR7sQhBjeXalK2w6M-HPYtEshOQHdS-Lp6mKdoDwY8U45zj00zXEfHav0Ku4bKs1b5wYTJcNrOm4xYdOSM4lupvrD6zPEyFTUnL_J3lHZBLRK1-834_AWqe1nqz6ENztm6ZNWtxGMCEEAT-odCwLXUqbPGOE_6ttAASFqsbRsMB2TJ44A2I89sfRU6AsaHkSiKvp4hl3-c6Bcrjb8Y_nlltSe1-GUY1oZxC0QmTA_I-PNx20kYtfGIMcifd435czdjDPPoGeRH" />
                <div
                    class="overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <span class="text-primary text-xs font-bold uppercase tracking-widest mb-2">Dishes</span>
                    <h3 class="text-white text-xl font-bold">The Botanist Gin</h3>
                    <p class="text-white/80 text-sm mt-1">Infused with house-grown herbs.</p>
                </div>
            </div>
            <!-- Item 5: Dining -->
            <div class="gallery-item group relative aspect-[4/5] rounded-xl overflow-hidden cursor-pointer shadow-lg">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    data-alt="Outdoor patio seating at sunset"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6rC78nSk02gI2aKs8V32awxr-Zr6v1rFoIkeI2-AP6P676FaPNaIoeHV8WfSZ00UqmOAA79fiBVKfUSehjdmIyNeHU4QLKneeY6GZDcRxZw9QgmA42QKvY0dpdtE6lghY4ELpCxd5L7YG02rzgFHgVIBq5qup8ptbtB-I1iTdgleeedywMyfHYOFnk83lravr5-8Moo7Ln9aRB9CCq5UMffZt-TmOdBA6a0WmpzaNtWVzkxAqj67cESjygcyoudjziQfaRCYtVY_5" />
                <div
                    class="overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <span class="text-primary text-xs font-bold uppercase tracking-widest mb-2">Dining</span>
                    <h3 class="text-white text-xl font-bold">Alfresco Terrace</h3>
                    <p class="text-white/80 text-sm mt-1">Dine under the stars with city views.</p>
                </div>
            </div>
            <!-- Item 6: Events -->
            <div class="gallery-item group relative aspect-square rounded-xl overflow-hidden cursor-pointer shadow-lg">
                <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                    data-alt="Decorated table for a private gala event"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDq0z5H6rNiAOh1LOjpx8Z96TaZx13YvG5qspH44eTbFXv5rxBlYQWoUfWEP0FXi0c0JRW2aX9wRFtbg2xfFBXQjDDmBxqU-GMQaqGvQSwA7kOuigjz7j3hdzaxa_aDb3K7IR4KSRYePt_yqE0RKqgDCyHw0GspXYc8z6cvZw7_l7zJFhtYV8ReIcW_6XeHemrJIGRmptXblePee8KQOk4RKe6QLqT9ai-si6LLvyMfVbbycs5cuINSwx_IDb4C6oNxD0fagCEaRvaG" />
                <div
                    class="overlay absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                    <span class="text-primary text-xs font-bold uppercase tracking-widest mb-2">Events</span>
                    <h3 class="text-white text-xl font-bold">Private Gala</h3>
                    <p class="text-white/80 text-sm mt-1">Bespoke celebrations tailored to you.</p>
                </div>
            </div>
        </div>
        <div class="mt-16 flex justify-center">
            <button
                class="flex items-center gap-2 bg-white dark:bg-background-dark border border-[#e6dedb] dark:border-primary/30 px-8 py-3 rounded-lg font-bold hover:bg-background-light dark:hover:bg-primary/10 transition-all">
                Load More Moments
                <span class="material-symbols-outlined">expand_more</span>
            </button>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-primary/5 dark:bg-primary/10 py-20 mt-10">
        <div class="max-w-[800px] mx-auto text-center px-6">
            <h2 class="text-4xl font-black text-[#181311] dark:text-white mb-6">Experience it yourself</h2>
            <p class="text-lg text-[#8a6b60] dark:text-white/70 mb-10">Join us for an unforgettable dining experience where
                every dish is a masterpiece and every visit a memory.</p>
            <a href="{{ route('reservations') }}"
                class="inline-block bg-primary text-white text-lg font-bold px-10 py-4 rounded-xl hover:scale-105 transition-transform shadow-xl shadow-primary/20">
                Make a Reservation
            </a>
        </div>
    </section>
@endsection
