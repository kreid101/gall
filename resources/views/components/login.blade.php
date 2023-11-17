<div x-data="login" class="absolute bg-white w-[450px] h-[500px] overflow-hidden right-0 " >
    <div class="flex flex-col" x-show="$store.user.user">
        <div class="flex">
            <div>Дрбро пожаловать,</div>
            <div x-text="$store.user.user ? $store.user.user.name : ''"></div>
            <span>!</span>
        </div>
        <button class="border-2">Личный кабинет</button>
        <button class="border-2" @click="logout">logout</button>
    </div>
    <div x-show="!$store.user.user">
        <div class="flex justify-self-center mx-auto justify-center mt-4" >
            <button :class="cur_page == 'login' ? 'bg-gray-200' : ''" class="border-2 rounded p-2 " @click="$refs.log.scroll({left: 0,behavior: 'smooth',});cur_page='login'">Вход</button>
            <button :class="cur_page == 'register' ? 'bg-gray-200' : ''" class="border-2 rounded p-2" @click="$refs.log.scroll({left: $refs.log.clientWidth,behavior: 'smooth',});cur_page='register'">Регистрация</button>
        </div>
        <div class="absolute overflow-hidden no-scrollbar scrollbar-hide w-full" x-ref="log">
            <div class="grid grid-flow-col auto-cols-[100%]">
                <div class="mt-4 ">
                    <form class="flex flex-col gap-4 items-center"  @submit.prevent="log">
                        <input type="email" required class="border-2  w-2/3 rounded h-10 p-2" type="text" placeholder="Email" x-model="log_email">
                        <input type="password" required class="border-2  w-2/3 rounded h-10 p-2" type="text" placeholder="Password" x-model="log_pass">
                        <button class="text-white bg-black rounded py-2 px-6 hover:bg-white hover:text-black hover:border-2 border-black">sign in</button>
                    </form>
                </div>
                <div class="mt-4 ">
                    <form class="flex flex-col gap-4 items-center" @submit.prevent="reg">
                        <input required class="border-2  w-2/3 rounded h-10 p-2" type="text" placeholder="nickname" x-model="reg_name">
                        <input required class="border-2  w-2/3 rounded h-10 p-2" type="text" placeholder="email" x-model="reg_email">
                        <template x-if="reg_error.password !== undefined ">
                            <span x-text="reg_error.password"></span>
                        </template>
                        <input required class="border-2  w-2/3 rounded h-10 p-2" type="password" placeholder="Password" x-model="reg_password">
                        <input required class="border-2  w-2/3 rounded h-10 p-2" type="password" placeholder="Repeat Password" x-model="reg_password_confirmation">
                        <button class="text-white bg-black rounded py-2 px-6 hover:bg-white hover:text-black hover:border-2 border-black">sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('alpine:init',()=>{
            Alpine.data('login',()=>({
                cur_page:'login',
                reg_name:'',
                reg_email:'',
                reg_password:'',
                reg_password_confirmation:'',
                log_email:'',
                log_pass:'',
                reg_error:{},
                log_erroe:{},
                reg(){
                    axios.post('/register',{'name':this.reg_name,'email':this.reg_email,'password':this.reg_password,'password_confirmation':this.reg_password_confirmation}).then((res)=>{
                        console.log(res)
                    }).catch(err=>{
                        console.log(err)

                        this.reg_error=err.response.data.errors
                        console.log(this.reg_error)
                    })
                },
                log(){
                    axios.post('/login',{'email':this.log_email,'password':this.log_pass}).then((res)=>{
                        this.$store.user.user=res.data.user;
                    })
                },
                logout(){
                    axios.post('/logout').then((res)=>{
                        this.$store.user={}
                    })
                }
            }))
        })

    </script>
</div>
