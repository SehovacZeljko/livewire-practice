
<div>
    <div class="relative w-full pb-20 bg-dark">
        <div class="max-w-7xl mx-auto px-4 text-center py-24 lg:py-32">
            <h1 class="text-5xl md:text-7xl font-bold uppercase text-white mb-6 animated slideInDown">
                Testimonial
            </h1>
            <nav class="animated slideInDown">
                <ol class="flex justify-center uppercase space-x-3 text-sm tracking-[0.2em]">
                    <li><a class="text-white hover:text-primary transition-colors" href="/" wire:navigate>Home</a></li>
                    <li class="text-white/30">/</li>
                    <li><a class="text-white hover:text-primary transition-colors" href="#">Pages</a></li>
                    <li class="text-white/30">/</li>
                    <li class="text-primary">Testimonial</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="w-full py-24 bg-secondary">
        <div class="max-w-7xl mx-auto px-4">
            
            <div class="text-center mb-16">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="relative inline-block px-16 lg:px-24">
                        <h5 class="text-primary uppercase tracking-[0.4em] font-semibold mb-3">Testimonial</h5>
                        <h1 class="text-4xl md:text-5xl font-bold uppercase text-white">Our Clients Say</h1>
                        
                        <span class="absolute top-1/2 left-0 w-12 lg:w-20 h-[1px] bg-primary"></span>
                        <span class="absolute top-1/2 right-0 w-12 lg:w-20 h-[1px] bg-primary"></span>
                    </div>
                </div>
            </div>
            
            {{-- We use grid-cols-12 to allow for flexible sizing and centering --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Card 1 --}}
                <x-testimonial-card 
                    image="img/testimonial-1.jpg" 
                    name="Joanne Irwin" 
                    profession="Fashion Director"
                    delay="0.1s"
                >
                    Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                </x-testimonial-card>

                {{-- Card 2 --}}
                <x-testimonial-card 
                    image="img/testimonial-2.jpg" 
                    name="Lana Anderson" 
                    profession="Photographer"
                    delay="0.3s"
                >
                    Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                </x-testimonial-card>

                {{-- Card 3 --}}
                <x-testimonial-card 
                    image="img/testimonial-3.jpg" 
                    name="Pamela Torney" 
                    profession="Agency Manager"
                    delay="0.5s"
                >
                    Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.
                </x-testimonial-card>
            </div>
        </div>
    </div>
</div>