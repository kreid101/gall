<div x-data="{
  step:20,
   stpoint:0,
   transx:0,
   clickp:0,
   indw:24,
   hamer:null,
   imgl:@js(count($img)),
   index:0,
   basew:0,
   showbtn:false,
   prev_index:-1,
   current_index:0,
   next_index:1,
   wipegap:100,
    init(){
        this.basew=$refs.img_slider.getBoundingClientRect().width+16
    },
    images: [{'img_preview': '/spinner.gif'}],
    tonext(){

       this.transx=-this.basew * this.next_index
       setTimeout(()=>{  $refs.img_slider.style.transition=null  },500)
       this.prev_index+=1
       this.current_index+=1
       this.next_index+=1
       this.indw-=24

    },
    toprev(){
       this.transx=-this.basew * this.prev_index
       setTimeout(()=>{$refs.img_slider.style.transition=null  },500)
       this.prev_index-=1
       this.current_index-=1
       this.next_index-=1
       this.indw+=24
    },
    tocur()
    {
       this.transx=-this.basew * this.current_index
       setTimeout(()=>{  $refs.img_slider.style.transition=null  },500)
    },
    spec(event){

       this.transx=event.x-this.stpoint

    },
    tdrag(event)
    {
        this.transx=event.touches[0].clientX-this.stpoint
    },
    func:null,
    stdrag:null,
    dragging(event,elem){
       this.stpoint=event.x-this.transx
       this.clickp=event.x
       this.func=this.spec.bind(this)
       this.stdrag=this.stopDrag.bind(this)
       window.addEventListener('mousemove',this.func)
       window.addEventListener('mouseup',this.stdrag)
    },
    stopDrag(event,elem){
        window.removeEventListener('mousemove',this.func)
        window.removeEventListener('mouseup',this.stdrag)
        $refs.img_slider.style.transition='all 0.5s'
        this.clickp - event.x <= -100 && this.prev_index > -1 ? this.toprev() :  this.clickp - event.x >= 100 && this.next_index < this.imgl ? this.tonext() : this.tocur()
    },
    tstop(event){
        window.removeEventListener('touchmove',this.func)
        window.removeEventListener('touchend',this.stdrag)
        $refs.img_slider.style.transition='all 0.5s'
        this.clickp - event.changedTouches[0].clientX <= -100 && this.prev_index > -1 ? this.toprev() :  this.clickp - event.changedTouches[0].clientX >= 100 && this.next_index < this.imgl ? this.tonext() : this.tocur()
    },
    tch(event)
    {
       this.stpoint=event.touches[0].clientX-this.transx
       this.clickp=event.touches[0].clientX
       this.func=this.tdrag.bind(this)
       this.stdrag=this.tstop.bind(this)
       window.addEventListener('touchmove',this.func)
       window.addEventListener('touchend',this.stdrag)

    }

}" class="relative overflow-hidden w-full xl:min-h-[350px]" x-intersect.once="$wire.setImages()">

    <div x-ref="img_slider" class="flex w-full group slider gap-4"
         @mousedown="dragging(event)"
         @mouseup="tocur()"
         @touchstart="tch(event)"
          :style="{transform: 'translateX(' + transx + 'px)'}">
        @foreach($this->images as $key=>$img)
            <img draggable="false" src="{{env('YANDEX_URL').$img->img_preview}}" id="image-{{$key}}" alt="">
        @endforeach

    </div>
    <div class="flex justify-center items-center">
        <div class="flex flex-row w-[72px] overflow-hidden" x-ref="indicator" >
            <div class="flex transition-all  items-center" :style="{transform: 'translatex(' + indw + 'px)'}">
        @foreach($this->images as $key=>$img)
            <span :class="$el.dataset.index == current_index ? 'ind-active' : 'ind '"  data-index="{{$key}}" class="shrink-0">
            </span>
        @endforeach
        </div>
        </div>
    </div>

</div>

