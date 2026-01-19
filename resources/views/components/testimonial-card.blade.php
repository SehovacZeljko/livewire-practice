@props(['image', 'name', 'profession' => 'Client', 'delay' => '0.1s'])

<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $delay }}">
    <div class="bg-dark p-4 p-xl-5 h-100 border border-secondary">
        <div class="mb-4">
            {{-- Professional Quote Icon --}}
            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
            <p class="fs-5 text-body italic">
                {{ $slot }}
            </p>
        </div>
        <div class="d-flex align-items-center border-top border-secondary pt-4">
            <img class="img-fluid rounded-circle" src="{{ asset($image) }}" style="width: 50px; height: 50px; object-fit: cover;" alt="{{ $name }}">
            <div class="ps-3">
                <h6 class="text-uppercase mb-1 text-white">{{ $name }}</h6>
                <small class="text-primary text-uppercase">{{ $profession }}</small>
            </div>
        </div>
    </div>
</div>