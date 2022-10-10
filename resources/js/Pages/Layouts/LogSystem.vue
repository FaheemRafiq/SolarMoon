<template>
    <div class="bg-[#140C2A]">
        <!-- First Circle -->
        <div id="circle" class="w-[458px] h-[458px] border-2 rounded-full absolute top-40 left-60">
            <img src="../../../assets/solarMoon.png" alt="Img"
                class="text-white rounded-3xl absolute top-28 left-10 bg-transparent">
        </div>
        <!-- Second Circle -->
        <div id="circle" class="
          w-[720px]
          h-[698px]
          border-2
          rounded-full
          absolute
          -top-40
          -right-52
        "></div>
        <!-- Main Content -->
        <div class="
          text-white
          font-mono
          min-h-screen
          flex
          justify-end
          items-center
          mr-56
        ">
            <div class="
            bg-[#140C2A]
            w-[442px]
            p-9
            rounded-lg
            shadow-black 
            shadow-xl
            relative
          ">
                <!-- <Login/> -->
                <slot />
            </div>
        </div>
    </div>
</template>
  
<script>

export default{

}
</script>
  
  
<style>
#circle {
    box-shadow: inset 2px 2px 30px 1px white;
}
</style>