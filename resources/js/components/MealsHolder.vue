<template>
    <div class="flex flex-row w-full h-20 justify-center items-center mt-4 cursor-pointer sm:w-4/5">
        <div class="w-full bg-white h-full flex flex-row rounded-xl items-center px-4" v-on:click="popupVisibility = true">
            <h1 class="flex-1 text-base text-primary uppercase tracking-widest sm:text-lg">{{ name }}</h1>
            <h1 class="text-base text-primary text-right hidden sm:text-lg sm:block">{{calories}} kCal</h1>
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
    props: {
        name: {
            type: String,
            default: "",
        },
        calories: {
            type: Number,
            default: 0
        },
    },
    data() {
        return {
        }
    },
}
</script>

<style scoped>

</style>
