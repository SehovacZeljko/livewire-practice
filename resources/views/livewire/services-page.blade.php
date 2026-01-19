<div>
    <div class="relative w-full pb-20 bg-gray-900">
        <div class="container mx-auto px-4 text-center py-20">
            <h1 class="text-5xl md:text-6xl font-bold uppercase text-white mb-6 animated slideInDown">Services</h1>
            <nav class="animated slideInDown">
                <ol class="flex justify-center uppercase space-x-2 text-sm tracking-widest">
                    <li><a class="text-white hover:text-primary transition" href="/" wire:navigate>Home</a></li>
                    <li class="text-gray-500">/</li>
                    <li class="text-primary active">Services</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="w-full py-20 bg-[#1a1a1a]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary uppercase tracking-[0.3em] font-semibold mb-2">Services</h5>
                    <div class="relative inline-block px-10">
                        <h1 class="text-4xl md:text-5xl font-bold text-white uppercase">How We Help You</h1>
                        <span class="absolute top-1/2 left-0 w-8 h-[2px] bg-primary"></span>
                        <span class="absolute top-1/2 right-0 w-8 h-[2px] bg-primary"></span>
                    </div>
                </div>
            </div>

            <div class="space-y-20">
                <x-service-item title="Fashion Shows" image="img/service-1.jpg" align="left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat fermentum urna, sed gravida enim eleifend vitae.
                </x-service-item>

                <x-service-item title="Corporate Events" image="img/service-2.jpg" align="right">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat fermentum urna, sed gravida enim eleifend vitae.
                </x-service-item>

                <x-service-item title="Commercial Photo Shots" image="img/service-3.jpg" align="left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat fermentum urna, sed gravida enim eleifend vitae.
                </x-service-item>

                <x-service-item title="Professional Modeling" image="img/service-4.jpg" align="right">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat fermentum urna, sed gravida enim eleifend vitae.
                </x-service-item>
            </div>
        </div>
    </div>

    <div class="w-full py-20 bg-[#1a1a1a]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary uppercase tracking-[0.3em] font-semibold mb-2">Testimonial</h5>
                    <div class="relative inline-block px-10">
                        <h1 class="text-4xl md:text-5xl font-bold text-white uppercase">Our Clients Say</h1>
                        <span class="absolute top-1/2 left-0 w-8 h-[2px] bg-primary"></span>
                        <span class="absolute top-1/2 right-0 w-8 h-[2px] bg-primary"></span>
                    </div>
                </div>
            </div>
            
            <div class="flex flex-wrap -mx-4 justify-center">
                <x-testimonial-card image="img/testimonial-1.jpg" name="Joanne Irwin" profession="Designer">
                    Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed.
                </x-testimonial-card>
                <x-testimonial-card image="img/testimonial-2.jpg" name="Lana Anderson" profession="Photographer">
                    Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed.
                </x-testimonial-card>
                <x-testimonial-card image="img/testimonial-3.jpg" name="Pamela Torney" profession="Model">
                    Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed.
                </x-testimonial-card>
            </div>
        </div>
    </div>
</div>