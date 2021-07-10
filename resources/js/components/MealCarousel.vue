<template>
    <div class="h-vh-large">
        <carousel-3d :disable3d="dTransform" :space="365" :controlsVisible="true" :controlsHeight="100" :controlsWidth="100" :width="mealHolderWidth">
            <slide :index="0">
                <h1>Raňajky</h1>
                <form class="flex flex-col w-full h-full items-center mt-8" v-on:submit.prevent="generateMeals(1)">
                    <meals-holder v-for="meal in breakfastData" :key="meal.id"
                                  :name="meal.name"
                                  :calories="meal.kcal"
                                  v-on:click.native="showMeal(meal.name, meal.kcal, meal.proteins, meal.fats, meal.carbohydrates, meal.ingredients, meal.recipe)">
                    </meals-holder>
                    <button type="submit" class="btn-brown text-sm py-2 w-2/3 font-sans tracking-widest font-light">
                        Vygenerovať nový recept
                    </button>
                </form>
            </slide>
            <slide :index="1">
                <h1>Olovrant</h1>
                <form class="flex flex-col w-full h-full items-center mt-8" v-on:submit.prevent="generateMeals(2)">
                    <meals-holder v-for="meal in snackData" :key="meal.id"
                                  :name="meal.name"
                                  :calories="meal.kcal"
                                  v-on:click.native="showMeal(meal.name, meal.kcal, meal.proteins, meal.fats, meal.carbohydrates, meal.ingredients, meal.recipe)">
                    </meals-holder>
                    <button type="submit" class="btn-brown text-sm py-2 w-2/3 font-sans tracking-widest font-light">
                        Vygenerovať nový recept
                    </button>
                </form>
            </slide>
            <slide :index="2">
                <h1>Obed</h1>
                <form class="flex flex-col w-full h-full items-center mt-8" v-on:submit.prevent="generateMeals(3)">
                    <meals-holder v-for="meal in lunchData" :key="meal.id"
                                  :name="meal.name"
                                  :calories="meal.kcal"
                                  v-on:click.native="showMeal(meal.name, meal.kcal, meal.proteins, meal.fats, meal.carbohydrates, meal.ingredients, meal.recipe)"></meals-holder>
                    <button type="submit" class="btn-brown text-sm py-2 w-2/3 font-sans tracking-widest font-light">
                        Vygenerovať nový recept
                    </button>
                </form>
            </slide>
            <slide :index="3">
                <h1>Večera</h1>
                <form class="flex flex-col w-full h-full items-center mt-8" v-on:submit.prevent="generateMeals(4)">
                    <meals-holder v-for="meal in dinnerData" :key="meal.id"
                                  :name="meal.name"
                                  :calories="meal.kcal"
                                  v-on:click.native="showMeal(meal.name, meal.kcal, meal.proteins, meal.fats, meal.carbohydrates, meal.ingredients, meal.recipe)">

                    </meals-holder>
                    <button type="submit" class="btn-brown text-sm py-2 w-2/3 font-sans tracking-widest font-light">
                        Vygenerovať nový recept
                    </button>
                </form>
            </slide>
        </carousel-3d>
        <transition name="fade">
            <meal-popup v-if="popupVisibility"
                        :name="mealName"
                        :k-cal="mealKcal"
                        :proteins="mealProteins"
                        :fats="mealFats"
                        :carbohydrates="mealCarbohydrates"
                        :ingredients="mealIngredients"
                        :recipe="mealRecipe"
                        v-on:hideIframe="popupVisibility = false"

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
            dTransform: false,
            popupVisibility: false,
            mealName: "",
            mealKcal: 0,
            mealProteins: 0,
            mealFats: 0,
            mealCarbohydrates: 0,
            mealIngredients: [],
            mealRecipe: [],
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
        },
        showMeal(mealName, mealKcal, mealProteins, mealFats, mealCarbohydrates, mealIngredients, mealRecipe) {
            this.mealName = mealName;
            this.mealKcal = mealKcal;
            this.mealProteins = mealProteins;
            this.mealFats = mealFats;
            this.mealCarbohydrates = mealCarbohydrates;
            this.mealIngredients = mealIngredients;
            this.mealRecipe = mealRecipe
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
    }
};
</script>

<style>
.carousel-3d-container {
    padding-top: 2rem;
    height: 100% !important;
    width: 100% !important;
}
.carousel-3d-container span {
    color: #C18E60;
    font-size: 10rem;
    z-index: 20;
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
