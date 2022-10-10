<template lang="">
    <LogSystem>
            <!-- Login -->
            <form action="#" method="post">
          <h1
            class="
              text-2xl
              underline underline-offset-8
              relative
              -left-2
              font-extrabold
            "
          >
            Reset Password
          </h1>
          <!-- Content -->
          <p class="pt-5 font-sans">
                            If you have forgotten your password, please
                enter your email address below and we will
                send you instructions for setting a new one.
          </p>
          <!-- Email -->
          <div class="flex flex-col mt-3">
            <label for="email" class="text-xl">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Enter Email"
              class="p-2 bg-transparent border-2 rounded-lg"
            />
          </div>
          <!-- Button Login -->
          <button type="submit" class="bg-[#AC85EC] w-full p-2 mt-5 rounded-lg">
            Reset Password
          </button>
          <div class="text-center mt-4 text-[#AC85EC]">
            <Link href="/">Login</Link>
          </div>
        </form>
    </LogSystem>
</template>
<script>
import { Link } from "@inertiajs/inertia-vue3";
import LogSystem from './Layouts/LogSystem.vue'
export default {
    components: {
        LogSystem,
        Link,
    }
}
</script>
<style lang="">
    
</style>