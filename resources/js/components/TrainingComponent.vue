<template>
    <div class="flex flex-row w-full h-full mb-20 justify-center items-center">
        <div v-show="showVideo"
             class="h-screen w-screen bg-secondary absolute top-0 left-0 z-50 flex flex-col items-center justify-center">
            <iframe :src="`https://player.vimeo.com/video/${exercise.url}?autoplay=1&amp;player_id=0&amp;app_id=58479`" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
                    class="w-2/3 h-1/2"></iframe>
            <p class="text-white text-xl tracking-widest mt-5">{{ exercise.name }}</p>
            <button v-on:click="showVideo = false" class="btn-brown w-1/4 mt-12">Skryť ukážku</button>
        </div>
        <div class="training-holder">
            <div class="flex flex-col w-full" id="warm-up">
                <div class="flex flex-row w-full justify-between">
                    <div class="t-heading mb-5">
                        <h1>Rozcvička</h1>
                        <img class="w-20 h-20" src="/images/dark-arrow.PNG" alt="">
                    </div>
                    <img class="w-20 h-20" src="/images/hint-icon.png" alt="">
                </div>
                <exercise class="cursor-pointer" v-on:click.native="showVideo = true" exercise-name="Drepy" v-bind:reps=10></exercise>
                <exercise exercise-name="Drepy" v-bind:reps=10></exercise>
            </div>
            <div class="flex flex-col w-full mt-5" id="training">
                <div class="t-heading">
                    <h1>tréning</h1>
                    <img class="w-20 h-20" src="/images/dark-arrow.PNG" alt="">
                </div>
                <h1 class="heading-round">1.kolo</h1>
                <exercise exercise-name="Kľuky" v-bind:reps=10></exercise>
                <exercise exercise-name="Brušáky" v-bind:reps=10></exercise>
                <h1 class="heading-round">2.kolo</h1>
                <exercise exercise-name="Kľuky" v-bind:reps=10></exercise>
                <exercise exercise-name="Brušáky" v-bind:reps=10></exercise>
                <h1 class="heading-round">3.kolo</h1>
                <exercise exercise-name="Kľuky" v-bind:reps=10></exercise>
                <exercise exercise-name="Brušáky" v-bind:reps=10></exercise>
            </div>
            <button
                class="bg-secondary w-2/3 tracking-widest rounded-sm text-white text-xl py-3 font-sans uppercase text-center mx-auto mt-5">
                Ukončiť tréning
            </button>
        </div>

        <div class="flex flex-col bg-primaryBg w-2/5 ml-20 h-full p-4 items-center justify-center rounded-3xl">
            <h1 class="uppercase tracking-widest  text-4xl py-2 font-bold border-b border-white">Maximálne pauzy</h1>
            <h2 class="uppercase tracking-widest  text-2xl py-2 text-white mt-20">Medzi cvikmi</h2>
            <h1 class="uppercase tracking-widest  text-5xl py-2 font-bold">30 sekúnd</h1>
            <h2 class="uppercase tracking-widest  text-2xl py-2 text-white mt-20">Medzi kolami</h2>
            <h1 class="uppercase tracking-widest  text-5xl font-bold py-2">2 minúty</h1>
        </div>

    </div>
</template>

<script>
import Exercise from './Exercise';

export default {

    props: ['exercise'],

    data() {
        return {
            showVideo: false,
        }
    },
    components: {
        Exercise,
    },

}
</script>

<style scoped>

</style>
