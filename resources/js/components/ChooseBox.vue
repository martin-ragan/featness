<template>
        <a :href="this.toRoute" class="card-dark w-full justify-center cursor-pointer hover:bg-secondary h-1/4 xl:h-2/3 xl:w-1/2">
            <h1 class="text-white text-4xl tracking-widest font-light">{{ this.boxName }}</h1>
        </a>
</template>

<script>
export default {
    props: {
        boxName:{
            type: String,
            default: ""
        },
        toRoute: {
            type: String,
            default: "/"
        },
    },
}
</script>

<style scoped>

</style>
