<template>
    <carousel-3d :controlsVisible="true" :controlsHeight="100" :controlsWidth="100" :width="600" :height="600">
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
};
</script>

<style>
.carousel-3d-container {
}
.carousel-3d-container span {
    color: #C18E60;
    font-size: 10rem;
}
.carousel-3d-slide {
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
