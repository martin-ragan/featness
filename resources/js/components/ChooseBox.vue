<template>
        <a :href="this.toRoute" class="card-dark w-1/3 h-2/3 justify-center opacity-90 cursor-pointer hover:opacity-100">
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
