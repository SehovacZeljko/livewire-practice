<div>
    <div class="relative w-full pb-20 bg-gray-900">
        <div class="container mx-auto px-4 text-center py-20">
            <h1 class="text-5xl md:text-6xl font-bold uppercase text-white mb-6 animated slideInDown">
                Our Models
            </h1>
            <nav class="animated slideInDown">
                <ol class="flex justify-center uppercase space-x-2 text-sm tracking-widest">
                    <li><a class="text-white hover:text-primary transition" href="/" wire:navigate>Home</a></li>
                    <li class="text-gray-500">/</li>
                    <li class="text-primary">Our Models</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="w-full py-20 bg-[#1a1a1a]">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary uppercase tracking-[0.3em] font-semibold mb-2">Models</h5>
                    <div class="relative inline-block">
                        <h1 class="text-4xl md:text-5xl font-bold text-white uppercase px-10">Meet Our Models</h1>
                        <span class="absolute top-1/2 left-0 w-8 h-[2px] bg-primary"></span>
                        <span class="absolute top-1/2 right-0 w-8 h-[2px] bg-primary"></span>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($models as $model)
                    <x-model-card 
                        :name="$model['name']"
                        :image="$model['img']"
                        :age="$model['age']"
                        :height="$model['height']"
                        :weight="$model['weight']"
                        :bust="$model['bust']"
                        :waist="$model['waist']"
                        :hips="$model['hips']"
                        delay="{{ ($loop->index % 4) * 0.2 + 0.1 }}s"
                    />
                @endforeach
            </div>
        </div>
    </div>
</div>