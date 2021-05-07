<template>
    <form method="POST" action="" class="h-full w-full flex flex-col justify-center items-center">
        
        <h1 class="w-full text-center text-primary uppercase font-bold text-2xl pb-8 tracking-widest">Vytvor si účet</h1>
        
        <div class="flex flex-row justify-between items-center w-full">
                
                <div class="flex flex-col justify-start items-center bg-secondary h-96 w-1/2 rounded-3xl">

                    <div class="flex border-0 border-b border-white h-12 mt-4 w-4/5">
                        <img src="/images/2.png" alt="" class="w-auto h-full">
                        <input id="name" class="flex-1 p-2 text-white block mt-1 w-full bg-transparent border-0 placeholder-white tracking-widest" type="text" name="name" placeholder="MENO" />
                    </div>

                    <div class="flex border-0 border-b border-white h-12 mt-4 w-4/5">
                        <img src="/images/2.png" alt="" class="w-auto h-full">
                        <input id="surname" class="flex-1 p-2 text-white block w-full mt-1 bg-transparent border-0 placeholder-white tracking-widest" type="text" name="surname" placeholder="PRIEZVISKO" />
                    </div>

                    <div class="flex border-0 border-b border-white h-12 mt-4 w-4/5">
                        <img src="/images/4.png" alt="" class="w-auto h-full">
                        <input id="email" class="flex-1 p-2 text-white block mt-1 w-full bg-transparent border-0 placeholder-white tracking-widest" type="email" name="email" placeholder="EMAIL" />
                    </div>

                    <div class="flex border-0 border-b border-white h-12 mt-4 w-4/5">
                        <img src="/images/5.png" alt="" class="w-auto h-full">
                        <input id="password" class="flex-1 p-2 text-white block mt-1 w-full bg-transparent border-0 placeholder-white tracking-widest" type="password" name="password" placeholder="HESLO" />
                    </div>

                    <div class="w-4/5 flex items-center mt-12">
                        <input type="checkbox" name="" id="" class="appearance-none bg-transparent text-primary ml-4 mr-4">
                        <label for="" class="text-white">suhlásim s obchodnými podmienkami</label>
                    </div>

                    
                </div>

                <div class="ml-5 flex flex-col bg-secondary h-96 w-1/2 rounded-3xl justify-start items-center">
                    <div class="flex flex-row justify-between w-4/5 mt-4">
                        <div class="flex flex-row h-12 w-1/2 items-center justify-between border-b border-white">
                            <label class="flex-none text-white uppercase" for="height">výška</label>
                            <div class="h-full flex items-center">
                                <button type="button" class="h-full text-primary font-semibold text-3xl ml-5" v-on:click="decreaseHeight">-</button>
                                <input type="number" class="bg-transparent text-white text-center w-14 border-0 placeholder-white" name="height" id="height" v-model.number="heightValue">
                                <span class="text-white mr-4">cm</span>
                                <button type="button" class="h-full text-primary font-semibold text-3xl" v-on:click="increaseHeight">+</button>
                            </div>
                        </div>
                        <div class="flex flex-row h-12 w-1/2 items-center justify-between border-b border-white ml-12">
                            
                            <label class="text-white uppercase text-base" for="weight">váha</label>
                            <div class="h-full flex items-center">
                                <button type="button" class="h-full text-primary font-semibold text-3xl ml-5" v-on:click="decreaseWeight">-</button>
                                <input class="bg-transparent text-white text-center w-14 border-0 placeholder-white" type="number" v-model.number="weightValue" name="weight" id="weight">
                                <span class="text-white mr-4">kg</span>
                                <button type="button" class="h-full text-primary font-semibold text-3xl" v-on:click="increaseWeight">+</button>
                            </div>
                        </div>

                    </div>
                
                    <div class="flex flex-row w-4/5 justify-left mt-7">
                        <div class="flex flex-row h-12  w-1/2  items-center justify-between border-b border-white">
                            <label class="text-white uppercase" for="age" >VEK</label>
                            <div class="h-full flex items-center">
                                <button type="button" class="h-full text-primary font-semibold text-3xl ml-5" v-on:click="decreaseAge">-</button>
                                <input class="bg-transparent text-white text-center w-16 border-0 placeholder-white" type="number" v-model.number="ageValue" name="age" id="age">
                                <button type="button" class="h-full text-primary font-semibold text-3xl" v-on:click="increaseAge">+</button>
                            </div>
                        </div>
                        <div class="h-12  w-1/2 ml-12"></div>
                    </div>

                    <select name="pets" id="pet-select" class="mt-7 w-4/5 bg-transparent rounded-none p-0 h-12 border-0 border-b border-white uppercase text-white after:bg-primary">
                        <option value="">Životný štýl</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="hamster">Hamster</option>
                    </select>

                    <select name="pets" id="pet-select" class="mt-7 w-4/5 tracking-widest bg-transparent rounded-none p-0 h-12 border-0 border-b border-white uppercase text-white after:bg-primary">
                        <option value="">Môj cieľ</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="hamster">Hamster</option>
                    </select>
                </div>
        </div>
            
        <button type="submit" class="mt-8 w-72 px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        HOTOVO!
        </button>
    </form>
</template>

<script>
    export default {
        data() {
            return {
                heightValue: 150,
                weightValue: 50,
                ageValue: 18
            }
        },

        methods: {
            decreaseHeight() {

                if (this.heightValue != 130) {
                    this.heightValue -= 1
                }
            },

            increaseHeight() {

                if (this.heightValue != 180) {
                    this.heightValue += 1
                }
            },
            
            decreaseWeight() {

                if (this.weightValue != 20) {
                    this.weightValue -= 1
                }
            },

            increaseWeight() {

                if (this.weightValue != 180) {
                    this.weightValue += 1
                }
            },

            increaseAge() {

                if (this.ageValue != 100) {
                    this.ageValue += 1
                }
            },

            decreaseAge() {

                if (this.ageValue != 14) {
                    this.ageValue -= 1
                }
            }
        },
    }
</script>

<style scoped>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

</style>