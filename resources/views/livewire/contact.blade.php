<div>
    <div class="page-header pb-5">
        <div class="container text-center py-5">
            <h1 class="display-4 text-uppercase mb-3 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="/" wire:navigate>Home</a></li>
                    <li class="breadcrumb-item text-primary active">Contact</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="title wow fadeInUp" data-wow-delay="0.1s">
                        <div class="title-left">
                            <h5>Contact</h5>
                            <h1>Please Contact Us</h1>
                        </div>
                    </div>
                    
                    @if (session('status'))
                        <div class="alert alert-success mt-3">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-dark mb-0 wow fadeInUp" data-wow-delay="0.3s">
                        </table>
                </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form wire:submit="save">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" wire:model="name" class="form-control bg-secondary border-0" id="name">
                                    <label for="name">Your Name</label>
                                    @error('name') <small class="text-primary">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" wire:model="email" class="form-control bg-secondary border-0" id="email">
                                    <label for="email">Your Email</label>
                                    @error('email') <small class="text-primary">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" wire:model="subject" class="form-control bg-secondary border-0" id="subject">
                                    <label for="subject">Subject</label>
                                    @error('subject') <small class="text-primary">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea wire:model="message" class="form-control bg-secondary border-0" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                    @error('message') <small class="text-primary">{{ $message }}</small> @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-primary border-2 w-100 py-3" type="submit">
                                    <span wire:loading.remove>Send Message</span>
                                    <span wire:loading>Sending...</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>