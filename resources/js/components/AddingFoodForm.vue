<template>
    <form class="w-1/2 mx-auto mt-12" v-on:submit.prevent="sendFormData">
        <input type="hidden" name="_token" :value="csrf">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="flex flex-col">
                    <h1 class="text-primary text-xl">{{ this.food === null ? 'Pridaj si jedlo' : 'Uprav si jedlo'}} !</h1>
                    <div class="w-full mt-4">
                        <label for="name" class="block text-sm font-medium text-secondary">Názov jedla</label>
                        <input v-model="name" type="text" name="name" id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                    </div>

                    <div class="w-full mt-4">
                        <label for="kcal" class="block text-sm font-medium text-secondary">kCal</label>
                        <input v-model="kcal" type="text" name="kcal" id="kcal" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                    </div>

                    <div class="w-full mt-4">
                        <label for="proteins" class="block text-sm font-medium text-secondary">Proteíny</label>
                        <input v-model="proteins" type="text" name="proteins" id="proteins" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                    </div>
                    <div class="w-full mt-4">
                        <label for="fats" class="block text-sm font-medium text-secondary">Tuky</label>
                        <input v-model="fats" type="text" name="fats" id="fats" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                    </div>
                    <div class="w-full mt-4">
                        <label for="carbohydrates" class="block text-sm font-medium text-secondary">Karbohydráty</label>
                        <input v-model="carbohydrates" type="text" name="carbohydrates" id="carbohydrates" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                    </div>
                    <div class="w-full mt-4">
                        <label for="type_id" class="block text-sm font-medium text-secondary">Typ</label>
                        <select v-model="food_type_id" id="type_id"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="1">Ranajky</option>
                            <option value="2">Obed</option>
                            <option value="3">Olovrant</option>
                            <option value="4">Vecera</option>
                        </select>
                    </div>
                    <div class="w-full mt-4">
                        <label for="url" class="block text-sm font-medium text-secondary">Ingrediencie</label>
                        <div v-for="ingredient in ingredients" class="flex gap-x-1 items-center">
                            <input type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="ingredient.name" placeholder="Názov ingrediencie" />
                            <input type="text" class="w-24 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="ingredient.amount" placeholder="Množstvo"/>
                            <span v-on:click="removeIngredient(ingredient)" class="text-base text-bold text-secondary block h-full cursor-pointer">X</span>
                        </div>
                    </div>
                    <button type="button" v-on:click="addIngredient" class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary">Pridaj ingredienciu</button>
                    <div class="w-full mt-4">
                        <label for="url" class="block text-sm font-medium text-secondary">Recept</label>
                        <div v-for="step in steps" class="flex gap-x-1 items-center">
                            <input type="text" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" v-model="step.value" placeholder="Popis" />
                            <span v-on:click="removeStep(step)" class="text-base text-bold text-secondary block h-full cursor-pointer">X</span>
                        </div>
                    </div>
                    <button type="button" v-on:click="addStep" class="mt-2 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary">Pridaj krok</button>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button v-show="food !== null" v-on:click="destroyFood" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-700 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Odstrániť jedlo
                </button>
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-secondary hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{food === null ? 'Pridať' : 'Upraviť'}}
                </button>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    props: {
        food: {
            type: Object,
            default: null
        }
    },
    data() {
        return {
            name: !this.food ? '' : this.food.name,
            kcal: !this.food ? 0 : this.food.kcal,
            fats: !this.food ? 0 : this.food.fats,
            proteins: !this.food ? 0 : this.food.proteins,
            carbohydrates: !this.food ? 0 : this.food.carbohydrates,
            food_type_id: !this.food ? 0 : this.food.food_type_id,
            ingredients: !this.food ? [
                {id: 1, name: '', amount: ''}
            ] : this.food.ingredients,
            steps: !this.food ? [
                {id: 1, value: ''}
            ] : this.makeJson(this.food.recipe)
        }
    },
    methods: {
        addIngredient() {
            this.ingredients.push({
                id: this.ingredients.length !== 0 ? this.ingredients[this.ingredients.length - 1].id + 1 : 1,
                amount: 0
            })
        },
        removeIngredient(ingredient) {
            let index = 0
            for (let i = 0; i < this.ingredients.length; i++) {
                if (ingredient.id === this.ingredients[i].id) {
                    index = i;
                    break;
                }
            }
            this.ingredients.splice(index, 1);
        },
        addStep() {
            this.steps.push({
                id: this.steps.length !== 0 ? this.steps[this.steps.length - 1].id + 1 : 1,
                desc: ''
            })
        },
        removeStep(step) {
            let index = 0
            for (let i = 0; i < this.steps.length; i++) {
                if (step.id === this.steps[i].id) {
                    index = i;
                    break;
                }
            }
            this.steps.splice(index, 1);
        },
        sendFormData() {
            const url = this.food === null ? '/admin/food' : ('/admin/food/' + this.food.id);
            axios.post(url, {
                _method: this.food === null ? 'POST' : 'PUT',
                name: this.name,
                kcal: this.kcal,
                fats: this.fats,
                proteins: this.proteins,
                carbohydrates: this.carbohydrates,
                food_type_id: this.food_type_id,
                ingredients: this.ingredients,
                recipe: this.makeFromJson(this.steps)
            }).then( () => {
                window.location.href = '/admin/food';
            }).catch( (err) => {
                console.log(err.response.data);
            });
        },
        makeJson(arr) {
            let json_arr = []
            for (let i = 0; i < arr.length; i++) {
                json_arr.push({
                    id: i,
                    value: arr[i]
                })
            }
            return json_arr;
        },
        makeFromJson(json_arr) {
            let arr = []
            for (let i = 0; i < json_arr.length; i++) {
                arr.push(json_arr[i].value);
            }
            return arr;
        },
        destroyFood() {
            axios.post('/admin/food/' + this.food.id, {
                _method: 'DELETE'
            }).then( () => {
                window.location.href = '/admin/food';
            })
        }
    },
    computed: {
        csrf() {
            return document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        },
    },
}
</script>

<style scoped>

</style>
