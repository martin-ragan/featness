<template>
        <a :href="this.toRoute" class="card-dark w-80 h-80 justify-center cursor-pointer hover:bg-secondary">
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
