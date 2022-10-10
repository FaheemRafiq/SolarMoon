<template lang="eng">
    <div class="bg-[#0F0823] min-h-screen text-white flex">
        <!-- Toggle -->
        <div class="absolute top-4 left-3">
            <svg xmlns="http://www.w3.org/2000/svg" @click="show = !show" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 ml-3 cursor-pointer transition-all duration-300 hover:scale-105">
               <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
        <!-- NavLinks -->
        <section v-if="show" class="w-[92px] h-[600px] bg-[#1B1038] items-center p-5 inline-block">
            <div class="pt-12">
                <!-- Moon -->
                <img src="../../../assets/Moon.png" class="" alt="Moon" />
                <div class="mt-20 flex flex-col h-[300px] justify-around items-center">
                    <!-- Statistics Circle -->
                    <div class="cursor-pointer">                    
                        <img src="../../../assets/statistics.png" alt="Statistics">
                    </div>
                    <!-- Contact -->
                    <div class=" cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                         </svg>
                    </div>
                    <!-- Arrow -->
                    <div class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                        </svg>
                    </div>
                    <!-- Token -->
                    <div class="cursor-pointer">
                        <img src="../../../assets/token.png" alt="Token" />
                    </div>
                    <!-- Settings -->
                    <div class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
        <section v-else class="w-[95px]"></section>


        <!-- Top Bar -->
        <section class="h-[90px] w-full flex p-5 px-10 shadow-lg">
            <!-- Title -->
            <h1 class="text-2xl font-bold">Solar Moon Statistics</h1>
            <div class="ml-auto flex">
                <!-- Search Bar -->
                <div class="bg-[#1B1038] text-white rounded-full w-60 p-3 text-sm flex">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                    </svg>
                    <input name="" id="" type="text" value="" placeholder="What you are looking for..." class="bg-transparent pl-2 focus:outline-none">
                </div>
                <!-- Account Balance -->
                <div class="flex bg-[#1B1038] text-white rounded-full w-38 p-3 ml-16 border-[1px]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
                    </svg>
                    <h1 class="font-mono pl-2">0.00043 BTC</h1>
                </div>
                <!-- Bell Icon -->
                <div class="pl-16 pt-3">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAArUlEQVRIie2UMQ7CMAxFbZYKcQQ4EByGiiNk5GhILGWGqdyh62MARKQ0wWmJqARPypb8Z0dxRH4GwPHCWc/NShZlAqiAGrh4HZyBLVCNDV8BJ+I0wHJM5alwX5LfCbAzhD+phwiOGYJDLEcTgk5E5sZ6OlVd5Aowht+DVHuzis/BXzBRARm/pXdmb93oUhP1hkASvN3c9x8ERubh+wBX7yraEoIN0D7W+uOCyXID4AdNsUKRw20AAAAASUVORK5CYII=">
                    <span class="inline-block w-2 h-2 rounded-full bg-red-500 relative -top-8 left-3"></span>
                </div>
                <!-- User Information -->
                <div class="flex ml-10">
                    <img src="https://www.clipartmax.com/png/middle/144-1442578_flat-person-icon-download-dummy-man.png" class="h-10 w-10 cursor-pointer" alt="User">
                    <div class="flex pt-2 pl-2">
                        <h2 class="text-lg font-serif">Faheem Rafiq</h2>
                        <!-- DropDown -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mt-1 ml-2 cursor-pointer">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                </div>                
            </div>
        </section>
        <!-- Another Component -->
        <div class="bg-indigo-700">
            <h1>Google</h1>
            <slot/>
        </div>
    </div>

</template>
<script>
export default {
    data() {
        return {
            show: true,
        }
    }
}
</script>
