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
                <exercise v-for="warmUpExercise in warmUp" :key="warmUpExercise.id" v-on:click.native="showVideo(warmUpExercise.url, warmUpExercise.name)" :exercise-name="warmUpExercise.name" :reps="warmUpExercise.reps ? warmUpExercise.reps : 0" :time="warmUpExercise.time ? warmUpExercise.time : 0"></exercise>
            </div>
            <div class="flex flex-col w-full mt-5" id="training">
                <div class="t-heading">
                    <h1>tréning</h1>
                    <img class="w-20 h-20" src="/images/dark-arrow.PNG" alt="">
                </div>
                <div v-for="(trainingExercise, index) in training">
                    <h1 class="text-secondary uppercase my-4 pl-2 font-bold tracking-widest">{{index+1}}. kolo</h1>
                    <exercise v-for="thisExercise in trainingExercise" :key="thisExercise.id" v-on:click.native="showVideo(thisExercise.url, thisExercise.name)" :exercise-name="thisExercise.name" :reps="thisExercise.reps ? thisExercise.reps : 0" :time="thisExercise.time ? thisExercise.time : 0"></exercise>
                </div>
            </div>
            <div class="flex flex-col w-full mt-5" id="stretching">
                <div class="t-heading">
                    <h1>strečing</h1>
                    <img class="w-20 h-20" src="/images/dark-arrow.PNG" alt="">
                </div>
                <exercise v-for="exercise in stretching" :key="exercise.id" v-on:click.native="showVideo(exercise.url, exercise.name)" :exercise-name="exercise.name" :reps="exercise.reps ? exercise.reps : 0" :time="exercise.time ? exercise.time : 0"></exercise>
            </div>
            <button
                class="bg-secondary w-2/3 tracking-widest rounded-sm text-white text-xl py-3 font-sans uppercase text-center mx-auto mt-5">
                Ukončiť tréning
            </button>
        </div>

        <div class="flex flex-col bg-primaryBg w-2/5 ml-20 h-full p-4 items-center justify-center rounded-3xl">
            <h1 class="uppercase tracking-widest  text-4xl py-2 font-bold border-b border-white">Maximálne pauzy</h1>
            <h2 class="uppercase tracking-widest  text-2xl py-2 text-white mt-20">Medzi cvikmi</h2>
            <h1 class="uppercase tracking-widest  text-5xl py-2 font-bold">{{ pauses.betweenExercises }} sekúnd</h1>
            <h2 class="uppercase tracking-widest  text-2xl py-2 text-white mt-20">Medzi kolami</h2>
            <h1 class="uppercase tracking-widest  text-5xl font-bold py-2">{{ pauses.betweenRounds }} sekúnd</h1>
            <div class="flex justify-center items-center w-full mt-6">
                <i class="fas fa-stopwatch text-2xl text-white cursor-pointer"></i>
                <span class="text-white text-2xl ml-4 uppercase tracking-widest">{{formattedElapsedTime}}</span>
            </div>
        </div>

    </div>
</template>

<script>
import Exercise from './Exercise';
import VideoComponent from "./VideoComponent";

export default {

    props: ['warmUp', 'training', 'stretching', 'pauses', 'fullTime'],

    data() {
        return {
            iframeVisibility: false,
            visibleText: "",
            visibleUrl: "",
            elapsedTime: 0,
            timer: undefined
        }
    },
    computed: {
        formattedElapsedTime() {
            const date = new Date(null);
            date.setSeconds(this.elapsedTime / 1000);
            const utc = date.toUTCString();
            return utc.substr(utc.indexOf(":") + 1, 5);
        }
    },
    methods: {
        showVideo(url, text) {
            this.visibleUrl = url;
            this.visibleText = text;
            this.iframeVisibility = true;
        },
        start() {
            this.timer = setInterval(() => {
                this.elapsedTime += 1000;
            }, 1000);
        },
    },
    components: {
        Exercise,
        VideoComponent
    },
    created() {
        this.start();
    }

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
