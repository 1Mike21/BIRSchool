<template>

  <Head :title="title" />

  <Banner />

  <header class="min-h-screen flex flex-col flex-auto flex-shrink-0">
    <div class="w-full sticky flex items-center justify-between h-24 text-white bg-red p-3">
      <div class="flex items-center justify-start pl-3 w-14 md:w-64 h-14 border-none">
        <Link :href="route('index')">
        <WhiteApplicationLogo class="navbar-brand" />
        </Link>
      </div>
      <!-- Settings Options -->
      <div class="flex justify-between items-center h-14 header-right gap-4">
        <div v-if="$page.props.auth.user" class="hidden sm:flex sm:items-center ms-1 xl:ms-6">
          <button type="button"
            class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5" />
            <span class="sr-only">View notifications</span>
            <BellIcon class="h-6 w-6" aria-hidden="true" />
          </button>
          <!-- Profile Dropdown -->
          <div class="ms-3 relative">
            <Dropdown align="right" width="48">
              <template #trigger>
                <button v-if="$page.props.jetstream.managesProfilePhotos"
                  class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                  <img class="h-8 w-8 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url"
                    :alt="$page.props.auth.user.name">
                </button>

                <span v-else class="inline-flex rounded-md">
                  <button type="button"
                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                    {{ $page.props.auth.user.name }}

                    <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                      stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                  </button>
                </span>
              </template>

              <template #content>
                <!-- Account Management -->
                <div class="block px-4 py-2 text-xs text-gray-400">
                  Управление профилем
                </div>

                <DropdownLink :href="route('profile.show')">
                  Профиль
                </DropdownLink>

                <div class="border-t border-gray-200" />

                <!-- Authentication -->
                <form @submit.prevent="logout">
                  <DropdownLink as="button">
                    Выход
                  </DropdownLink>
                </form>
              </template>
            </Dropdown>
          </div>
        </div>

        <!-- Hamburger -->
        <div class="-me-2 flex items-center sm:hidden">
          <button
            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
            @click="showingNavigationDropdown = !showingNavigationDropdown">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path :class="{ 'hidden': showingNavigationDropdown, 'inline-flex': !showingNavigationDropdown }"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              <path :class="{ 'hidden': !showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': showingNavigationDropdown, 'hidden': !showingNavigationDropdown }" class="sm:hidden">
      <div v-if="$page.props.auth.user" class="pt-4 pb-1 border-t border-gray-200">
        <div class="flex flex-col sm:flex-row sm:items-center px-4">
          <div class="flex justify-between">
            <div v-if="$page.props.jetstream.managesProfilePhotos" class="shrink-0 me-5">
              <img class="h-10 w-10 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url"
                :alt="$page.props.auth.user.name">
            </div>
            <button type="button"
              class="relative mt-2 sm:ml-auto rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5" />
              <span class="sr-only">View notifications</span>
              <BellIcon class="h-6 w-6" aria-hidden="true" />
            </button>
          </div>
          <div class="mt-2">
            <div class="font-medium text-base text-white">
              {{ $page.props.auth.user.name }}
            </div>
            <div class="font-medium text-sm text-white">
              {{ $page.props.auth.user.email }}
            </div>
          </div>
        </div>

        <ul class="mt-3 space-y-1">
          <ResponsiveNavLink :href="route('profile.show')" :active="route().current('profile.show')">
            Профиль
          </ResponsiveNavLink>

          <!-- Authentication -->
          <form method="POST" @submit.prevent="logout">
            <ResponsiveNavLink>
              Выход
            </ResponsiveNavLink>
          </form>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <slot />
  </main>
</template>

<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import { BellIcon } from '@heroicons/vue/24/outline';
import Banner from '@/Components/Banner.vue';
import WhiteApplicationLogo from '@/Components/WhiteApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

const showingNavigationDropdown = ref(false);

const logout = () => {
  router.post(route('logout'));
};
</script>

<style></style>
