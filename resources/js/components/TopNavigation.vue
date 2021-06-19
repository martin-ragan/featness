<template>
    <nav class="flex items-center justify-between flex-wrap py-6">
        <div class="flex items-center flex-no-shrink text-white mr-6">
            <a href="/" class="h-logo text-base sm:text-2xl">F<span class="text-primary text-base sm:text-2xl">EAT</span>NESS</a>
        </div>
        <div class="block sm:hidden">
            <button v-on:click="toggle" class="flex items-center text-primary px-3 py-2 border rounded">
                <i class="fas fa-bars text-primary"></i>
            </button>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex flex-col justify-start items-start sm:justify-end flex-grow sm:flex sm:flex-row items-center sm:w-auto">
                <a class="no-underline mt-2 w-full text-base block text-secondary sm:text-xl sm:w-auto sm:inline-block sm:mt-0 sm:text-primary sm:mr-4" href="">BLOG</a>
                <a href="" class="no-underline mt-2 w-full text-left block sm:inline-block sm:mt-0 sm:w-auto">
                    <img class="w-14 h-14 hidden sm:block" src="/images/2.png" alt="">
                    <span class="text-secondary uppercase text-base sm:hidden">Profil</span>
                </a>
            <div class="w-full h-full mt-3 sm:mt-0 sm:w-auto">
                <form action="/logout" method="post">
<!--                    @csrf-->
                    <label for="logout" class="cursor-pointer w-full h-full text-left">
                        <img class="w-16 h-16 hidden sm:block" src="/images/3.png" alt="">
                        <span class="text-secondary uppercase font-bold text-base block sm:hidden">Odhlásiť sa</span>
                    </label>
                    <input type="submit" id="logout" class="hidden">
                </form>
<!--                <a href="#" class="no-underline inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal hover:bg-white mt-4 sm:mt-0">Download</a>-->
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "TopNavigation",
    data() {
        return {
            open: false,
        }
    },
    methods: {
        toggle() {
            this.open = !this.open
        }
    }
}
</script>

<style scoped>

</style>
