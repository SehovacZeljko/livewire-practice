<div>
<div class="container-fluid p-0 mb-5">
    <div class="position-relative" style="height: 100vh; min-height: 500px;">
        <img class="w-100 h-100" src="{{ asset('img/carousel-1.jpg') }}" style="object-fit: cover;" alt="Hero Image">
        
        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0, 0, 0, .5);">
            <div class="text-center">
                <div class="title mx-5 px-5 wow fadeInDown">
                    <div class="title-center">
                        <h5>Welcome</h5>
                        <h1 class="display-1 text-white">Modeling Agency</h1>
                    </div>
                </div>
                <p class="fs-5 mb-5 text-white wow fadeInUp" data-wow-delay="0.2s">
                    Discover professional talent for your next fashion project.
                </p>
                <a href="/about" wire:navigate class="btn btn-primary border-2 py-3 px-5 wow fadeInUp" data-wow-delay="0.4s">
                    Explore More
                </a>
            </div>
        </div>
    </div>
</div>

    <div class="container-fluid bg-secondary">
    </div>

    <div class="container-fluid py-5">
    </div>

    <div class="container-fluid py-5 bg-secondary">
        <div class="container py-5">
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.3s">
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('img/testimonial-1.jpg') }}' alt=''>">
                    <p class="fs-5">Client feedback text here...</p>
                    <h5 class="text-uppercase">Joanne Irwin</h5>
                </div>
            </div>
        </div>
    </div>
    <x-about-section subtitle="History" title="About Our Agency" bgClass="bg-secondary">
        <p>This is the paragraph text for the Home page. It replaces the $slot variable.</p>
    </x-about-section>
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
    <livewire:casting-banner />

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center">
                <div class="title wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5>Models</h5>
                        <h1>Meet Our Models</h1>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($models as $model)
                    <x-model-card :name="$model['name']" :image="$model['img']" :age="$model['age']" :height="$model['h']"
                        :weight="$model['w']" :bust="$model['b']" :waist="$model['wa']" :hips="$model['hi']"
                        delay="{{ ($loop->index % 4) * 0.2 + 0.1 }}s" />
                @endforeach
            </div>
        </div>
    </div>
<div class="container-fluid py-5 bg-secondary">
    <div class="container py-5">
        <div class="text-center mb-5">
            <div class="title wow fadeInUp" data-wow-delay="0.1s">
                <div class="title-center">
                    <h5>Testimonials</h5>
                    <h1>Client Feedback</h1>
                </div>
            </div>
        </div>
        
        <div class="row g-4 justify-content-center">
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
