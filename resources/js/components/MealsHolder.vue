<template>
    <div class="flex flex-row w-full h-20 justify-center items-center mt-4 cursor-pointer sm:w-4/5" v-bind:class="[meal.isAte ? '' : 'not-eaten']">
        <div class="w-full bg-white h-full flex flex-row rounded-xl items-center px-4">
            <h1 class="flex-1 text-base overflow-ellipsis whitespace-nowrap overflow-hidden text-primary uppercase tracking-widest">{{ meal.name }}</h1>
            <h1 class="text-base text-primary text-right hidden sm:text-lg sm:block">{{meal.kcal}} kCal</h1>
        </div>
    </div>
</template>

<script>
import MealPopup from "./MealPopup";

export default {
    name: "MealsHolder",
    components: {
        MealPopup,
    },
    props: ['meal'],
    data() {
        return {
            mealWindowOpener: false
        }
    },
}
</script>

<style scoped>
.not-eaten {
    opacity: 0.8;
}
</style>
