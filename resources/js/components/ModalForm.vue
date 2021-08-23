<template>
    <!-- component -->
        <div class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl absolute z-50 left-1/2 transform -translate-x-1/2">
            <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
                <p class="font-semibold text-gray-800">Upraviť cvik</p>
                <svg
                    class="w-6 h-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M6 18L18 6M6 6l12 12"
                    ></path>
                </svg>
            </div>
            <form class="flex flex-col w-full bg-white w-11/12 max-w-2xl p-6" action="">
                <div class="flex flex-col w-2/3 items-start justify-center pt-2">
                    <label class="mr-4 text-secondary font-bold inline-block mb-2" for="name">Názov</label>
                    <input type="text" class="border w-full py-2 px-4 outline-none focus:ring-2 focus:ring-primary rounded" placeholder="Drepy" />
                </div>
                <div class="flex flex-col w-2/3 items-start justify-center pt-2">
                    <label class="mr-4 text-secondary font-bold inline-block mb-2" for="name">Url</label>
                    <input type="text" class="border w-full py-2 px-4 outline-none focus:ring-2 focus:ring-primary rounded" placeholder="Drepy" />
                </div>
                <div class="flex flex-col w-2/3 items-start justify-center pt-2">
                    <h3 class="font-bold">
                        Časť tela
                    </h3>
                    <div class="flex w-full items-center justify-between">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="accountType" value="personal">
                            <span class="ml-2">Vrchná časť tela</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="accountType" value="busines">
                            <span class="ml-2">Spodná časť tela</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="accountType" value="busines">
                            <span class="ml-2">Celé telo</span>
                        </label>
                    </div>
                </div>
                <div class="flex flex-col w-2/3 items-start justify-center pt-2">
                    <h3 class="font-bold">
                        Partia
                    </h3>
                    <div class="flex w-full items-center justify-between">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2">Lýtka</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2">Zadok</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2">Stehná</span>
                        </label>
                    </div>
                    <div class="flex w-full items-center justify-between">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2">Ruky</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2">Prsia</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox">
                            <span class="ml-2">Brucho</span>
                        </label>
                    </div>
                </div>
                <div class="flex flex-col w-2/3 items-start justify-center pt-2">
                    <h3 class="font-bold">
                        Časť tela
                    </h3>
                    <div class="flex w-full items-center justify-between">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="accountType" value="personal">
                            <span class="ml-2">Vrchná časť tela</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="accountType" value="busines">
                            <span class="ml-2">Spodná časť tela</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="accountType" value="busines">
                            <span class="ml-2">Celé telo</span>
                        </label>
                    </div>
                </div>
            </form>
        </div>
</template>

<script>
export default {
    name: "ModalForm"
}
</script>

<style scoped>

</style>
