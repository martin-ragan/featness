<template>
    <div class="h-full w-full bg-secondaryBg fixed top-0 left-0 z-50 flex flex-col items-center justify-center overflow-x-hidden">
        <div v-show="!loaded" class="loader"></div>
        <div v-show="loaded" class="w-full h-full flex flex-col justify-center items-center">
            <iframe :src="`https://player.vimeo.com/video/`+ visibleUrl + `?autoplay=1&amp;player_id=0&amp;app_id=58479`" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                    class="w-11/12 h-1/4"></iframe>
            <p class="text-white text-xl tracking-widest mt-5">{{ visibleText }}</p>
            <button v-on:click="callDestruction" class="btn-brown w-1/4 mt-12">Skryť ukážku</button>
        </div>
    </div>
</template>

<script>
export default {
    name: "VideoComponent",
    created() {
        setTimeout(() => this.loaded = true, 500);
    },
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
    data() {
        return {
            loaded: false
        }
    },
    methods: {
        callDestruction() {
            this.$emit('hideIframe')
        }
    },
}
</script>

<style scoped>

.loader {
    /*@apply border-8 border-white border-t-8 border-t-primary rounded-2xl;*/
    border: 8px solid #f3f3f3;
    border-radius: 50%;
    border-top: 8px solid #C18E60;
    width: 80px;
    height: 80px;
    -webkit-animation: spin 2s linear infinite; /* Safari */
    animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

</style>
