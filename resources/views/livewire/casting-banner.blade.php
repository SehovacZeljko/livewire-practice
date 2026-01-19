<div class="w-full py-20 bg-secondary-section">
    <div class="container mx-auto px-4">
        <div class="flex justify-center">
            <div class="w-full lg:w-7/12 text-center">
                <div class="mb-10 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="relative inline-block px-12 lg:px-20">
                        <h5 class="text-primary uppercase tracking-[0.3em] font-semibold mb-2">Casting</h5>
                        <h1 class="text-4xl md:text-5xl font-bold text-white uppercase">Want to be a Model?</h1>
                        <span class="absolute top-1/2 left-0 w-8 lg:w-16 h-[1px] bg-white"></span>
                        <span class="absolute top-1/2 right-0 w-8 lg:w-16 h-[1px] bg-white"></span>
                    </div>
                </div>
                
                @if (session()->has('message'))
                    <div class="bg-primary/10 border border-primary text-primary rounded-full px-6 py-2 mb-6 inline-block animate-pulse">
                        {{ session('message') }}
                    </div>
                @endif

                <p class="text-lg text-gray-400 mb-10 wow fadeInUp" data-wow-delay="0.2s">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat fermentum urna.
                </p>

                <form wire:submit.prevent="subscribe" class="relative max-w-xl mx-auto wow fadeInUp" data-wow-delay="0.3s">
                    <input 
                        wire:model="email"
                        class="w-full bg-[#111111] text-white border-0 rounded-full py-5 ps-8 pe-32 focus:ring-2 focus:ring-primary outline-none transition-all placeholder:text-gray-600" 
                        type="email" 
                        placeholder="Your email address"
                        required
                    >
                    
                    <button 
                        type="submit" 
                        class="absolute right-2 top-2 bottom-2 bg-primary text-dark font-bold uppercase tracking-widest px-8 rounded-full hover:bg-white transition-colors duration-300 disabled:opacity-50"
                        wire:loading.attr="disabled"
                    >
                        <span wire:loading.remove>SignUp</span>
                        <span wire:loading class="flex items-center">
                            <svg class="animate-spin h-5 w-5 text-dark" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </span>
                    </button>
                    
                    @error('email') 
                        <div class="text-primary mt-3 text-sm font-semibold italic text-left ps-8">
                            {{ $message }}
                        </div> 
                    @enderror
                </form>
            </div>
        </div>
    </div>
</div>