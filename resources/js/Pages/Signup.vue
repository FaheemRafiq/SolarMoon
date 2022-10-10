<template lang="">
    <LogSystem>
        <form action="#" method="post">
    <!-- Title Section -->
    <h1 id="title"
      class="text-2xl underline underline-offset-8 relative -left-2 font-extrabold"
      >Create an account
    </h1>

    <!-- Email -->

    <div class="flex flex-col mt-5">
      <label for="email" class="text-xl">Email</label>
      <input
        type="email"
        name="email"
        id="email"
        placeholder="Enter Email"
        class="p-2 bg-transparent border-2 rounded-lg"
      />
    </div>

    <!-- Username -->

    <div class="flex flex-col mt-5">
      <label for="username" class="text-xl">Username</label>
      <input
        type="email"
        name="username"
        id="username"
        placeholder="Enter Username"
        class="p-2 bg-transparent border-2 rounded-lg"
      />
    </div>

    <!-- Password -->

    <div class="flex flex-col mt-3">
      <label for="password">Password</label>
      <input
        type="password"
        name="password"
        id="password"
        placeholder="Enter Password"
        class="p-2 bg-transparent border-2 rounded-lg"
      />
      <!-- Eye -->
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="w-6 h-6 relative left-[335px] bottom-8 cursor-pointer"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"
        />
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
        />
      </svg>
    </div>

    <!-- Confirm Password -->

    <div class="flex flex-col">
      <label for="confirm_password">Confirm Password</label>
      <input
        type="password"
        name="confirm_password"
        id="confirm_password"
        placeholder="Enter Confirm Password"
        class="p-2 bg-transparent border-2 rounded-lg"
      />
      <!-- Eye -->
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="w-6 h-6 relative left-[335px] bottom-8 cursor-pointer"
      >
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"
        />
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
        />
      </svg>
        </div>
        <!-- CheckBox -->
        <div class="-mt-2 text-lg">
        <input type="checkbox" class="h-4 w-4 accent-[#AC85EC]" />
        <label>
            I agree to <a href="#" class="text-[#AC85EC]">Term of Use</a> and
            <a href="#" class="text-[#AC85EC]">Privacy Policy.</a>
        </label>
        </div>
        <!-- Button -->
        <button type="submit" class="bg-[#AC85EC] w-full p-2 mt-3 rounded-lg">
        Create Account
        </button>
        <div class="text-center mt-6">
        <h3>
            Already have an account?<Link href="/" class="text-[#AC85EC] cursor-pointer"> Login</Link>
        </h3>
        </div>
        </form>
    </LogSystem>
</template>
<script>
import {Link} from "@inertiajs/inertia-vue3";
import LogSystem from './Layouts/LogSystem.vue'
export default {
    components: {
        LogSystem,
        Link,
    }
}
</script>

<style>

</style>
