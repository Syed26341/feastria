@extends('front.layout')

@section('title', 'Frequently Asked Questions | FEASTRIA')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full h-[60vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="Close up of a chef plating a dish"
            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD9viRXWmfcTl6R9P8zrZ5ylUsf5OM28BzRwE4JQz0hjbQThqjmEMUh8SBPARZAYVmvFy4kuY2QPnB7BhF-eNubLdTEc2MUxMT0FTwQyW9YogG8YJHOS24kmf2K7Qdzge8nCzIgl3NvO2P4SidzRh1ofxWSWc_ycP9r0IhFUdCRuz1zYRzE6txEZEBtkOzDFMSPbiGIaAy0Y_r8VGg-OPUymTkQ0vXi3HNlJmNJHAN9mLhKCUrKzWN0l-ugYy3uMymh6L8W4Ng6QNKI");'>
        </div>
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <h1 class="text-white text-5xl md:text-7xl font-black leading-tight tracking-[-0.033em] mb-6">
                Frequently Asked Questions
            </h1>
            <p class="text-white/90 text-lg md:text-xl font-normal leading-relaxed mb-8 max-w-2xl mx-auto">
                Have a question? We're here to help. Browse through our most common inquiries or search for a specific
                topic.
            </p>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 px-4 md:px-10 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Sidebar / Navigation (Optional, or just keep it centered) -->
            <div class="lg:col-span-4 space-y-8">
                <div class="bg-primary/5 dark:bg-white/5 p-8 rounded-2xl border border-primary/10">
                    <h3 class="text-xl font-bold mb-4 text-[#181311] dark:text-white">Categories</h3>
                    <ul class="space-y-3">
                        <li>
                            <a href="#orders"
                                class="flex items-center justify-between text-[#181311]/70 dark:text-white/70 hover:text-primary transition-colors font-medium">
                                <span>Orders & Delivery</span>
                                <span class="material-symbols-outlined text-sm">arrow_forward_ios</span>
                            </a>
                        </li>
                        <li>
                            <a href="#payments"
                                class="flex items-center justify-between text-[#181311]/70 dark:text-white/70 hover:text-primary transition-colors font-medium">
                                <span>Payments & Refunds</span>
                                <span class="material-symbols-outlined text-sm">arrow_forward_ios</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bg-primary text-white p-8 rounded-2xl text-center">
                    <span class="material-symbols-outlined text-5xl mb-4">support_agent</span>
                    <h3 class="text-xl font-bold mb-2">Need more help?</h3>
                    <p class="text-white/80 mb-6 text-sm">Can't find what you're looking for? Our support team is here for
                        you.</p>
                    <a href="{{ route('contact') }}"
                        class="inline-block w-full bg-white text-primary font-bold py-3 rounded-lg hover:bg-white/90 transition-colors">
                        Contact Support
                    </a>
                </div>
            </div>

            <!-- FAQ Content -->
            <div class="lg:col-span-8 space-y-12">
                <!-- Category: Orders & Delivery -->
                <div id="orders" class="scroll-mt-28">
                    <div class="flex items-center gap-3 mb-6 pb-2 border-b border-primary/10">
                        <span class="material-symbols-outlined text-primary text-2xl">local_shipping</span>
                        <h2 class="text-2xl font-bold text-[#181311] dark:text-white">Orders & Delivery</h2>
                    </div>
                    <div class="space-y-4">
                        <details
                            class="group bg-white dark:bg-white/5 rounded-xl border border-[#e6dedb] dark:border-white/10 overflow-hidden transition-all duration-300 open:shadow-lg open:shadow-primary/5 open:border-primary/30">
                            <summary class="flex cursor-pointer items-center justify-between p-6 list-none select-none">
                                <span
                                    class="text-lg font-bold text-[#181311] dark:text-white group-open:text-primary transition-colors">How
                                    do I place an order?</span>
                                <span
                                    class="material-symbols-outlined text-[#8a6b60] transition-transform duration-300 group-open:rotate-180 group-open:text-primary">expand_more</span>
                            </summary>
                            <div class="px-6 pb-6 pt-0 text-[#181311]/70 dark:text-white/70 leading-relaxed">
                                You can place an order through our website or mobile app. Simply browse our menu, add your
                                favorite dishes to the cart, and proceed to checkout. You'll receive a confirmation email
                                once your order is placed.
                            </div>
                        </details>
                        <details
                            class="group bg-white dark:bg-white/5 rounded-xl border border-[#e6dedb] dark:border-white/10 overflow-hidden transition-all duration-300 open:shadow-lg open:shadow-primary/5 open:border-primary/30">
                            <summary class="flex cursor-pointer items-center justify-between p-6 list-none select-none">
                                <span
                                    class="text-lg font-bold text-[#181311] dark:text-white group-open:text-primary transition-colors">What
                                    are your delivery hours?</span>
                                <span
                                    class="material-symbols-outlined text-[#8a6b60] transition-transform duration-300 group-open:rotate-180 group-open:text-primary">expand_more</span>
                            </summary>
                            <div class="px-6 pb-6 pt-0 text-[#181311]/70 dark:text-white/70 leading-relaxed">
                                We deliver daily from 10:00 AM to 11:00 PM. Please note that hours may vary on holidays. You
                                can check the estimated delivery time for your specific location during checkout.
                            </div>
                        </details>
                        <details
                            class="group bg-white dark:bg-white/5 rounded-xl border border-[#e6dedb] dark:border-white/10 overflow-hidden transition-all duration-300 open:shadow-lg open:shadow-primary/5 open:border-primary/30">
                            <summary class="flex cursor-pointer items-center justify-between p-6 list-none select-none">
                                <span
                                    class="text-lg font-bold text-[#181311] dark:text-white group-open:text-primary transition-colors">How
                                    can I track my delivery?</span>
                                <span
                                    class="material-symbols-outlined text-[#8a6b60] transition-transform duration-300 group-open:rotate-180 group-open:text-primary">expand_more</span>
                            </summary>
                            <div class="px-6 pb-6 pt-0 text-[#181311]/70 dark:text-white/70 leading-relaxed">
                                Once your order is picked up by a courier, you can track its progress in real-time through
                                the "My Orders" section of your account or via the tracking link sent to your mobile phone.
                            </div>
                        </details>
                    </div>
                </div>

                <!-- Category: Payments & Refunds -->
                <div id="payments" class="scroll-mt-28">
                    <div class="flex items-center gap-3 mb-6 pb-2 border-b border-primary/10">
                        <span class="material-symbols-outlined text-primary text-2xl">payments</span>
                        <h2 class="text-2xl font-bold text-[#181311] dark:text-white">Payments & Refunds</h2>
                    </div>
                    <div class="space-y-4">
                        <details
                            class="group bg-white dark:bg-white/5 rounded-xl border border-[#e6dedb] dark:border-white/10 overflow-hidden transition-all duration-300 open:shadow-lg open:shadow-primary/5 open:border-primary/30">
                            <summary class="flex cursor-pointer items-center justify-between p-6 list-none select-none">
                                <span
                                    class="text-lg font-bold text-[#181311] dark:text-white group-open:text-primary transition-colors">What
                                    payment methods are accepted?</span>
                                <span
                                    class="material-symbols-outlined text-[#8a6b60] transition-transform duration-300 group-open:rotate-180 group-open:text-primary">expand_more</span>
                            </summary>
                            <div class="px-6 pb-6 pt-0 text-[#181311]/70 dark:text-white/70 leading-relaxed">
                                We accept all major credit cards (Visa, Mastercard, American Express), Apple Pay, Google
                                Pay, and PayPal. For some locations, cash on delivery may also be available.
                            </div>
                        </details>
                        <details
                            class="group bg-white dark:bg-white/5 rounded-xl border border-[#e6dedb] dark:border-white/10 overflow-hidden transition-all duration-300 open:shadow-lg open:shadow-primary/5 open:border-primary/30">
                            <summary class="flex cursor-pointer items-center justify-between p-6 list-none select-none">
                                <span
                                    class="text-lg font-bold text-[#181311] dark:text-white group-open:text-primary transition-colors">How
                                    do I request a refund?</span>
                                <span
                                    class="material-symbols-outlined text-[#8a6b60] transition-transform duration-300 group-open:rotate-180 group-open:text-primary">expand_more</span>
                            </summary>
                            <div class="px-6 pb-6 pt-0 text-[#181311]/70 dark:text-white/70 leading-relaxed">
                                If there's an issue with your order, please contact our support team within 24 hours. We'll
                                investigate and process a refund or credit to your account if applicable.
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-24 px-4 bg-primary/5 dark:bg-white/5">
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
