<div x-data="header" class="h-[150px] items-center flex w-full bg-space shadow-xl px-10 py-4 mb-4">
    <x-logo/>
    <div  class="cursor-pointer hover:bg-gray-200 h-min relative ml-auto" :class="auth ? 'bg-gray-200' : ''">
        <a class="p-2 block" @click="auth=true">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
            </svg>
        </a>
        <div @click.outside="auth=false" x-show="auth">
            <x-login></x-login>
        </div>
    </div>
</div>

<script>
    window.addEventListener('alpine:init',()=>{
        Alpine.data('header',()=>({
            init(){
                this.$store.user.user=@js(\Illuminate\Support\Facades\Auth::check() ? \Illuminate\Support\Facades\Auth::user() : false)
            },
            auth: false,
        }))
    })
</script>
