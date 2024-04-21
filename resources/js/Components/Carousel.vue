<template>
  <div class="carousel">
    <button v-show="props.options.arrows"
      class="carousel__controls carousel__controls--prev"
      @click="prevSlide"
    >
      <svg fill="rgb(39,39,58)" width="40" height="40" viewBox="-1 -2 18 18" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M 10.71464,3.04715 6.76179,7 l 3.95285,3.95285 q 0.14144,0.14144 0.14144,0.33499 0,0.19355 -0.14144,0.33499 L 9.47891,12.85856 Q 9.33747,13 9.14392,13 8.95037,13 8.80893,12.85856 L 3.28536,7.33499 Q 3.14392,7.19355 3.14392,7 q 0,-0.19355 0.14144,-0.33499 L 8.80893,1.14144 Q 8.95037,1 9.14392,1 9.33747,1 9.47891,1.14144 l 1.23573,1.23573 q 0.14144,0.14144 0.14144,0.33499 0,0.19355 -0.14144,0.33499 z"/>
      </svg>
    </button>
    <div
      :class="['carousel__list', {dragging: isDragging}]"
      :style="{gridAutoColumns: countSlides}"
      ref="carousel"
      @scroll="infiniteScroll"
      @mousedown="dragStart"
      @touchstart="dragStart"
      @mouseup="dragStop"
      @touchend="dragStop"
      >
      <CarouselItem
        v-for="(slide, index) in slides"
        :slide=slide
        :key="index"
      />
    </div>
    <button
      class="carousel__controls carousel__controls--next"
      @click="nextSlide"
    >
      <svg fill="rgb(39,39,58)" transform="rotate(180)" width="40" height="40" viewBox="-1 -2 18 18" role="img" focusable="false" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M 10.71464,3.04715 6.76179,7 l 3.95285,3.95285 q 0.14144,0.14144 0.14144,0.33499 0,0.19355 -0.14144,0.33499 L 9.47891,12.85856 Q 9.33747,13 9.14392,13 8.95037,13 8.80893,12.85856 L 3.28536,7.33499 Q 3.14392,7.19355 3.14392,7 q 0,-0.19355 0.14144,-0.33499 L 8.80893,1.14144 Q 8.95037,1 9.14392,1 9.33747,1 9.47891,1.14144 l 1.23573,1.23573 q 0.14144,0.14144 0.14144,0.33499 0,0.19355 -0.14144,0.33499 z"/>
      </svg>
    </button>
  </div>
  <ul class="carousel__dots">
    <li
      v-for="(dot, index) in countDots"
      :key="index"
      :class="['carousel__dots-dot', { 'carousel__dots-dot--active': (index * props.options.slidesToScroll) === currentSlide }]"
      @click="goToSlide(index)"
      >
    </li>
  </ul>
  <!-- <div class="carousel" ref="carouselWidth">
    <button class="carousel__arrows carousel__arrows--prev" @click="prevSlide" />
    <div class="carousel__list">
      <div class="carousel__track"
        :style="{ width: carouselWidth + 'px', transform: slidesTranslate }">
        <CarouselItem v-for="(slide, index) in slides" :slide=slide :key="index"
          :style="{ width: slideWidth + 'px' }"/>
      </div>
    </div>
    <button class="carousel__arrows carousel__arrows--next" @click="nextSlide" />
    <ul class="carousel__dots">
      <li
        v-for="(slide,index) in slides"
        :key="index"
        class="carousel__dots-dot"
        @click="goToIndex(index)"
      >
      </li>
    </ul>
  </div> -->
</template>

<script setup>
import { ref, onMounted, computed, toRefs, watch, watchEffect} from 'vue';
import CarouselItem from '@/Components/CarouselItem.vue';

const props = defineProps({
  slides: {
    type: Array,
    default: () => []
  },
  options: {
    type: Object,
    default: {
      slidesToShow: 3,
      slidesToScroll: 2,
      infinite: true,
      arrows: true,
      dots: true,
      responsive: [
        {
          breakpoint: '1024',
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true,
            arrows: false,
            dots: true
          },
        },
        {
          breakpoint: '600',
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            arrows: false,
            dots: true
          },
        },
        {
          breakpoint: '480',
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            arrows: false,
            dots: true
          },
        }
      ]
    }
  }
});

let isDragging = ref(false);
const startX = ref(0);
const startScrollLeft = ref(0);
const carousel = ref(null);
let slideWidth = ref(0);
const currentSlide = ref(0);

const countSlides = computed(() => {
  return `calc((100% / ${props.options.slidesToShow}) - 12px)`;
});

const countDots = computed(() => {
  return Math.ceil(props.slides.length / props.options.slidesToShow)+1;
});

const changeOptions = watchEffect(() => {
  window.addEventListener('resize', () => {
    let pageWidth = document.documentElement.scrollWidth;
    switch(pageWidth) {
      case 1024:
        Object.assign(props.options, props.options.responsive[0].settings);
        break;
      case 600:
        Object.assign(props.options, props.options.responsive[1].settings);
        break;
      case 480:
        Object.assign(props.options, props.options.responsive[2].settings);
        break;
    }
  })
});

