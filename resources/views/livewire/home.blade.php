<div class=" bg-secondary">
    {{-- Hero Section --}}
    <div class="w-full p-0 mb-12">
        <div class="relative h-screen min-h-[500px]">
            <img class="w-full h-full object-cover" src="{{ asset('img/carousel-1.jpg') }}" alt="Hero Image">
            
            <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-black/50">
                <div class="text-center">
                    <div class="mx-5 px-5 wow fadeInDown">
                        <div class="relative inline-block px-16 lg:px-24">
                            <h5 class="text-primary uppercase tracking-[0.4em] font-semibold mb-3">Welcome</h5>
                            <h1 class="text-6xl md:text-7xl lg:text-8xl font-bold uppercase text-white mb-6">Modeling Agency</h1>
                            <span class="absolute top-1/2 left-0 w-12 lg:w-20 h-[1px] bg-primary"></span>
                            <span class="absolute top-1/2 right-0 w-12 lg:w-20 h-[1px] bg-primary"></span>
                        </div>
                    </div>
                    <p class="text-lg md:text-xl mb-12 text-white wow fadeInUp" data-wow-delay="0.2s">
                        Discover professional talent for your next fashion project.
                    </p>
                    <a href="/about" wire:navigate class="inline-block bg-primary text-dark font-bold uppercase tracking-wider border-2 border-primary py-3 px-8 transition-all duration-300 hover:bg-transparent hover:text-primary wow fadeInUp" data-wow-delay="0.4s">
                        Explore More
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-secondary">
    </div>

    <div class="w-full py-12 md:py-20">
    </div>

    {{-- Testimonial Carousel Section --}}
    <div class="w-full py-12 md:py-20 bg-secondary">
        <div class="max-w-7xl mx-auto px-4 py-12 md:py-20">
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('img/testimonial-1.jpg') }}' alt=''>">
                    <p class="text-lg md:text-xl text-gray-300">Client feedback text here...</p>
                    <h5 class="uppercase font-bold text-white tracking-wider">Joanne Irwin</h5>
                </div>
            </div>
        </div>
    </div>

    {{-- About Section --}}
    <x-about-section subtitle="History" title="About Our Agency" bgClass="bg-secondary">
        <p>This is the paragraph text for the Home page. It replaces the $slot variable.</p>
    </x-about-section>

    {{-- Service Items --}}
    <x-service-item title="Fashion Shows" image="img/service-1.jpg" align="left">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat fermentum urna...
    </x-service-item>

    <x-service-item title="Corporate Events" image="img/service-2.jpg" align="right">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat fermentum urna...
    </x-service-item>

    <x-service-item title="Commercial Photo Shots" image="img/service-3.jpg" align="left">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat fermentum urna...
    </x-service-item>

    <x-service-item title="Professional Modeling" image="img/service-4.jpg" align="right">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam feugiat fermentum urna...
    </x-service-item>

    {{-- Casting Banner --}}
    <livewire:casting-banner />

    {{-- Models Section --}}
    <div class="w-full py-12 md:py-20">
        <div class="max-w-7xl mx-auto px-4 py-12 md:py-20">
            <div class="text-center mb-16">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="relative inline-block px-16 lg:px-24">
                        <h5 class="text-primary uppercase tracking-[0.4em] font-semibold mb-3">Models</h5>
                        <h1 class="text-4xl md:text-5xl font-bold uppercase text-white">Meet Our Models</h1>
                        <span class="absolute top-1/2 left-0 w-12 lg:w-20 h-[1px] bg-primary"></span>
                        <span class="absolute top-1/2 right-0 w-12 lg:w-20 h-[1px] bg-primary"></span>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($models as $model)
                    <x-model-card 
                        :name="$model['name']" 
                        :image="$model['img']" 
                        :age="$model['age']" 
                        :height="$model['h']"
                        :weight="$model['w']" 
                        :bust="$model['b']" 
                        :waist="$model['wa']" 
                        :hips="$model['hi']"
                        delay="{{ ($loop->index % 4) * 0.2 + 0.1 }}s" 
                    />
                @endforeach
            </div>
        </div>
    </div>

    {{-- Testimonials Section --}}
    <div class="w-full py-12 md:py-20 bg-secondary">
        <div class="max-w-7xl mx-auto px-4 py-12 md:py-20">
            <div class="text-center mb-12">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="relative inline-block px-16 lg:px-24">
                        <h5 class="text-primary uppercase tracking-[0.4em] font-semibold mb-3">Testimonials</h5>
                        <h1 class="text-4xl md:text-5xl font-bold uppercase text-white">Client Feedback</h1>
                        <span class="absolute top-1/2 left-0 w-12 lg:w-20 h-[1px] bg-primary"></span>
                        <span class="absolute top-1/2 right-0 w-12 lg:w-20 h-[1px] bg-primary"></span>
                    </div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 justify-items-center">
                {{-- Card 1 --}}
                <x-testimonial-card 
                    image="img/testimonial-1.jpg" 
                    name="Joanne Irwin" 
                    profession="Fashion Designer"
                    delay="0.1s"
                >
                    The talent at Poseify is exceptional. They provided the perfect models for our runway show, and the communication was professional from start to finish.
                </x-testimonial-card>

                {{-- Card 2 --}}
                <x-testimonial-card 
                    image="img/testimonial-2.jpg" 
                    name="Lana Anderson" 
                    profession="Photographer"
                    delay="0.3s"
                >
                    As a photographer, I value models who know how to move. Every model we've booked through this agency has been top-tier and highly experienced.
                </x-testimonial-card>

                {{-- Card 3 --}}
                <x-testimonial-card 
                    image="img/testimonial-3.jpg" 
                    name="Pamela Torney" 
                    profession="Marketing Lead"
                    delay="0.5s"
                >
                    Poseify makes casting so easy. Their digital portfolios are accurate and the booking process is faster than any other agency we've used.
                </x-testimonial-card>
            </div>
        </div>
    </div>
</div>