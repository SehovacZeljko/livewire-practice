<div class="container-fluid py-5 bg-secondary">
    <div class="container py-5">
        <div class="row g-0 justify-content-center">
            <div class="col-lg-7 text-center">
                <div class="title mx-5 px-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="title-center">
                        <h5>Casting</h5>
                        <h1>Want to be a Model?</h1>
                    </div>
                </div>
                
                @if (session()->has('message'))
                    <div class="alert alert-primary rounded-pill mb-4">
                        {{ session('message') }}
                    </div>
                @endif

                <p class="fs-5 mb-5 wow fadeInUp" data-wow-delay="0.2s">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>

                <form wire:submit="subscribe" class="position-relative wow fadeInUp" data-wow-delay="0.3s">
                    <input 
                        wire:model="email"
                        class="form-control border-0 bg-dark rounded-pill w-100 py-4 ps-4 pe-5" 
                        type="email" 
                        placeholder="Your email"
                    >
                    <button 
                        type="submit" 
                        class="btn btn-primary py-3 px-4 position-absolute top-0 end-0 me-2" 
                        style="margin-top: 7px;"
                    >
                        <span wire:loading.remove>SignUp</span>
                        <span wire:loading>...</span>
                    </button>
                    
                    @error('email') 
                        <div class="text-primary mt-2 small">{{ $message }}</div> 
                    @enderror
                </form>
            </div>
        </div>
    </div>
</div>