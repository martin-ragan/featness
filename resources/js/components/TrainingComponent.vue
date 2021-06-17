<template>
    <div class="flex flex-col w-full justify-center flex-1 items-center xl:flex-row">
        <transition name="fade">
            <video-component v-if="iframeVisibility"
                             :visible-url="visibleUrl"
                             :visible-text="visibleText"
                             v-on:hideIframe="iframeVisibility = false"

            />
        </transition>
        <div class="flex flex-col w-full h-96 overflow-y-scroll training-holder xl:w-1/2">
            <div class="flex flex-col w-full" id="warm-up">
                <div class="flex flex-row w-full justify-between">
                    <div class="bg-primaryBg pl-4 flex flex-row justify-between items-center rounded-2xl w-1/2 mb-5">
                        <h1 class="text-white text-3xl uppercase font-bold tracking-widest">Rozcvička</h1>
                        <img class="w-20 h-20" src="/images/dark-arrow.png" alt="">
                    </div>
                    <img class="w-20 h-20" src="/images/hint-icon.png" alt="">
                </div>
                <exercise v-for="warmUpExercise in warmUp" :key="warmUpExercise.id" v-on:click.native="showVideo(warmUpExercise.url, warmUpExercise.name)" :exercise-name="warmUpExercise.name" :reps="warmUpExercise.reps ? warmUpExercise.reps : 0" :time="warmUpExercise.time ? warmUpExercise.time : 0"></exercise>
            </div>
            <div class="flex flex-col w-full mt-5" id="training">
                <div class="bg-primaryBg pl-4 flex flex-row justify-between items-center rounded-2xl w-1/2">
                    <h1 class="text-white text-3xl uppercase font-bold tracking-widest">tréning</h1>
                    <img class="w-20 h-20" src="/images/dark-arrow.png" alt="">
                </div>
                <div v-for="(trainingExercise, index) in training">
                    <h1 class="text-secondary uppercase my-4 pl-2 font-bold tracking-widest">{{index+1}}. kolo</h1>
                    <exercise v-for="thisExercise in trainingExercise" :key="thisExercise.id" v-on:click.native="showVideo(thisExercise.url, thisExercise.name)" :exercise-name="thisExercise.name" :reps="thisExercise.reps ? thisExercise.reps : 0" :time="thisExercise.time ? thisExercise.time : 0"></exercise>
                </div>
            </div>
            <div class="flex flex-col w-full mt-5" id="stretching">
                <div class="bg-primaryBg pl-4 flex flex-row justify-between items-center rounded-2xl w-1/2">
                    <h1 class="text-white text-3xl uppercase font-bold tracking-widest">strečing</h1>
                    <img class="w-20 h-20" src="/images/dark-arrow.png" alt="">
                </div>
                <exercise v-for="exercise in stretching" :key="exercise.id" v-on:click.native="showVideo(exercise.url, exercise.name)" :exercise-name="exercise.name" :reps="exercise.reps ? exercise.reps : 0" :time="exercise.time ? exercise.time : 0"></exercise>
            </div>
            <button
                class="bg-secondary w-2/3 tracking-widest rounded-sm text-white text-xl py-3 font-sans uppercase text-center mx-auto mt-5">
                Ukončiť tréning
            </button>
        </div>

        <div class="flex flex-col bg-primaryBg mt-12 w-full h-96 p-4 items-center justify-center rounded-3xl xl:ml-20 xl:mt-0 xl:w-1/2">
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
