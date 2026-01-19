<div>
    <div class="relative w-full pb-20 bg-gray-900">
        <div class="container mx-auto px-4 text-center py-24 lg:py-32">
            <h1 class="text-5xl md:text-6xl font-bold uppercase text-white mb-6 animated slideInDown tracking-tighter">
                404 Error
            </h1>
            <nav class="animated slideInDown">
                <ol class="flex justify-center uppercase space-x-2 text-sm tracking-[0.2em]">
                    <li><a class="text-white hover:text-primary transition" href="/" wire:navigate>Home</a></li>
                    <li class="text-gray-500">/</li>
                    <li class="text-primary">404</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="w-full py-20 bg-secondary-section">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-2xl mx-auto">
                <div class="mb-6 wow fadeInUp" data-wow-delay="0.1s">
                    <i class="bi bi-exclamation-triangle text-8xl md:text-[10rem] text-primary leading-none opacity-50"></i>
                </div>
                
                <h1 class="text-9xl md:text-[12rem] font-black text-white leading-none mb-4 tracking-tighter wow fadeInUp" data-wow-delay="0.2s">
                    404
                </h1>
                
                <h3 class="text-2xl md:text-4xl font-bold uppercase text-white mb-6 tracking-widest wow fadeInUp" data-wow-delay="0.3s">
                    Page Not Found
                </h3>
                
                <p class="text-gray-400 text-lg mb-10 max-w-md mx-auto wow fadeInUp" data-wow-delay="0.4s">
                    We’re sorry, the page you have looked for does not exist in our portfolio!
                </p>

                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <a class="inline-block border-2 border-primary text-primary hover:bg-primary hover:text-dark px-12 py-4 uppercase font-bold tracking-widest transition-all duration-300" 
                       href="/" 
                       wire:navigate>
                        Go Back To Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>