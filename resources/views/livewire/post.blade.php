<div  x-data="post" class="items-center bg-white flex flex-col border-2 w-3/4 px-4 rounded">
    <h1>{{$post->title}}</h1>
    <div>{{__('PH:')}} <a target="_blank" href="{{$post->info->ph_link ?? null}}">{{$post->info->ph_name ?? 'unknown'}}</a> </div>
    <div>{{__('Model:')}} <a target="_blank" href="{{$post->info->model_link ?? null}}">{{$post->info->model_name ?? 'unknown'}}</a></div>
    <x-image-viewer :img="$post->images"></x-image-viewer>
    <a href="/test/{{$post->id}}" wire:navigate>123</a>
</div>

<script>
    window.addEventListener('alpine:init',()=>{
        Alpine.data('post',()=>({
            check(){
                console.log('123')
            }
        }))
    })
</script>
