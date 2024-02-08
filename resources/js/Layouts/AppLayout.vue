<template>
    <Head :title="title" />

    <Banner />

    <!-- <Disclosure as="nav" class="bg-darkblue" v-slot="{ open }">
      <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
          <div class="absolute inset-y-0 right-0 flex items-center lg:hidden">
            <DisclosureButton class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
              <span class="absolute -inset-0.5" />
              <span class="sr-only">Open main menu</span>
              <Bars3Icon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
              <XMarkIcon v-else class="block h-6 w-6" aria-hidden="true" />
            </DisclosureButton>
          </div>
          <div class="flex flex-1 items-center sm:items-stretch sm:justify-start">
            <div class="flex flex-shrink-0 items-center">
              <a href=""><img class="navbar-brand" src="img/logo.png" alt="BIR" ></a>
              <div class="hidden grow items-center sm:ml-6 sm:block">
                <ul class="flex mb-2 lg:mb-0 space-x-14">
                  <li class="nav-item">
                    <a href="" class="nav-link">Мой код</a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">Все курсы</a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">Контакты</a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="btn-login">Войти</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
              <span class="absolute -inset-1.5" />
              <span class="sr-only">View notifications</span>
              <BellIcon class="h-6 w-6" aria-hidden="true" />
            </button>

            <Menu as="div" class="relative ml-3">
              <div>
                <MenuButton class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                  <span class="absolute -inset-1.5" />
                  <span class="sr-only">Open user menu</span>
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                </MenuButton>
              </div>
              <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
                <MenuItems class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                  <MenuItem v-slot="{ active }">
                    <a href="#" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Your Profile</a>
                  </MenuItem>
                  <MenuItem v-slot="{ active }">
                    <a href="#" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Settings</a>
                  </MenuItem>
                  <MenuItem v-slot="{ active }">
                    <a href="#" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Sign out</a>
                  </MenuItem>
                </MenuItems>
              </transition>
            </Menu>
          </div>
        </div>
      </div>

      <DisclosurePanel class="sm:hidden">
        <div class="space-y-1 px-2 pb-3 pt-2">
          <DisclosureButton v-for="item in navigation" :key="item.name" as="a" :href="item.href" :class="[item.current ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'block rounded-md px-3 py-2 text-base font-medium']" :aria-current="item.current ? 'page' : undefined">{{ item.name }}</DisclosureButton>
        </div>
      </DisclosurePanel>
    </Disclosure> -->


    <header class="header">
        <!-- Primary Navigation Menu -->
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between mb-8 lg:mb-0">
            <div class="flex">
              <!-- Logo -->
              <div class="shrink-0 flex items-center">
                <Link :href="route('dashboard')">
                <ApplicationLogo class="navbar-brand"/>
                </Link>
              <!-- Navigation Links -->
                <div class="hidden grow items-center sm:ml-6 md:block">
                  <ul class="hidden mb-2 lg:mb-0 space-x-7 lg:space-x-14 sm:-my-px sm:ms-10 sm:flex">
                    <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                      Все курсы
                    </NavLink>
                    <NavLink :href="route('dashboard')">
                      Мои курсы
                    </NavLink>
                    <NavLink :href="route('dashboard')">
                      Мой код
                    </NavLink>
                    <NavLink :href="route('dashboard')">
                      Контакты
                    </NavLink>
                    <Link class="btn-login" :href="route('dashboard')">
                      Войти
                    </Link>
                  </ul>
                </div>
              </div>
            </div>

            <div class="hidden md:flex sm:items-center sm:ms-6">
              <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
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

                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                          viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
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
            <div class="-me-2 flex items-center md:hidden">
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

        <!-- Responsive Navigation Menu -->
        <div :class="{ 'block': showingNavigationDropdown, 'hidden': !showingNavigationDropdown }" class="md:hidden">
          <div class="pt-2 pb-3 space-y-1">
            <ul class="mb-2 lg:mb-0 sm:-my-px lg:flex">
              <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
                Все курсы
              </ResponsiveNavLink>
              <ResponsiveNavLink :href="route('dashboard')">
                Мои курсы
              </ResponsiveNavLink>
              <ResponsiveNavLink :href="route('dashboard')">
                Мой код
              </ResponsiveNavLink>
              <ResponsiveNavLink :href="route('dashboard')">
                Контакты
              </ResponsiveNavLink>
            </ul>
            <!-- <Link class="btn-login" :href="route('dashboard')">
              Войти
            </Link> -->
          </div>

          <!-- Responsive Settings Options -->
          <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex flex-col sm:flex-row items-start sm:items-center px-4">
              <div v-if="$page.props.jetstream.managesProfilePhotos" class="shrink-0 me-5">
                <img class="h-10 w-10 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url"
                  :alt="$page.props.auth.user.name">
              </div>
              <div class="mt-2">
                <div class="font-medium text-base text-white">
                  {{ $page.props.auth.user.name }}
                </div>
                <div class="font-medium text-sm text-white">
                  {{ $page.props.auth.user.email }}
                </div>
              </div>
              <button type="button" class="relative mt-2 sm:ml-auto rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <span class="absolute -inset-1.5" />
                <span class="sr-only">View notifications</span>
                <BellIcon class="h-6 w-6" aria-hidden="true" />
              </button>
            </div>

            <ul class="mt-3 space-y-1">
              <ResponsiveNavLink :href="route('profile.show')" :active="route().current('profile.show')">
                Профиль
              </ResponsiveNavLink>

              <!-- Authentication -->
              <form method="POST" @submit.prevent="logout">
                <ResponsiveNavLink as="button">
                  Выход
                </ResponsiveNavLink>
              </form>
            </ul>
          </div>
        </div>
        </nav>

      <!-- Header -->
      <!-- <header v-if="$slots.header" class="bg-white shadow header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
        </header> -->
    </header>

    <!-- Page Content -->
    <main>
      <slot />
    </main>
</template>

<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import { Bars3Icon, BellIcon, XMarkIcon } from '@heroicons/vue/24/outline'
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
  title: String,
});

const showingNavigationDropdown = ref(false);

const logout = () => {
  router.post(route('logout'));
};
</script>
<style>
.header {
  @apply sticky top-0 left-0 mt-5 z-10 bg-darkblue;
}
.navbar-brand {
  @apply w-48 h-14 lg:w-64 lg:h-20
}
.btn-login {
  @apply border-0 rounded-full bg-red hover:bg-inherit text-white py-3 px-8 text-xl font-bold text-center no-underline whitespace-nowrap  hover:shadow-inset
}
</style>
