@props(['image', 'name', 'age', 'height', 'weight', 'bust', 'waist', 'hips', 'delay' => '0.1s'])

{{-- Added max-w-[300px] and mx-auto to prevent stretching --}}
<div class="wow fadeInUp group mx-auto w-full max-w-[320px]" data-wow-delay="{{ $delay }}">
    <div class="relative overflow-hidden bg-dark border border-secondary transition-all duration-500 hover:border-primary">
        
        {{-- Aspect Ratio 3:4 is standard for model cards --}}
        <div class="relative aspect-[3/4] overflow-hidden flex items-center justify-center">
            
            <div class="absolute inset-y-0 left-0 w-1/2 flex flex-col justify-center bg-black/70 px-4 space-y-2 z-10 
                        transform -translate-x-full transition-transform duration-500 ease-in-out group-hover:translate-x-0">
                <span class="text-white text-[10px] uppercase font-bold tracking-widest border-b border-gray-700 pb-1">Age</span>
                <span class="text-white text-[10px] uppercase font-bold tracking-widest border-b border-gray-700 pb-1">Height</span>
                <span class="text-white text-[10px] uppercase font-bold tracking-widest border-b border-gray-700 pb-1">Weight</span>
                <span class="text-white text-[10px] uppercase font-bold tracking-widest border-b border-gray-700 pb-1">Bust</span>
                <span class="text-white text-[10px] uppercase font-bold tracking-widest border-b border-gray-700 pb-1">Waist</span>
                <span class="text-white text-[10px] uppercase font-bold tracking-widest">Hips</span>
            </div>

            <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                 src="{{ asset($image) }}" 
                 alt="{{ $name }}">

            <div class="absolute inset-y-0 right-0 w-1/2 flex flex-col justify-center bg-black/70 px-4 space-y-2 z-10 text-right
                        transform translate-x-full transition-transform duration-500 ease-in-out group-hover:translate-x-0">
                <span class="text-primary text-[10px] font-bold border-b border-gray-700 pb-1">{{ $age }}</span>
                <span class="text-primary text-[10px] font-bold border-b border-gray-700 pb-1">{{ $height }}</span>
                <span class="text-primary text-[10px] font-bold border-b border-gray-700 pb-1">{{ $weight }}</span>
                <span class="text-primary text-[10px] font-bold border-b border-gray-700 pb-1">{{ $bust }}</span>
                <span class="text-primary text-[10px] font-bold border-b border-gray-700 pb-1">{{ $waist }}</span>
                <span class="text-primary text-[10px] font-bold">{{ $hips }}</span>
            </div>
        </div>

        <a href="#" class="block bg-dark py-4 text-center group-hover:bg-primary transition-colors duration-300">
            <h5 class="text-white text-sm uppercase tracking-widest font-bold m-0 group-hover:text-dark">
                {{ $name }}
            </h5>
        </a>
    </div>
</div>