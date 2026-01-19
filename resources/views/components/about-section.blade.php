<div class="container-fluid {{ $bgClass }}">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7 pb-0 pb-lg-5 py-5">
                <div class="pb-0 pb-lg-5 py-5">
                    <div class="title wow fadeInUp" data-wow-delay="0.1s">
                        <div class="title-left">
                            <h5>{{ $subtitle }}</h5>
                            <h1>{{ $title }}</h1>
                        </div>
                    </div>
                    
                    {{-- This $slot will display whatever text you put inside the tags --}}
                    <div class="mb-4 wow fadeInUp" data-wow-delay="0.2s">
                        {{ $slot }}
                    </div>

                    <ul class="list-group list-group-flush mb-5 wow fadeInUp" data-wow-delay="0.3s">
                        <li class="list-group-item bg-dark text-body border-secondary ps-0">
                            <i class="fa fa-check-circle text-primary me-1"></i> Lorem ipsum dolor sit amet consectetur elit.
                        </li>
                        <li class="list-group-item bg-dark text-body border-secondary ps-0">
                            <i class="fa fa-check-circle text-primary me-1"></i> Donec vehicula, sem ut tempus tempus.
                        </li>
                        <li class="list-group-item bg-dark text-body border-secondary ps-0">
                            <i class="fa fa-check-circle text-primary me-1"></i> Morbi mi dapibus, feugiat nisi non mollis justo.
                        </li>
                    </ul>
                    <div class="row wow fadeInUp" data-wow-delay="0.4s">
                        <div class="col-6">
                            <a href="#!" class="btn btn-outline-primary border-2 py-3 w-100">Become A Model</a>
                        </div>
                        <div class="col-6">
                            <a href="#!" class="btn btn-primary py-3 w-100">Schedule Casting</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.5s">
                <img class="img-fluid" src="{{ asset($image) }}" alt="{{ $title }}">
            </div>
        </div>
    </div>
</div>