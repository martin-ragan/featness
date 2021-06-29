<template>
    <div class="flex flex-row w-4/5 h-20 justify-center items-center mt-4">
        <div class="flex-1 bg-white h-full flex flex-row rounded-xl items-center px-4">
            <h1 class="text-2xl text-primary uppercase tracking-widest">{{ name }}</h1>
            <div class="flex flex-col w-full h-full justify-center items-end">
                <h1 class="text-primary text-xl text-right w-full">{{calories}} kCal</h1>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "MealsHolder",
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
}
</script>

<style scoped>

</style>
