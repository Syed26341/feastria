@extends('front.layout')

@section('title', 'Reservations | FEASTRIA')

@section('content')
    <!-- Hero Section -->
    <section class="relative h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center" data-alt="Warm atmospheric restaurant interior with elegant lighting"
            style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url('https://lh3.googleusercontent.com/aida-public/AB6AXuCPpKCPVUSKtcvTRZgfUslyinRn29pA_pGwmOD4J8t636WhQOpqQCQcRd8O1XrtCT1hS41AkqSV25Kw5sY-ePPVQ6o1JvbW2ImUwZwGr_tIS-o3IEmVHHxlLRw6L8SrL4Vsk2OCnBv91lMVQlYtdWDSf5kwT0U69SRBZl2TcJHd50kjZSXTyK-agTVq_qpoDisNtubRAWMa7zWDW0bRzGPuwEqAhGw2A8N8sezqZOw4pMNU55ZYiYKfyQ47Y7-N0OwXGjZEEyrlFMV9')">
        </div>
        <div class="relative z-10 text-center px-4">
            <h1 class="text-white text-5xl md:text-6xl font-black leading-tight tracking-tight mb-4">Reserve Your Table
            </h1>
            <p class="text-white/90 text-lg md:text-xl max-w-2xl mx-auto">Join us for an unforgettable culinary journey.
                Secure your spot in minutes.</p>
        </div>
    </section>

    <!-- Reservation Form Section -->
    <section class="container mx-auto px-4 -mt-24 relative z-20 pb-20">
        <div class="max-w-4xl mx-auto bg-white dark:bg-[#181311] rounded-xl shadow-2xl p-8 md:p-12 border border-primary/5">
            <div class="mb-10 text-center">
                <h2 class="text-2xl font-bold mb-2 text-[#181311] dark:text-white">Booking Details</h2>
                <div class="h-1 w-20 bg-primary mx-auto rounded-full"></div>
            </div>
            <form class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Name -->
                <div class="flex flex-col gap-2">
                    <label class="text-sm font-semibold uppercase tracking-wider text-[#181311]/60 dark:text-white/60">Full
                        Name</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-primary/60">person</span>
                        <input
                            class="w-full pl-12 pr-4 py-4 rounded-lg border border-primary/20 bg-primary/5 focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none dark:bg-primary/10 dark:text-white"
                            placeholder="John Doe" type="text" />
                    </div>
                </div>
                <!-- Email -->
                <div class="flex flex-col gap-2">
                    <label class="text-sm font-semibold uppercase tracking-wider text-[#181311]/60 dark:text-white/60">Email
                        Address</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-primary/60">mail</span>
                        <input
                            class="w-full pl-12 pr-4 py-4 rounded-lg border border-primary/20 bg-primary/5 focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none dark:bg-primary/10 dark:text-white"
                            placeholder="john@example.com" type="email" />
                    </div>
                </div>
                <!-- Date Picker -->
                <div class="flex flex-col gap-2">
                    <label
                        class="text-sm font-semibold uppercase tracking-wider text-[#181311]/60 dark:text-white/60">Date</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-primary/60">calendar_today</span>
                        <input
                            class="w-full pl-12 pr-4 py-4 rounded-lg border border-primary/20 bg-primary/5 focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none dark:bg-primary/10 dark:text-white"
                            type="date" />
                    </div>
                </div>
                <!-- Time Picker -->
                <div class="flex flex-col gap-2">
                    <label
                        class="text-sm font-semibold uppercase tracking-wider text-[#181311]/60 dark:text-white/60">Time</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-primary/60">schedule</span>
                        <select
                            class="w-full pl-12 pr-4 py-4 rounded-lg border border-primary/20 bg-primary/5 focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none appearance-none dark:bg-primary/10 dark:text-white">
                            <option value="">Select time</option>
                            <option>18:00</option>
                            <option>18:30</option>
                            <option>19:00</option>
                            <option>19:30</option>
                            <option>20:00</option>
                            <option>20:30</option>
                            <option>21:00</option>
                        </select>
                    </div>
                </div>
                <!-- Guest Count -->
                <div class="flex flex-col gap-2 md:col-span-2">
                    <label
                        class="text-sm font-semibold uppercase tracking-wider text-[#181311]/60 dark:text-white/60">Number
                        of Guests</label>
                    <div class="relative">
                        <span
                            class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-primary/60">group</span>
                        <select
                            class="w-full pl-12 pr-4 py-4 rounded-lg border border-primary/20 bg-primary/5 focus:ring-2 focus:ring-primary focus:border-transparent transition-all outline-none appearance-none dark:bg-primary/10 dark:text-white">
                            <option value="1">1 Person</option>
                            <option value="2">2 People</option>
                            <option value="3">3 People</option>
                            <option value="4">4 People</option>
                            <option value="5">5+ People</option>
                        </select>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="md:col-span-2 mt-4">
                    <button
                        class="w-full py-5 bg-[#f15a24] hover:bg-[#d84a1a] text-white font-black text-lg rounded-lg shadow-lg shadow-primary/30 transition-all hover:scale-[1.01] active:scale-[0.99] uppercase tracking-widest"
                        type="submit">
                        Reserve Now
                    </button>
                    <p class="text-center text-xs mt-4 text-[#181311]/40 dark:text-white/40">By clicking "Reserve Now", you
                        agree to our booking terms and conditions.</p>
                </div>
            </form>
        </div>
    </section>

    <!-- Information Section -->
    <section class="bg-primary/5 dark:bg-white/5 py-20 px-4">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 max-w-6xl mx-auto">
                <!-- Contact Info -->
                <div class="space-y-6">
                    <div class="flex items-center gap-4">
                        <div class="size-12 bg-primary rounded-xl flex items-center justify-center text-white">
                            <span class="material-symbols-outlined">call</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-[#181311] dark:text-white">Contact Us</h3>
                            <p class="text-primary font-medium">+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="size-12 bg-primary rounded-xl flex items-center justify-center text-white">
                            <span class="material-symbols-outlined">location_on</span>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg text-[#181311] dark:text-white">Location</h3>
                            <p class="text-[#181311]/60 dark:text-white/60">123 Culinary Ave, Foodie District</p>
                        </div>
                    </div>
                </div>
                <!-- Hours -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold flex items-center gap-2 text-[#181311] dark:text-white">
                        <span class="material-symbols-outlined text-primary">schedule</span>
                        Our Hours
                    </h3>
                    <div class="space-y-2 border-l-2 border-primary/20 pl-4">
                        <div class="flex justify-between">
                            <span class="font-medium text-[#181311] dark:text-white">Mon - Thu</span>
                            <span class="text-[#181311]/60 dark:text-white/60">11:00 AM - 10:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-medium text-[#181311] dark:text-white">Fri - Sat</span>
                            <span class="text-[#181311]/60 dark:text-white/60">11:00 AM - 11:30 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-medium text-primary">Sunday</span>
                            <span class="text-[#181311]/60 dark:text-white/60">10:00 AM - 09:00 PM</span>
                        </div>
                    </div>
                </div>
                <!-- Policy -->
                <div class="space-y-4">
                    <h3 class="text-xl font-bold flex items-center gap-2 text-[#181311] dark:text-white">
                        <span class="material-symbols-outlined text-primary">verified_user</span>
                        Reservation Policy
                    </h3>
                    <p class="text-[#181311]/70 dark:text-white/70 leading-relaxed text-sm">
                        We value your time and aim to seat all guests promptly. We hold tables for a maximum of 15 minutes
                        past
                        the reservation time. Please notify us if you are running late. For parties larger than 8, please
                        contact us directly via phone.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
