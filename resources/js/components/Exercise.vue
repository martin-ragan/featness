<template>
    <div class="exercise-holder cursor-pointer">
        <div class="flex flex-row flex-1 h-full items-center justify-start">
            <button>
                <img class="w-20 h-20" src="/images/play-icon.png" alt="">
            </button>
            <h1>
                {{ this.exerciseName }}
            </h1>
        </div>
        <h1>
            {{ this.reps }}x
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
            default: 8
        },
    },
}
</script>
