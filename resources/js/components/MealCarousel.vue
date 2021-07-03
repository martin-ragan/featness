<template>
    <carousel-3d :disable3d="dTransform" :space="365" :controlsVisible="true" :controlsHeight="100" :controlsWidth="100" :width="mealHolderWidth">
        <slide :index="0">
            <form class="flex flex-col w-full h-full justify-evenly items-center" action="" >
                <h1 class="text-xl">Raňajky</h1>
                <meals-holder v-for="i in 4" :key="i" name="Vločky" :calories="400"></meals-holder>
                <button class="btn-brown text-tiny py-2 w-2/3 font-sans tracking-widest font-light">
                    Vygenerovať nový recept
                </button>
            </form>
        </slide>
        <slide :index="1">
            <h1 class="text-xl">Obed</h1>
            <form class="flex flex-col w-full justify-evenly items-center mt-8" action="" >
                <meals-holder v-for="i in 4" :key="i" name="Vločky" :calories="400"></meals-holder>
                <button class="btn-brown text-sm w-2/3 font-sans tracking-widest font-light">
                    Vygenerovať nový recept
                </button>
            </form>
        </slide>
        <slide :index="2">
            <h1 class="text-xl">Večera</h1>
            <form class="flex flex-col w-full h-full items-center mt-8" action="" >
                <meals-holder v-for="i in 4" :key="i" name="Vločky" :calories="400"></meals-holder>
                <button class="btn-brown text-sm py-2 w-2/3 font-sans tracking-widest font-light">
                    Vygenerovať nový recept
                </button>
            </form>
        </slide>
    </carousel-3d>
</template>

<script>
import { Carousel3d, Slide } from 'vue-carousel-3d';
import MealsHolder from "./MealsHolder";

export default {
    components: {
        Carousel3d,
        Slide,
        MealsHolder
    },
    data() {
        return {
            mealHolderWidth: window.outerWidth < 650 ? window.outerWidth * 0.9 : window.outerWidth * 0.4,
            dTransform: false
        }
    },
    created() {
        window.addEventListener("resize", this.myEventHandler);
    },
    destroyed() {
        window.removeEventListener("resize", this.myEventHandler);
    },
    methods: {
        myEventHandler(e) {
            let windowWidth =  e.srcElement.outerWidth;
            if (windowWidth <= 650) {
                this.dTransform = true;
                this.mealHolderWidth = windowWidth * 0.9;
            } else {
                this.dTransform = false;
                this.mealHolderWidth = windowWidth * 0.4;
            }
        }
    }
};
</script>

<style>
.carousel-3d-container {
    height: 100vh !important;
    width: 100% !important;
}
.carousel-3d-container span {
    color: #C18E60;
    font-size: 10rem;
}
.carousel-3d-slide {
    height: 70vh !important;
    padding: 2rem;
    border: none;
    display: flex;
    flex-direction: column;
    justify-items: center;
    align-items: center;
    border-radius: 2rem;
    background: rgba(40, 60, 80, 0.85);
}
.carousel-3d-slide.current {
    background: #283C50;
}

</style>
