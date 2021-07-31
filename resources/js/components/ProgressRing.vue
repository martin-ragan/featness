<template>
    <svg
        :height="radius*2"
        :width="radius*2"
    >
        <circle
            stroke="white"
            fill="transparent"
            :stroke-dasharray="circumference + ' ' + circumference"
            style="position: relative;"
            :stroke-width="stroke"
            :r="normalizedRadius"
            :cx="radius"
            :cy="radius"
        />
        <circle
            stroke="#C18E60"
            fill="transparent"
            stroke-linecap="round"
            :stroke-dasharray="circumference + ' ' + circumference"
            :style="{ strokeDashoffset }"
            :stroke-width="stroke"
            :r="normalizedRadius"
            :cx="radius"
            :cy="radius"
        />
    </svg>
</template>

<script>
export default {
    name: "ProgressRing",
    props: {
        ate: Number,
        daily: Number,
    },
    data() {
        const stroke = 14;
        const radius = 68;
        const normalizedRadius = radius - stroke * 2;
        const circumference = normalizedRadius * 2 * Math.PI;

        return {
            radius: radius,
            stroke: stroke,
            normalizedRadius: normalizedRadius,
            circumference: circumference,
            progress: this.ate / this.daily
        };
    },
    computed: {
        strokeDashoffset() {
            return this.circumference - this.progress * this.circumference;
        }
    }
}
</script>

<style scoped>

</style>
