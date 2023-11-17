<div>
    @persist('header')
    <x-header></x-header>
    @endpersist
<div class="mx-12">
    <div class="flex flex-col gap-4">
        @foreach($this->post->images as $img)
            <img src="{{env('YANDEX_URL').$img->img_path}}" alt="">
        @endforeach
    </div>

</div>
</div>
