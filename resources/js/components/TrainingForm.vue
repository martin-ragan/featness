<template>
    <div class="grid gap-8 items-stretch grid-flow-row w-full xl:grid-flow-col xl:auto-cols-fr">

        <div class="card-dark-without-prop w-full h-64 xl:w-auto xl:h-auto justify-center items-center">
            <h1 class="heading-brown text-lg 2xl:text-xl">čo chceš dnes cvičiť ?</h1>
            <div class="flex flex-col flex-1 w-full h-4/5 items-center">
                <div class="checkbox-holder">
                    <input type="radio" value="upper-body" name="body-section" id="upper-body" class="appearance-none bg-transparent text-primary ml-4 mr-4" v-model="checkedType">
                    <label for="upper-body" class="text-white">vrchná časť tela</label>
                </div>
                <div class="checkbox-holder">
                    <input type="radio" value="lower-body" name="body-section" id="lower-body" class="appearance-none bg-transparent text-primary ml-4 mr-4" v-model="checkedType">
                    <label for="lower-body" class="text-white">spodná časť tela</label>
                </div>
                <div class="checkbox-holder">
                    <input type="radio" value="whole-body" name="body-section" id="whole-body" class="appearance-none bg-transparent text-primary ml-4 mr-4" v-model="checkedType">
                    <label for="whole-body" class="text-white">celé telo</label>
                </div>
            </div>
        </div>

        <div class="card-dark-without-prop w-full h-64 xl:w-auto xl:h-auto justify-center items-center">
            <h1 class="heading-brown text-lg 2xl:text-xl">ako chceš dnes cvičiť ?</h1>
            <div class="flex flex-col flex-1 w-full h-4/5 items-center">

                <div class="checkbox-holder">
                    <input type="radio" value="easy-training" name="difficulty" id="easy-training" class="appearance-none bg-transparent text-primary ml-4 mr-4" v-model="checkedLevel">
                    <label for="easy-training" class="text-white">ľahký tréning</label>
                </div>
                <div class="checkbox-holder">
                    <input type="radio" value="medium-training" name="difficulty" id="medium-training" class="appearance-none bg-transparent text-primary ml-4 mr-4" v-model="checkedLevel">
                    <label for="medium-training" class="text-white">pokročilý tréning</label>
                </div>
                <div class="checkbox-holder">
                    <input type="radio" value="hard-training" name="difficulty" id="hard-training" class="appearance-none bg-transparent text-primary ml-4 mr-4" v-model="checkedLevel">
                    <label for="hard-training" class="text-white">ťažký tréning</label>
                </div>
            </div>
        </div>

        <div class="card-dark-without-prop w-full h-64 xl:w-auto xl:h-auto justify-center items-center">
            <h1 class="heading-brown text-lg 2xl:text-xl">ako dlho chceš dnes cvičiť ?</h1>

            <div class="flex flex-col flex-1 w-full h-4/5 items-center">
                <div class="checkbox-holder" v-for="(selectedTimes, index) in times[types.indexOf(checkedType)][levels.indexOf(checkedLevel)]" :key="index">
                    <input type="radio" :value="timesNamed[index]" name="training-time" :id="timesNamed[index]" class="appearance-none bg-transparent text-primary ml-4 mr-4">
                    <label :for="timesNamed[index]" class="text-white">{{ selectedTimes }} minút</label>
                </div>

            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: "TrainingForm",
    data() {
        return {
            checkedType: 'upper-body',
            checkedLevel: 'easy-training',
            types: [
                'upper-body',
                'lower-body',
                'whole-body'
            ],
            timesNamed: [
                'short-time',
                'medium-time',
                'long-time'
            ],
            levels: [
                'easy-training',
                'medium-training',
                'hard-training'
            ],
            times: [
                [
                    [16, 20],
                    [18, 25, 30],
                    [16, 22, 28],
                ],
                [
                    [16, 20],
                    [18, 25, 30],
                    [16, 22, 28],
                ],
                [
                    [20, 25],
                    [18, 25, 32],
                    [16, 22, 28],
                ]
            ]
        }
    },
}
</script>

<style scoped>

</style>
