<template>
    <div class="w-1/2 mx-auto mt-12">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="flex flex-col">
                    <h1 class="text-primary text-xl">Uprav cvik !</h1>
                    <div class="w-full mt-4">
                        <label for="name" class="block text-sm font-medium text-secondary">Názov cviku</label>
                        <input type="text" name="name" id="name"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                               v-model="exerciseData.name"
                        />
                    </div>

                    <div class="w-full mt-4">
                        <label for="url" class="block text-sm font-medium text-secondary">URL</label>
                        <input type="text" name="url" id="url"
                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                               v-model="exerciseData.url"
                        />
                    </div>

                    <div class="w-full mt-4">
                        <label for="body_section_id" class="block text-sm font-medium text-secondary">Časť tela</label>
                        <select id="body_section_id" v-model="exerciseData.body_section" name="body_section_id" autocomplete="country"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option v-for="body_section in body_sections" :value="body_section" :selected="body_section.name === exerciseData.body_section.name">{{body_section.name}}</option>
                        </select>
                    </div>

                    <div class="w-full mt-4">
                        <label for="body_part_id" class="block text-sm font-medium text-secondary">Partia</label>
                        <select id="body_part_id" name="body_part_id" v-model="exerciseData.body_part_id"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option v-for="body_part in body_parts" :selected="body_part.id === exerciseData.body_part_id" :value="body_part.id">{{body_part.name }}</option>
                            <!--
@foreach($body_parts as $body_part)-->
<!--                            <option value="{{$body_part['id']}}" {{ $body_part['name'] === $exercise['body_part']['name'] ? 'selected' : '' }} >{{$body_part['name'] . ($body_part['both_parts'] ? " na kazdu stranu" : "")}}</option>-->
<!--                            @endforeach-->
                        </select>
                    </div>
                    <div class="w-full mt-4">
                        <label for="type_id" class="block text-sm font-medium text-secondary">Typ</label>
                        <select id="type_id" name="type_id" autocomplete="type_id" v-model="exerciseData.type"
                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option v-for="type in types" :value="type" :selected="type.name === exercise.type.name">{{type.name }}</option>
<!--                            @foreach($types as $key => $type)-->
<!--                            <option value="{{$type['id']}}" {{ $type == $exercise['type'] ? 'selected' : '' }}>{{$type['name']}}</option>-->
<!--                            @endforeach-->
                        </select>
                    </div>

                    <div class="w-full mt-4">
                        <h4 class="block text-sm font-medium text-secondary">Zložitosť</h4>
                        <div class="flex flex-row">
                            <div v-for="difficulty in difficulties" class="flex items-center w-1/3">
                                <input type="checkbox" :id="difficulty.name" :value="difficulty" v-model="exerciseData.difficulties" :checked="inArray(difficulty, exerciseData.difficulties)" name="difficulty_ids[]">
                                <label class="ml-4" :for="difficulty.name">{{difficulty.name}}</label>
                            </div>
<!--                            @foreach($difficulties as $key => $difficulty)-->
<!--                            <div class="flex items-center w-1/3">-->
<!--                                <input type="checkbox" id="{{$difficulty['name']}}" value="{{$key}}" {{ in_array($difficulty, $exercise['difficulties']) ? 'checked' : '' }} name="difficulty_ids[]">-->
<!--                                <label class="ml-4" for="{{$difficulty['name']}}">{{$difficulty['name']}}</label>-->
<!--                            </div>-->
<!--                            @endforeach-->
                        </div>
                    </div>
                    <div class="w-full mt-4">
                        <h4 class="block text-sm font-medium text-secondary">Použitie</h4>
                        <div class="flex flex-row">
                            <div v-for="area in areas" class="flex items-center w-1/3">
                                <input type="checkbox" :id="area.name" :value="area" v-model="exerciseData.areas" :checked="inArray(area, exerciseData.areas)" name="difficulty_ids[]">
                                <label class="ml-4" :for="area.name">{{area.name}}</label>
                            </div>
<!--                            @foreach($areas as $key => $area)-->
<!--                            <div class="flex items-center w-1/3">-->
<!--                                <input type="checkbox" id="{{$area['name']}}" value="{{$key}}" {{ in_array($area, $exercise['areas']) ? 'checked' : '' }} name="area_ids[]">-->
<!--                                <label class="ml-4" for="{{$area['name']}}">{{ $area['name'] }}</label>-->
<!--                            </div>-->
<!--                            @endforeach-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button v-on:click="destroyExercise"  class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-700 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Odstrániť cvik
                </button>
                <button v-on:click="sendFormData" type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-secondary hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Upraviť
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "EditExerciseForm",
    props: ['exercise','body_sections','body_parts', 'areas', 'types', 'difficulties'],
    data() {
        return {
            exerciseData: this.exercise
        }
    },
    methods: {
        sendFormData() {
            const url = '/admin/exercises/' + this.exercise.id;
            axios.post(url, {
                _method: 'PUT',
                name: this.exerciseData.name,
                url: this.exerciseData.url,
                body_part: this.body_parts[this.exerciseData.body_part_id - 1],
                body_part_id: this.exerciseData.body_part_id,
                body_section: this.exerciseData.body_section,
                body_section_id: this.exerciseData.body_section_id,
                difficulties: this.exerciseData.difficulties,
                type: this.exerciseData.type,
                type_id: this.exerciseData.type_id,
                areas: this.exerciseData.areas
            }).then( () => {
                window.location.href = '/admin/exercises';
            }).catch( (err) => {
                console.log(err.response.data);
            });
        },
        destroyExercise() {
            axios.post('/admin/exercise/' + this.exercise.id, {
                _method: 'DELETE'
            }).then( () => {
                window.location.href = '/admin/exercises';
            })
        },
        inArray(item, arr) {
            for (let i = 0; i < arr.length; i++) {
                if (item === arr[i]) {
                    return true;
                }
            }
            return false;
        }
    },
}
</script>

<style scoped>

</style>
