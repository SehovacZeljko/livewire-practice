@props(['image', 'name', 'profession' => 'Client', 'delay' => '0s'])

<div class="wow fadeInUp" data-wow-delay="{{ $delay }}">
    <div class="bg-[#111111] p-8 lg:p-12 h-full border border-gray-800 transition-all duration-300 hover:border-primary">
        <div class="mb-6">
            {{-- Quote Icon --}}
            <i class="fa fa-quote-left text-3xl text-primary mb-4 block"></i>
            <p class="text-lg lg:text-xl text-gray-400 italic leading-relaxed">
                {{ $slot }}
            </p>
        </div>
        
        <div class="flex items-center border-t border-gray-800 pt-6">
            <img class="w-12 h-12 rounded-full object-cover border-2 border-primary" 
                 src="{{ asset($image) }}" 
                 alt="{{ $name }}">
            <div class="ml-4">
                <h6 class="uppercase font-bold text-white tracking-widest text-sm mb-1">{{ $name }}</h6>
                <small class="text-primary uppercase tracking-tighter text-xs font-semibold">{{ $profession }}</small>
            </div>
        </div>
    </div>
</div>