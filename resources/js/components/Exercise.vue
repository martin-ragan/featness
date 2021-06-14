<template>
    <div class="exercise-holder cursor-pointer">
        <div class="flex flex-row flex-1 h-full items-center justify-start">
            <button>
                <img class="w-20 h-20" src="/images/play-icon.png" alt="">
            </button>
            <h1 class="w-2/3">
                {{ this.exerciseName }}
            </h1>
        </div>
        <h1 v-if="this.reps !== 0">
            {{ this.reps }}x
        </h1>
        <h1 v-else>
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
