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
          <!-- Password -->
          <div class="flex flex-col mt-3">
            <label for="password" class="text-xl">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              placeholder="Enter new Password"
              class="p-2 bg-transparent border-2 rounded-lg"
            />
          </div>
           <!-- Confirm Password -->
           <div class="flex flex-col mt-3">
            <label for="confirm_password" class="text-xl">Confirm Password</label>
            <input
              type="password"
              name="confirm_password"
              id="confirm_password"
              placeholder="Enter new Confirm Password"
              class="p-2 bg-transparent border-2 rounded-lg"
            />
          </div>
          <!-- Button Login -->
          <button type="submit" class="bg-[#AC85EC] w-full p-2 mt-5 rounded-lg">
           Submit
          </button>
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