changeOptions();

onMounted(() => {
  slideWidth = carousel.value.children[0].offsetWidth;

  const slideClone = [...carousel.value.children];

  slideClone.slice(-props.options.slidesToShow).reverse().forEach(slide => {
    carousel.value.insertAdjacentHTML("afterbegin", slide.outerHTML);
  });

  slideClone.slice(0, props.options.slidesToShow).forEach(slide => {
    carousel.value.insertAdjacentHTML("beforeend", slide.outerHTML);
  });
});

const infiniteScroll = () => {
  if (carousel.value.scrollLeft === 0) {
    carousel.value.classList.add('no-transition');
    carousel.value.scrollLeft = carousel.value.scrollWidth - ( 2 * carousel.value.offsetWidth);
    carousel.value.classList.remove('no-transition');
  }
  else if (Math.ceil(carousel.value.scrollLeft) === carousel.value.scrollWidth - carousel.value.offsetWidth) {
    carousel.value.classList.add('no-transition');
    carousel.value.scrollLeft = carousel.value.offsetWidth;
    carousel.value.classList.remove('no-transition');
  }
};

const prevSlide = () => {
  if (currentSlide.value === 0) {
    currentSlide.value = props.slides.length - 1;
  } else {
    currentSlide.value -= props.options.slidesToScroll;
  }
  carousel.value.scrollLeft += -slideWidth * props.options.slidesToScroll;
};

const nextSlide = () => {
  if (currentSlide.value === props.slides.length - 1) {
    currentSlide.value = 0;
  } else {
    currentSlide.value += props.options.slidesToScroll;
  }
  carousel.value.scrollLeft += slideWidth * props.options.slidesToScroll;
};

const goToSlide = (index) => {
  currentSlide.value = index * props.options.slidesToScroll;
  carousel.value.scrollLeft = slideWidth * (index+1) * props.options.slidesToScroll;
};

const dragStart = (e) => {
  carousel.value.addEventListener('mousemove', dragging);
  carousel.value.addEventListener('touchmove', dragging);
  isDragging.value = true;
  startX.value = e.pageX || e.touches[0].pageX;
  startScrollLeft.value = carousel.value.scrollLeft;
};

const dragging = (e) => {
  if(!isDragging) return;
  let positionDiff = (e.pageX || e.touches[0].pageX) - startX.value;
  carousel.value.scrollLeft = startScrollLeft.value - positionDiff;
};

const dragStop = () => {
  carousel.value.removeEventListener('mousemove', dragging);
  carousel.value.removeEventListener('touchmove', dragging);
  isDragging.value = false;
}
</script>

<style scoped>
.carousel {
  @apply flex items-center justify-center gap-x-4;
}
.carousel__list {
  @apply grid grid-flow-col overflow-x-hidden gap-x-4 snap-x snap-mandatory select-none cursor-grab scroll-smooth;
}
.dragging {
  @apply cursor-grabbing snap-none;
}
.no-transition {
  @apply scroll-auto;
}
.carousel__controls {
  @apply min-w-10 min-h-10 bg-red rounded-full cursor-pointer;
}
.carousel__dots {
  @apply flex mt-4 justify-center gap-x-4;
}
.carousel__dots-dot {
  @apply bg-red rounded-full w-3 h-3 cursor-pointer opacity-50 hover:opacity-100 focus:opacity-100;
}
.carousel__dots-dot--active {
  @apply opacity-100
}
/* .carousel {
  @apply flex justify-between gap-x-4 mx-auto overflow-hidden relative items-center select-none touch-pan-y;
} */
/* .carousel {
  @apply gap-x-4 overflow-hidden relative select-none touch-pan-y;
}
.carousel__list {
  @apply relative block overflow-hidden m-0 p-0 focus:outline-none translate-3d-0;
} */
/* .carousel__track {
  @apply flex relative top-0 left-0 translate-3d-0 transition-transform duration-[0.6] ease-out;
} */
/* .carousel__arrows {
  @apply min-w-10 h-10 leading-[0] mx-auto bg-red opacity-55 rounded-full cursor-pointer text-transparent border-none outline-none hover:text-transparent hover:outline-none hover:opacity-100 focus:text-transparent focus:outline-none focus:opacity-100;
} */
/* .carousel__arrows {
  @apply min-w-10 h-10 leading-[0] absolute top-1/2 p-0 translate-x-0 -translate-y-1/2 bg-red opacity-55 rounded-full cursor-pointer text-transparent border-none outline-none hover:text-transparent hover:outline-none hover:opacity-100 focus:text-transparent focus:outline-none focus:opacity-100;
}
.carousel__arrows--prev {
  @apply before:content-arrowLeft z-10;
}
.carousel__arrows--next {
  @apply before:content-arrowRight -right-0;
}
.carousel__dots {
  @apply flex mt-4 justify-center gap-x-4;
}
.carousel__dots-dot {
  @apply bg-red rounded-full w-3 h-3 cursor-pointer opacity-50 hover:opacity-100 focus:opacity-100;
}
.carousel__dots-dot--active {
  @apply opacity-100
} */
</style>
