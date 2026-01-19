<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ $delay }}">
    <div class="team-item">
        <div class="team-body">
            <div class="team-before">
                <span>Age</span>
                <span>Height</span>
                <span>Weight</span>
                <span>Bust</span>
                <span>Waist</span>
                <span>Hips</span>
            </div>
            <img class="img-fluid" src="{{ asset($image) }}" alt="{{ $name }}">
            <div class="team-after">
                <span>{{ $age }}</span>
                <span>{{ $height }}</span>
                <span>{{ $weight }}</span>
                <span>{{ $bust }}</span>
                <span>{{ $waist }}</span>
                <span>{{ $hips }}</span>
            </div>
        </div>
        <a class="team-name" href="#">
            <h5 class="text-uppercase mb-0">{{ $name }}</h5>
        </a>
    </div>
</div>