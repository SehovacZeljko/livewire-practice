@props(['subtitle', 'title', 'image' => 'img/about.jpg', 'bgClass' => 'bg-white'])

<div class="w-full py-16 lg:py-24 {{ $bgClass === 'bg-secondary' ? 'bg-secondary-section text-white' : 'bg-white text-gray-600' }}">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <div class="lg:col-span-7 pb-10 lg:pb-0">
                <div class="mb-10 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="relative inline-block pr-16 lg:pr-24">
                        <h5 class="text-primary uppercase tracking-[0.3em] font-semibold mb-2">{{ $subtitle }}</h5>
                        <h1 class="text-4xl md:text-5xl font-bold uppercase {{ $bgClass === 'bg-secondary' ? 'text-white' : 'text-dark' }}">
                            {{ $title }}
                        </h1>
                        <span class="absolute top-1/2 right-0 w-12 lg:w-20 h-[1px] {{ $bgClass === 'bg-secondary' ? 'bg-white' : 'bg-dark' }}"></span>
                    </div>
                </div>
                
                <div class="text-lg leading-relaxed mb-8 wow fadeInUp" data-wow-delay="0.2s">
                    {{ $slot }}
                </div>

                <ul class="mb-10 space-y-4 wow fadeInUp" data-wow-delay="0.3s">
                    <li class="flex items-center pb-3 border-b border-gray-700/50 lg:border-none">
                        <i class="fa fa-check-circle text-primary text-xl mr-3"></i> 
                        <span>Lorem ipsum dolor sit amet consectetur elit.</span>
                    </li>
                    <li class="flex items-center pb-3 border-b border-gray-700/50 lg:border-none">
                        <i class="fa fa-check-circle text-primary text-xl mr-3"></i> 
                        <span>Donec vehicula, sem ut tempus tempus.</span>
                    </li>
                    <li class="flex items-center pb-3 border-b border-gray-700/50 lg:border-none">
                        <i class="fa fa-check-circle text-primary text-xl mr-3"></i> 
                        <span>Morbi mi dapibus, feugiat nisi non mollis justo.</span>
                    </li>
                </ul>

                <div class="flex flex-col sm:flex-row gap-4 wow fadeInUp" data-wow-delay="0.4s">
                    <a href="#!" class="flex-1 text-center py-4 border-2 border-primary text-primary font-bold uppercase tracking-widest hover:bg-primary hover:text-white transition-all duration-300">
                        Become A Model
                    </a>
                    <a href="#!" class="flex-1 text-center py-4 bg-primary text-dark font-bold uppercase tracking-widest hover:bg-white transition-all duration-300">
                        Schedule Casting
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5 wow fadeInUp" data-wow-delay="0.5s">
                <div class="relative group">
                    <img class="w-full h-auto shadow-2xl transition-transform duration-500 group-hover:scale-[1.02]" 
                         src="{{ asset($image) }}" 
                         alt="{{ $title }}">
                    <div class="absolute -bottom-4 -right-4 w-24 h-24 border-r-4 border-b-4 border-primary pointer-events-none"></div>
                </div>
            </div>

        </div>
    </div>
</div>