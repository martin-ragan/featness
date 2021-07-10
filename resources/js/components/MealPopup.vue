<template>
    <div class="bg-secondary p-12 w-11/12 absolute transform rounded-xl -translate-x-1/2 left-1/2 top-10vh bottom-16 z-50 flex flex-col">
        <div v-show="!loaded" class="loader"></div>
        <div class="flex justify-end items-center w-full mb-3">
            <i v-on:click="callDestruction" class="fas fa-times cursor-pointer text-primary text-2xl"></i>
        </div>
        <div v-show="loaded" class="w-full h-full flex justify-between items-stretch">
            <div class="flex flex-col">
                <h1>{{name}}</h1>
                <h2 class="text-primary text-2xl font-bold mt-6">{{kCal}} KCAL</h2>
                <p class="text-white text-xl tracking-widest">bielkoviny: {{proteins}}g, tuky: {{fats}}g, cukry: {{carbohydrates}}g</p>
                <span class="w-4/5 bg-primary h-0.5 my-6"></span>
                <h1 class="mb-6">Budeš potrebovať</h1>
                <h3 class="text-white text-xl uppercase" v-for="(ingredient, index) in ingredients" :key="index">
                    <span class="font-bold w-12 lowercase">{{ingredient.amount}}g</span>
                    {{ingredient.name}}
                </h3>
            </div>
            <div class="flex flex-col w-1/3">
                <h1 class="mb-6">Postup prípravy</h1>
                <p class="text-white mt-2 uppercase tracking-widest text-xl" v-for="(step, index) in recipe" :key="index">
                    {{step}}
                </p>
            </div>
            <div class="flex flex-col justify-end items-center">
                <div class="flex items-center justify-between w-full">
                    <input class="mr-4" type="checkbox" id="scales" name="scales">
                    <label class="text-white tracking-widest text-xl uppercase" for="scales">Zjedené</label>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "MealPopup",
    created() {
        setTimeout(() => this.loaded = true, 500);
    },
    props: {
        name: {
            type: String,
            default: ""
        },
        kCal: {
            type: Number,
            default: 0
        },
        proteins:{
            type: Number,
            default: 0
        },
        fats:{
            type: Number,
            default: 0
        },
        carbohydrates: {
            type: Number,
            default: 0
        },
        ingredients: {
            type: Array,
        },
        recipe: {
            type: Array,
        },

    },
    data() {
        return {
            loaded: false
        }
    },
    methods: {
        callDestruction() {
            this.$emit('hideIframe')
        }
    },
}
</script>

<style scoped>

.loader {
    position: absolute;
    top: 10%;
    right: 45%;
    border: 8px solid #f3f3f3;
    border-radius: 50%;
    border-top: 8px solid #C18E60;
    width: 80px;
    height: 80px;
    -webkit-animation: spin 2s linear infinite; /* Safari */
    animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

</style>
