<template>
<div>
<form method="POST" action="" class="flex flex-col w-2/5 justify-center items-center bg-secondary h-96 rounded-3xl">
        <!-- @csrf -->

        <h1 class="text-2xl text-white uppercase tracking-widest mb-4">Prihlásiť sa</h1>

        <div class="flex border-0 border-b border-white h-16 w-4/5">
            <img src="/images/4.png" alt="" class="w-1/6">
            <input class="flex-1 p-2 text-white block mt-1 w-full bg-transparent border-0 placeholder-white tracking-widest" type="email" name="email" id="email" placeholder="EMAIL">
        </div>

        <div class="flex border-0 border-b border-white mt-4 h-16 w-4/5">
            <img src="/images/4.png" alt="" class="w-1/6">
            <input class="flex-1 p-2 block mt-1 w-full bg-transparent text-white border-0 tracking-widest placeholder-white" type="password" name="password" id="password" placeholder="HESLO">
        </div>
            <a class="underline text-sm text-white p-4" href="">
                Zabudla si heslo ?
            </a>
            <button class="px-4 py-2 bg-primary border border-transparent w-2/3 font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                POĎME NA TO
            </button>
    </form>
    <div class="classic ml-5 flex flex-col justify-start items-center bg-secondary w-2/5 h-96 rounded-3xl">
            <h1 class="text-2xl pt-12 text-white uppercase tracking-widest mb-4">Si tu prvýkrát ?</h1>
            <h2 class="text-primary text-lg w-2/5 uppercase text-center py-3">Zaregistruj sa na prvých 7 dní úplne zadarmo!</h2>
            <h4 class="text-white text-sm uppercase text-center py-3 w-2/5">Bez zadania údajov z platobnej karty</h4>
            <a class="text-center px-4 py-2 mt-4 bg-primary border border-transparent font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition" href="">
                    Bezplatná registrácia
            </a>
    </div>
</div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>