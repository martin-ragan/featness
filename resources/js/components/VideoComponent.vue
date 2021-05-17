<template>
    <div class="h-screen w-screen bg-secondary absolute top-0 left-0 z-50 flex flex-col items-center justify-center">
        <iframe :src="`https://player.vimeo.com/video/`+ visibleUrl + `?autoplay=1&amp;player_id=0&amp;app_id=58479`" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                class="w-2/3 h-1/2"></iframe>
                    <p class="text-white text-xl tracking-widest mt-5">{{ visibleText }}</p>
        <button v-on:click="callDestruction" class="btn-brown w-1/4 mt-12">Skryť ukážku</button>
    </div>
</template>

<script>
export default {
    name: "VideoComponent",
    props: {
        visibleUrl: {
            type: String,
            default: ""
        },
        visibleText: {
            type: String,
            default: ""
        },
    },
    methods: {
        callDestruction() {
            this.$emit('hideIframe')
        }
    },
}
</script>

<style scoped>

</style>
