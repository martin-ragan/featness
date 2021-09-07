<template>
    <div class="h-vh-large">
        <carousel-3d :space="365" :controlsVisible="true" :controlsHeight="100" :controlsWidth="100" :width="mealHolderWidth">
            <slide :index="0">
                <h1>Raňajky</h1>
                <form class="flex flex-col w-full h-full items-center sm:mt-8" v-on:submit.prevent="generateMeals(1)">
                    <meals-holder v-for="meal in breakfastData"
                                  :key="meal.id"
                                  :meal="meal"
                                  v-on:eatenChanged="changeMealStatus(breakfastData, meal.id,1)"
                                  v-on:click.native="showMeal(meal)">
                    </meals-holder>
                    <button type="submit" class="btn-brown text-sm py-2 font-sans mb-6 w-full tracking-widest font-light sm:mt-12 sm:w-2/3">
                        Vygenerovať nový recept
                    </button>
                </form>
            </slide>
            <slide :index="1">
                <h1>Olovrant</h1>
                <form class="flex flex-col w-full h-full items-center sm:mt-8" v-on:submit.prevent="generateMeals(2)">
                    <meals-holder v-for="meal in snackData"
                                  :key="meal.id"
                                  :meal="meal"
                                  v-on:eatenChanged="changeMealStatus(snackData, meal.id, 2)"
                                  v-on:click.native="showMeal(meal)">
                    </meals-holder>
                    <button type="submit" class="btn-brown text-sm py-2 w-2/3 font-sans tracking-widest font-light sm:mt-12">
                        Vygenerovať nový recept
                    </button>
                </form>
            </slide>
            <slide :index="2">
                <h1>Obed</h1>
                <form class="flex flex-col w-full h-full items-center sm:mt-8" v-on:submit.prevent="generateMeals(3)">
                    <meals-holder v-for="meal in lunchData"
                                  :key="meal.id"
                                  :meal="meal"
                                  v-on:eatenChanged="changeMealStatus(lunchData, meal.id, 3)"
                                  v-on:click.native="showMeal(meal)">
                    </meals-holder>
                    <button type="submit" class="btn-brown text-sm py-2 w-2/3 font-sans tracking-widest font-light sm:mt-12">
                        Vygenerovať nový recept
                    </button>
                </form>
            </slide>
            <slide :index="3">
                <h1>Večera</h1>
                <form class="flex flex-col w-full h-full items-center sm:mt-8" v-on:submit.prevent="generateMeals(4)">
                    <meals-holder v-for="meal in dinnerData"
                                  :key="meal.id"
                                  :meal="meal"
                                  v-on:eatenChanged="changeMealStatus(dinnerData, meal.id, 4)"
                                  v-on:click.native="showMeal(meal)"
                    >
                    </meals-holder>
                    <button type="submit" class="btn-brown text-sm py-2 w-2/3 font-sans tracking-widest font-light sm:mt-12">
                        Vygenerovať nový recept
                    </button>
                </form>
            </slide>
        </carousel-3d>

        <transition name="fade">
            <meal-popup v-if="popupVisibility"
                        :meal="displayedMeal"
                        v-on:hideIframe="hideFrame"
            >
            </meal-popup>
        </transition>
    </div>
</template>

<script>
import { Carousel3d, Slide } from 'vue-carousel-3d';
import MealsHolder from "./MealsHolder";
import MealPopup from "./MealPopup";

export default {
    components: {
        Carousel3d,
        Slide,
        MealsHolder,
        MealPopup
    },
    props: ['breakfast', 'lunch', 'snack', 'dinner'],
    data() {
        return {
            breakfastData: this.breakfast,
            lunchData: this.lunch,
            snackData: this.snack,
            dinnerData: this.dinner,
            mealHolderWidth: window.outerWidth < 650 ? window.outerWidth * 0.9 : window.outerWidth * 0.4,
            popupVisibility: false,
            displayedMeal: null
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
            if (windowWidth <= 1250) {
                if (windowWidth <= 900) {
                    this.mealHolderWidth = windowWidth * 0.8;
                } else{
                    this.mealHolderWidth = windowWidth * 0.6;
                }
            } else {
                this.mealHolderWidth = windowWidth * 0.4;
            }
        },
        showMeal(meal) {
            this.displayedMeal = meal;
            this.popupVisibility = true;
        },
        generateMeals(foodType){
            axios.post('/generateNewRecipe/?foodType=' + foodType).then(promise => {
                switch (foodType) {
                    case 1: {this.breakfastData = promise.data}break;
                    case 2: {this.snackData = promise.data}break;
                    case 3: {this.lunchData = promise.data}break;
                    case 4: {this.dinnerData = promise.data}break;
                    default: window.alert("Something is wrong");
                }
          });
        },
        hideFrame() {
            this.popupVisibility = false;
            location.reload();
        }
    }
};
</script>

<style>
.carousel-3d-container {
    /*padding-top: 2rem;*/
    height: 90% !important;
    width: 100% !important;
}
.carousel-3d-container span {
    color: #C18E60;
    font-size: 10rem;
    z-index: 20;
}
.carousel-3d-slide {
    height: 72vh !important;
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
