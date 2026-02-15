<footer class="bg-[#181311] text-white pt-20 pb-10 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-4 md:px-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
        <div class="space-y-6">
            <div class="flex items-center gap-2 text-primary">
                <div class="size-8">
                    <svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M13.8261 30.5736C16.7203 29.8826 20.2244 29.4783 24 29.4783C27.7756 29.4783 31.2797 29.8826 34.1739 30.5736C36.9144 31.2278 39.9967 32.7669 41.3563 33.8352L24.8486 7.36089C24.4571 6.73303 23.5429 6.73303 23.1514 7.36089L6.64374 33.8352C8.00331 32.7669 11.0856 31.2278 13.8261 30.5736Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-white">FEASTRIA</h2>
            </div>
            <p class="text-white/70">Elevating the art of dining through passion, sustainability,
                and unmatched culinary craft since 2012.</p>
            <div class="flex gap-4">
                <a class="size-10 rounded-full border border-primary/20 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all"
                    href="#">
                    <span class="material-symbols-outlined text-lg">public</span>
                </a>
                <a class="size-10 rounded-full border border-primary/20 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all"
                    href="#">
                    <span class="material-symbols-outlined text-lg">camera</span>
                </a>
                <a class="size-10 rounded-full border border-primary/20 flex items-center justify-center text-primary hover:bg-primary hover:text-white transition-all"
                    href="#">
                    <span class="material-symbols-outlined text-lg">share</span>
                </a>
            </div>
        </div>
        <div>
            <h4 class="font-bold mb-6 text-white">Quick Links</h4>
            <ul class="space-y-4 text-white/70">
                <li><a class="hover:text-primary transition-colors" href="{{ route('menu') }}">Our Menu</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ route('reservations') }}">Make a
                        Reservation</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ route('private-events') }}">Private
                        Events</a>
                </li>
                <li><a class="hover:text-primary transition-colors" href="{{ route('gift-cards') }}">Gift Cards</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-bold mb-6 text-white">Company</h4>
            <ul class="space-y-4 text-white/70">
                <li><a class="hover:text-primary transition-colors" href="{{ route('about') }}">About Us</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ route('chefs') }}">Our Chefs</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ route('blogs') }}">Blog</a></li>
                <li><a class="hover:text-primary transition-colors" href="{{ route('careers') }}">Careers</a></li>
            </ul>
        </div>
        <div>
            <h4 class="font-bold mb-6 text-white">Visit Us</h4>
            <ul class="space-y-4 text-white/70">
                <li class="flex items-start gap-3">
                    <span class="material-symbols-outlined text-primary">location_on</span>
                    <span>123 Culinary Ave, Gastronomy District<br />New York, NY 10001</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">phone</span>
                    <span>(555) 123-4567</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">mail</span>
                    <span>hello@feastria.com</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="max-w-7xl mx-auto px-4 md:px-10 border-t border-white/10 pt-10 text-center text-sm text-white/40">
        <p>© 2024 FEASTRIA Fine Dining Group. All rights reserved. | <a class="hover:underline" href="#">Privacy
                Policy</a> | <a class="hover:underline" href="#">Terms of Service</a></p>
    </div>
</footer>
