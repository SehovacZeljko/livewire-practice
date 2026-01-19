<div class="bg-dark min-h-screen">
    <div class="relative w-full pb-20 bg-dark">
        <div class="max-w-7xl mx-auto px-4 text-center py-24 lg:py-32">
            <h1 class="text-5xl md:text-7xl font-bold uppercase text-white mb-6 animated slideInDown">
                About
            </h1>
            <nav class="animated slideInDown">
                <ol class="flex justify-center uppercase space-x-3 text-sm tracking-[0.2em]">
                    <li><a class="text-white hover:text-primary transition-colors" href="/" wire:navigate>Home</a></li>
                    <li class="text-white/30">/</li>
                    <li class="text-primary">About</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="w-full py-24" style="background: rgba(0, 0, 0, .5);">
        <div class="max-w-7xl mx-auto px-4">
            {{-- This grid replaces the Bootstrap 'row' --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
                
                {{-- Left Side: Text (Replaces col-lg-7) --}}
                <div class="lg:col-span-7">
                    <div class="mb-10 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="relative inline-block pr-20 lg:pr-28">
                            <h5 class="text-primary uppercase tracking-[0.4em] font-semibold mb-3">History</h5>
                            <h1 class="text-4xl md:text-6xl font-bold uppercase text-white leading-tight">
                                About Our Agency
                            </h1>
                            {{-- Line using white for visibility on the dark rgba bg --}}
                            <span class="absolute top-1/2 right-0 w-16 lg:w-24 h-[1px] bg-white"></span>
                        </div>
                    </div>
                    
                    {{-- Text using your specific #666666 --}}
                    <p class="text-lg text-[#666666] leading-relaxed mb-10 wow fadeInUp" data-wow-delay="0.3s">
                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet.
                    </p>
                    
                    <div class="wow fadeInUp" data-wow-delay="0.5s">
                        {{-- Manual button styling instead of 'btn' --}}
                        <a href="#!" class="inline-block text-center border-2 border-primary text-primary hover:bg-primary hover:text-dark px-10 py-4 uppercase font-bold tracking-widest transition-all duration-300">
                            Become A Model
                        </a>
                    </div>
                </div>

                {{-- Right Side: Image (Replaces col-lg-5) --}}
                <div class="lg:col-span-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="relative">
                        <img class="w-full h-auto shadow-[0_20px_50px_rgba(0,0,0,0.5)] rounded-sm" src="{{ asset('img/about.png') }}" alt="About">
                        {{-- Corner accent using primary gold --}}
                        <div class="absolute -bottom-5 -left-5 w-24 h-24 border-b-4 border-l-4 border-primary pointer-events-none"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>