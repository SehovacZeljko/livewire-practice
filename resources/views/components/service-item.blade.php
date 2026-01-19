<div class="service-item service-item-{{ $align }}">
    <div class="row g-0 align-items-center">
        <div class="col-md-5 {{ $align == 'right' ? 'order-md-1 text-md-end' : '' }}">
            <div class="service-img p-5 wow {{ $align == 'left' ? 'fadeInRight' : 'fadeInLeft' }}" data-wow-delay="0.2s">
                <img class="img-fluid rounded-circle" src="{{ asset($image) }}" alt="{{ $title }}">
            </div>
        </div>

        <div class="col-md-7">
            <div class="service-text px-5 px-md-0 py-md-5 {{ $align == 'right' ? 'text-md-end' : '' }} wow {{ $align == 'left' ? 'fadeInRight' : 'fadeInLeft' }}" data-wow-delay="0.5s">
                <h3 class="text-uppercase">{{ $title }}</h3>
                <div class="mb-4">
                    {{ $slot }}
                </div>
                <a class="btn btn-outline-primary border-2 px-4" href="#!">
                    Read More <i class="fa fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </div>
</div>