<div  x-data="post" class="items-center bg-white flex flex-col border-2 w-3/4 px-4 rounded hover:bg-gray-50 max-w-4xl" >
    <h1 class="text-4xl m-4">{{$post->title}}</h1>
    <div class="self-start text-lg">{{__('PH:')}} <a class="hover:underline" target="_blank" href="{{$post->info->ph_link ?? null}}">{{$post->info->ph_name ?? 'unknown'}}</a> </div>
    <div class="self-start text-lg mb-4">{{__('Model:')}} <a class="hover:underline" target="_blank" href="{{$post->info->model_link ?? null}}">{{$post->info->model_name ?? 'unknown'}}</a></div>
    <x-image-viewer :img="$post->images"></x-image-viewer>
    <a href="/test/{{$post->id}}" wire:navigate class="mt-4 text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-md px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">
        full resolution
    </a>

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
