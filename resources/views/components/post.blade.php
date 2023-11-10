<div  x-data="post">
    <h1>{{$post->title}}</h1>
    <x-image-viewer :img="$post->images"></x-image-viewer>
    <button>image</button>
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
