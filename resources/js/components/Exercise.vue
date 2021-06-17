<template>
    <div class="rounded-2xl w-11/12 cursor-pointer bg-primaryBg pr-4 mt-2 flex flex-row justify-between items-center">
        <div class="flex flex-row flex-1 h-full items-center justify-start">
            <button>
                <img class="w-20 h-20" src="/images/play-icon.png" alt="">
            </button>
            <h1 class="text-white text-xl uppercase tracking-widest w-2/3">
                {{ this.exerciseName }}
            </h1>
        </div>
        <h1 class="text-white text-xl uppercase tracking-widest" v-if="this.reps !== 0">
            {{ this.reps }}x
        </h1>
        <h1 class="text-white text-xl uppercase tracking-widest" v-else>
            {{this.time}}sec
        </h1>
    </div>
</template>

<script>
export default {
    props: {
        exerciseName: {
            type: String,
            default: ""
        },
        reps: {
            type: Number,
            default: 89
        },
        time: {
            type: Number,
            default: 89
        },
    },
}
</script>
