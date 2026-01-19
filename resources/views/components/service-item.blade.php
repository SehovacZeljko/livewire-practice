@props(['title', 'image', 'align' => 'left'])

<div class="wow fadeInUp" data-wow-delay="0.2s">
    <div class="relative overflow-hidden mb-10 
        {{-- The Curved Container Logic --}}
        {{ $align === 'left' 
            ? 'rounded-l-[500px] bg-gradient-to-r from-secondary to-dark' 
            : 'rounded-r-[500px] bg-gradient-to-l from-secondary to-dark' }}
        {{-- Mobile Logic: rounded top only --}}
        max-md:rounded-t-[500px] max-md:rounded-b-none max-md:bg-gradient-to-b">
        
        <div class="flex flex-wrap items-center {{ $align === 'right' ? 'flex-row-reverse' : '' }}">
            
            <div class="w-full md:w-5/12 {{ $align === 'right' ? 'text-right' : '' }}">
                <div class="relative inline-block p-12 lg:p-20">
                    {{-- The Image Shading (The 3rem border overlay from CSS) --}}
                    <div class="relative group">
                        <img class="w-full aspect-square object-cover rounded-full" 
                             src="{{ asset($image) }}" 
                             alt="{{ $title }}">
                        
                        {{-- The 'service-img::before' effect from your file --}}
                        <div class="absolute inset-0 m-auto w-[calc(100%-4rem)] h-[calc(100%-4rem)] 
                                    border-[1.5rem] lg:border-[3rem] border-black/50 rounded-full z-10">
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-7/12 px-8 lg:px-16 py-10 {{ $align === 'right' ? 'text-right' : 'text-left' }} max-md:text-center">
                <h3 class="text-3xl lg:text-4xl font-bold uppercase tracking-widest text-white mb-6">
                    {{ $title }}
                </h3>
                
                <div class="text-gray-300 text-lg leading-relaxed mb-8">
                    {{ $slot }}
                </div>
                
                <a href="#!" class="btn btn-outline-primary px-10 py-3 border-2 border-primary text-primary hover:bg-primary hover:text-white inline-block">
                    Read More <i class="fa fa-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>
</div>