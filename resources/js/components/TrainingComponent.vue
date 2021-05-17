<template>
    <div class="flex flex-row w-full h-full mb-20 justify-center items-center">
        <transition name="fade">
        <video-component v-if="iframeVisibility"
                         :visible-url="visibleUrl"
                         :visible-text="visibleText"
                         v-on:hideIframe="iframeVisibility = false"

        />
        </transition>
        <div class="training-holder">
            <div class="flex flex-col w-full" id="warm-up">
                <div class="flex flex-row w-full justify-between">
                    <div class="t-heading mb-5">
                        <h1>Rozcvička</h1>
                        <img class="w-20 h-20" src="/images/dark-arrow.PNG" alt="">
                    </div>
                    <img class="w-20 h-20" src="/images/hint-icon.png" alt="">
                </div>
                <exercise v-for="warmUpExercise in warmUp" :key="warmUpExercise.id" :exercise-name="warmUpExercise.name" :reps="10"></exercise>
            </div>
            <div class="flex flex-col w-full mt-5" id="training">
                <div class="t-heading">
                    <h1>tréning</h1>
                    <img class="w-20 h-20" src="/images/dark-arrow.PNG" alt="">
                </div>
                <exercise v-for="trainingExercise in training" :key="trainingExercise.id" v-on:click.native="showVideo(trainingExercise.url, trainingExercise.name)" :exercise-name="trainingExercise.name" :reps="10"></exercise>
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
import VideoComponent from "./VideoComponent";

export default {

    props: ['warmUp', 'training'],

    data() {
        return {
            iframeVisibility: false,
            visibleText: "",
            visibleUrl: ""
        }
    },
    methods: {
        showVideo(url, text) {
            this.visibleUrl = url;
            this.visibleText = text;
            this.iframeVisibility = true;
        },
    },
    components: {
        Exercise,
        VideoComponent
    },

}
</script>

<style scoped>
.fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
    opacity: 0;
}
</style>
