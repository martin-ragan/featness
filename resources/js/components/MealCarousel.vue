<template>
    <carousel-3d :disable3d="dTransform" :space="365" :controlsVisible="true" :controlsHeight="100" :controlsWidth="100" :width="mealHolderWidth">
        <slide :index="0">
            <h1>Raňajky</h1>
            <form class="flex flex-col w-full h-full items-center mt-8" action="" >
                <meals-holder v-for="meal in breakfast" :key="meal.id" :name="meal.name" :calories="meal.kcal"></meals-holder>
                <button class="btn-brown text-sm py-2 w-2/3 font-sans tracking-widest font-light">
                    Vygenerovať nový recept
                </button>
            </form>
        </slide>
        <slide :index="1">
            <h1>Olovrant</h1>
            <form class="flex flex-col w-full h-full items-center mt-8" action="" >
                <meals-holder v-for="meal in snack" :key="meal.id" :name="meal.name" :calories="meal.kcal"></meals-holder>
                <button class="btn-brown text-sm py-2 w-2/3 font-sans tracking-widest font-light">
                    Vygenerovať nový recept
                </button>
            </form>
        </slide>
        <slide :index="2">
            <h1>Obed</h1>
            <form class="flex flex-col w-full h-full items-center mt-8" action="" >
                <meals-holder v-for="meal in lunch" :key="meal.id" :name="meal.name" :calories="meal.kcal"></meals-holder>
                <button class="btn-brown text-sm py-2 w-2/3 font-sans tracking-widest font-light">
                    Vygenerovať nový recept
                </button>
            </form>
        </slide>
        <slide :index="3">
            <h1>Večera</h1>
            <form class="flex flex-col w-full h-full items-center mt-8" action="" >
                <meals-holder v-for="meal in dinner" :key="meal.id" :name="meal.name" :calories="meal.kcal"></meals-holder>
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
    props: ['breakfast', 'lunch', 'snack', 'dinner'],
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
