<template>
    <form method="POST" action="" class="h-full w-full flex flex-col justify-center items-center">

        <h1 class="heading-brown">Vytvor si účet</h1>

        <input type="hidden" name="_token" :value="csrf">

        <div class="flex flex-col justify-start items-center w-full xl:flex-row xl:justify-between">

                <div class="card-dark px-0 py-8">

                    <div class="register-input-w-full-holder mt-0">
                        <img src="/images/white-avatar.png" alt="" class="input-icon">
                        <input id="name" class="register-input-w-full" type="text" name="name" placeholder="MENO" />
                    </div>

                    <div class="register-input-w-full-holder">
                        <img src="/images/white-avatar.png" alt="" class="input-icon">
                        <input id="surname" class="register-input-w-full" type="text" name="surname" placeholder="PRIEZVISKO" />
                    </div>

                    <div class="register-input-w-full-holder">
                        <img src="/images/4.png" alt="" class="input-icon">
                        <input id="email" class="register-input-w-full" type="email" name="email" placeholder="EMAIL" />
                    </div>

                    <div class="register-input-w-full-holder">
                        <img src="/images/5.png" alt="" class="input-icon">
                        <input id="password" class="register-input-w-full" type="password" name="password" placeholder="HESLO" />
                    </div>

                    <div class="w-4/5 flex items-center mt-12">
                        <input type="checkbox" name="terms" id="terms" class="text-primary">
                        <label for="terms" class="text-white pl-4">suhlásim s obchodnými podmienkami</label>
                    </div>


                </div>

                <div class="mt-6 card-dark px-0 py-8 xl:ml-10 xl:mt-0">
                    <div class="flex flex-row justify-between w-4/5">

                        <div class="register-input-holder">
                            <label class="input-label" for="height">výška</label>
                            <div class="h-full flex items-center">
<!--                                <button type="button" class="change-v-button ml-5" v-on:click="decreaseHeight">-</button>-->
                                <input type="number" class="register-input" name="height" id="height" v-model.number="heightValue">
                                <span class="text-white mr-4">cm</span>
<!--                                <button type="button" class="change-v-button" v-on:click="increaseHeight">+</button>-->
                            </div>
                        </div>

                        <div class="register-input-holder ml-12">
                            <label class="input-label" for="weight">váha</label>
                            <div class="h-full flex items-center">
<!--                                <button type="button" class="change-v-button ml-5" v-on:click="decreaseWeight">-</button>-->
                                <input class="register-input" type="number" v-model.number="weightValue" name="weight" id="weight">
                                <span class="text-white mr-4">kg</span>
<!--                                <button type="button" class="change-v-button" v-on:click="increaseWeight">+</button>-->
                            </div>
                        </div>

                    </div>

                    <div class="flex flex-row w-4/5 justify-left mt-7">
                        <div class="register-input-holder">
                            <label class="input-label" for="age" >VEK</label>
                            <div class="h-full flex items-center">
<!--                                <button type="button" class="change-v-button ml-5" v-on:click="decreaseAge">-</button>-->
                                <input class="register-input" type="number" v-model.number="ageValue" name="age" id="age">
<!--                                <button type="button" class="change-v-button" v-on:click="increaseAge">+</button>-->
                            </div>
                        </div>
                        <div class="h-12  w-1/2 ml-12"></div>
                    </div>

                    <select name="life_style" id="life_style" class="register-select">
                        <option value="">Životný štýl</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="hamster">Hamster</option>
                    </select>

                    <select name="my_goal" id="my_goal" class="register-select">
                        <option value="">Môj cieľ</option>
                        <option value="dog">Dog</option>
                        <option value="cat">Cat</option>
                        <option value="hamster">Hamster</option>
                    </select>
                </div>
        </div>

        <button type="submit" class="btn-brown mt-8 w-72"> HOTOVO! </button>
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
        computed: {

            csrf() {
                return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            },

            // heightChecker() {
            //     if(this.heightValue === '' | this.heightValue < 0) {
            //         return this.heightValue = 0;
            //     }
            //     return this.heightValue;
            // },
            // weightChecker() {
            //     if(this.weightValue === '') {
            //         return this.weightValue = 0;
            //     }
            //     return this.weightValue;
            // },
            // ageChecker() {
            //     if(this.ageValue === '') {
            //         return this.ageValue = 0;
            //     }
            //     return this.ageValue;
            // }
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
