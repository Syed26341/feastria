@extends('front.layout')

@section('title', 'Gift Cards | FEASTRIA')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[50vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="Holding a gift card with a festive background"
            style='background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDq0z5H6rNiAOh1LOjpx8Z96TaZx13YvG5qspH44eTbFXv5rxBlYQWoUfWEP0FXi0c0JRW2aX9wRFtbg2xfFBXQjDDmBxqU-GMQaqGvQSwA7kOuigjz7j3hdzaxa_aDb3K7IR4KSRYePt_yqE0RKqgDCyHw0GspXYc8z6cvZw7_l7zJFhtYV8ReIcW_6XeHemrJIGRmptXblePee8KQOk4RKe6QLqT9ai-si6LLvyMfVbbycs5cuINSwx_IDb4C6oNxD0fagCEaRvaG");'>
        </div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-tight mb-6">
                The Perfect Gift
            </h1>
            <p class="text-white/90 text-lg md:text-xl font-normal max-w-2xl mx-auto mb-8 leading-relaxed">
                Treat your loved ones to an unforgettable culinary experience with a FEASTRIA gift card.
            </p>
        </div>
    </section>

    <!-- Gift Options -->
    <section class="py-20 px-4 md:px-10 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            <!-- Physical Card -->
            <div
                class="bg-white dark:bg-white/5 border border-primary/10 rounded-2xl p-8 shadow-sm flex flex-col items-center text-center">
                <div
                    class="w-64 h-40 bg-gradient-to-br from-[#181311] to-[#2c2420] rounded-xl shadow-2xl mb-8 flex items-center justify-center relative overflow-hidden group">
                    <div class="absolute inset-0 border border-[#b8860b]/30 rounded-xl m-2"></div>
                    <h3 class="text-white font-display text-2xl font-black tracking-widest z-10">FEASTRIA</h3>
                    <div
                        class="absolute -bottom-10 -right-10 w-24 h-24 bg-primary/20 rounded-full blur-xl group-hover:scale-150 transition-transform duration-700">
                    </div>
                </div>
                <h2 class="text-2xl font-bold text-[#181311] dark:text-white mb-4">Classic Gift Card</h2>
                <p class="text-[#181311]/70 dark:text-white/70 mb-8 max-w-sm">
                    A premium physical card presented in our signature packaging. Mailed directly to you or the recipient.
                </p>
                <div class="w-full space-y-4">
                    <button
                        class="w-full h-12 border-2 border-primary text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-all uppercase tracking-wider text-sm">
                        Mail a Card
                    </button>
                    <p class="text-xs text-[#181311]/50 dark:text-white/50">Free shipping on orders over $100</p>
                </div>
            </div>

            <!-- Digital Card -->
            <div
                class="bg-white dark:bg-white/5 border border-primary/10 rounded-2xl p-8 shadow-sm flex flex-col items-center text-center">
                <div
                    class="w-64 h-40 bg-gradient-to-br from-primary to-[#ff7f50] rounded-xl shadow-2xl mb-8 flex items-center justify-center relative overflow-hidden group">
                    <div class="absolute inset-0 border border-white/20 rounded-xl m-2"></div>
                    <span class="material-symbols-outlined text-white text-5xl z-10">mail</span>
                    <div
                        class="absolute top-0 left-0 w-full h-full bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>
                </div>
                <h2 class="text-2xl font-bold text-[#181311] dark:text-white mb-4">E-Gift Card</h2>
                <p class="text-[#181311]/70 dark:text-white/70 mb-8 max-w-sm">
                    Instantly delivered via email. Perfect for last-minute gifts. Personalize with your own message.
                </p>
                <div class="w-full space-y-4">
                    <button
                        class="w-full h-12 bg-primary text-white font-bold rounded-lg hover:bg-primary/90 transition-all uppercase tracking-wider text-sm shadow-lg shadow-primary/30">
                        Send Instantly
                    </button>
                    <p class="text-xs text-[#181311]/50 dark:text-white/50">Delivered within minutes</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Check Balance -->
    <section class="bg-primary/5 dark:bg-white/5 py-16 px-4">
        <div class="max-w-2xl mx-auto text-center">
            <h3 class="text-2xl font-bold text-[#181311] dark:text-white mb-6">Already have a card?</h3>
            <p class="text-[#181311]/70 dark:text-white/70 mb-8">Enter your 16-digit card number to check your current
                balance.</p>
            <div class="flex flex-col sm:flex-row gap-4">
                <input type="text" placeholder="XXXX-XXXX-XXXX-XXXX"
                    class="flex-1 h-12 rounded-lg border border-[#e6dedb] px-4 focus:ring-primary focus:border-primary">
                <button
                    class="h-12 px-8 bg-[#181311] dark:bg-white dark:text-[#181311] text-white font-bold rounded-lg hover:opacity-90 transition-opacity">
                    Check Balance
                </button>
            </div>
        </div>
    </section>
@endsection
