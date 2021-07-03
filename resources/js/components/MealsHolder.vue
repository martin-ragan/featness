<template>
    <div class="flex flex-row w-4/5 h-12 justify-center items-center">
        <div class="flex-1 bg-white h-full flex flex-row rounded-lg items-center px-4">
            <h1 class="text-lg text-primary uppercase tracking-widest">{{ name }}</h1>
            <div class="flex flex-col w-full justify-center items-end">
                <h1 class="text-primary text-tiny font-bold text-right w-full">{{calories}} kCal</h1>
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
