<template>
    <div class="flex flex-col w-full relative h-vh-large justify-evenly pb-6 space-y-3 md:justify-end flex-1 items-stretch md:flex-row md:pb-0">
        <transition name="fade">
            <video-component v-if="iframeVisibility"
                             :visible-url="visibleUrl"
                             :visible-text="visibleText"
                             v-on:hideIframe="iframeVisibility = false"

            >
            </video-component>
        </transition>
        <form method="post" action="finished-training" class="flex flex-col h-9/10 left-0 md:absolute overflow-y-scroll training-holder md:w-1/2 flex-grow">
            <input type="hidden" name="_token" :value="csrf">
            <div class="flex flex-col w-full" id="warm-up">
                <div class="flex flex-row w-full justify-between">
                    <div class="bg-primaryBg pl-4 flex flex-row justify-between items-center rounded-2xl w-4/5 xl:w-1/2 mb-5">
                        <h1 class="text-white text-lg sm:text-3xl uppercase font-bold tracking-widest">Rozcvička</h1>
                        <img class="w-16 h-16" src="/images/dark-arrow.png" alt="">
                    </div>
                    <img class="w-16 h-16" src="/images/hint-icon.png" alt="">
                </div>
                <exercise v-for="warmUpExercise in warmUp" :key="warmUpExercise.id" v-on:click.native="showVideo(warmUpExercise.url, warmUpExercise.name)" :exercise-name="warmUpExercise.name" :reps="warmUpExercise.reps ? warmUpExercise.reps : 0" :time="warmUpExercise.time ? warmUpExercise.time : 0"></exercise>
            </div>
            <div class="flex flex-col w-full mt-5" id="training">
                <div class="bg-primaryBg pl-4 flex flex-row justify-between items-center rounded-2xl w-4/5 xl:w-1/2">
                    <h1 class="text-white text-lg sm:text-3xl uppercase font-bold tracking-widest">tréning</h1>
                    <img class="w-16 h-16" src="/images/dark-arrow.png" alt="">
                </div>
                <div v-for="(trainingExercise, index) in training">
                    <h1 class="text-secondary uppercase my-4 pl-2 font-bold tracking-widest text-lg sm:text-3xl">{{index+1}}. kolo</h1>
                    <exercise v-for="thisExercise in trainingExercise" :key="thisExercise.id" v-on:click.native="showVideo(thisExercise.url, thisExercise.name)" :exercise-name="thisExercise.name" :reps="thisExercise.reps ? thisExercise.reps : 0" :time="thisExercise.time ? thisExercise.time : 0"></exercise>
                </div>
            </div>
            <div class="flex flex-col w-full mt-5" id="stretching">
                <div class="bg-primaryBg pl-4 flex flex-row justify-between items-center rounded-2xl w-4/5 xl:w-1/2">
                    <h1 class="text-white text-lg sm:text-3xl uppercase font-bold tracking-widest">strečing</h1>
                    <img class="w-16 h-16" src="/images/dark-arrow.png" alt="">
                </div>
                <exercise v-for="exercise in stretching" :key="exercise.id" v-on:click.native="showVideo(exercise.url, exercise.name)" :exercise-name="exercise.name" :reps="exercise.reps ? exercise.reps : 0" :time="exercise.time ? exercise.time : 0"></exercise>
            </div>
            <button
                type="submit"
                class="bg-secondary w-2/3 tracking-widest rounded-sm text-white text-base sm:text-xl py-3 font-sans uppercase text-center mx-auto mt-5">
                Ukončiť tréning
            </button>
        </form>

        <div class="flex flex-col bg-primaryBg md:h-9/10 p-4 items-center justify-evenly rounded-3xl md:w-12/25">
            <h1 class="uppercase tracking-widest text-base xl:text-4xl font-bold border-b border-white">Maximálne pauzy</h1>
            <div class="flex xl:flex-col xl:items-center">
                <h2 class="uppercase tracking-widest text-base xl:text-2xl text-white">Medzi cvikmi</h2>
                <h1 class="uppercase tracking-widest text-base xl:text-5xl font-bold">{{ pauses.betweenExercises }} sekúnd</h1>
            </div>
            <div class="flex xl:flex-col xl:items-center">
                <h2 class="uppercase tracking-widest text-base xl:text-2xl text-white">Medzi kolami</h2>
                <h1 class="uppercase tracking-widest text-base xl:text-5xl font-bold">{{ pauses.betweenRounds }} sekúnd</h1>
            </div>
            <div class="flex justify-center items-center w-full">
                <i class="fas fa-stopwatch text-base xl:text-2xl text-white cursor-pointer"></i>
                <span class="text-white ml-2 text-base xl:text-2xl uppercase tracking-widest">{{formattedElapsedTime}}</span>
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
        },
        csrf() {
            return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        },
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

<style>
.fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
    opacity: 0;
}
.training-holder::-webkit-scrollbar {
    width: 1.25rem;
    border-radius: 0.75rem;
}

.training-holder::-webkit-scrollbar-track {
    background-color: rgba(40, 60, 80, 0.50);
    border-radius: 0.75rem;
}

.training-holder::-webkit-scrollbar-thumb {
    background-color: rgba(40, 60, 80, 1);
    border-radius: 0.75rem;
}
</style>
