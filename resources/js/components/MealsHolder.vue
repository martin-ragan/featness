<template>
    <div class="flex flex-row w-4/5 h-20 justify-center items-center mt-4 cursor-pointer">
        <div class="flex-1 bg-white h-full flex flex-row rounded-xl items-center px-4" v-on:click="popupVisibility = true">
            <h1 class="text-lg flex-1 text-primary uppercase tracking-widest">{{ name }}</h1>
            <div class="flex flex-col h-full justify-center items-end">
                <h1 class="text-primary text-xl text-right w-full">{{calories}} kCal</h1>
            </div>
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
