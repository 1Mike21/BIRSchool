<template>
  <Head :title="title" />

  <Banner />

  <header class="header indent_section_bottom">
    <!-- Navigation Menu -->
    <div class="py-3">
      <div class="gap-4 flex justify-between mb-8 lg:mb-0">
        <div class="shrink-0 flex justify-between items-center">
          <!-- Logo -->
          <Link :href="route('dashboard')">
            <ApplicationLogo class="navbar-brand"/>
          </Link>
          <!-- Navigation Links -->
          <nav class="hidden grow items-center 2xl:ml-6 md:block">
            <ul class="hidden mb-2 lg:mb-0 space-x-5 lg:space-x-14 sm:-my-px sm:ms-6 xl:ms-10 sm:flex">
              <NavLink :href="route('all_courses')" :active="route().current('all_courses')">
                Все курсы
              </NavLink>
              <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                Мои курсы
              </NavLink>
              <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                Мой код
              </NavLink>
              <NavLink :href="route('contacts')" :active="route().current('contacts')">
                Контакты
              </NavLink>
            </ul>
          </nav>
        </div>
        <Link
          v-if="!$page.props.auth.user"
          :href="route('dashboard')"
          class="btn-login hidden md:block"
        >
          Войти
        </Link>

        <div
          v-if="$page.props.auth.user"
          class="hidden md:flex sm:items-center ms-1 xl:ms-6"
        >
          <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5" />
            <span class="sr-only">View notifications</span>
            <BellIcon class="h-6 w-6" aria-hidden="true" />
          </button>
          <!-- Profile Dropdown -->
          <div class="ms-3 relative">
            <Dropdown align="right" width="48">
              <template #trigger>
                <button
                  v-if="$page.props.jetstream.managesProfilePhotos"
                  class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition"
                >
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
        <div class="pt-2 pb-6 space-y-1">
          <ul class="mb-2 pb-2 lg:mb-0 sm:-my-px lg:flex">
            <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')">
              Все курсы
            </ResponsiveNavLink>
            <ResponsiveNavLink :href="route('dashboard')">
              Мои курсы
            </ResponsiveNavLink>
            <ResponsiveNavLink :href="route('dashboard')">
              Мой код
            </ResponsiveNavLink>
            <ResponsiveNavLink :href="route('contacts')">
              Контакты
            </ResponsiveNavLink>
          </ul>
          <Link
            v-if="!$page.props.auth.user"
            :href="route('dashboard')"
            class="btn-login"
          >
            Войти
          </Link>
        </div>

        <!-- Responsive Settings Options -->
        <div
          v-if="$page.props.auth.user"
          class="pt-4 pb-1 border-t border-gray-200"
        >
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
              <ResponsiveNavLink>
                Выход
              </ResponsiveNavLink>
            </form>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <main class="mx-auto container grow px-4">
    <slot />
  </main>

  <footer class="footer indent_section_top">
    <div class="footer__contact">
      <div class="footer__contact-item lg:max-w-[260px]">
        <h3 class="text-[28px] mb-1">Контакты</h3>
        <p class="footer__contact-text">ООО "РАУМЛИНК ГРУПП"</p>
        <p class="footer__contact-title">Юридический адрес :</p>
        <p class="footer__contact-text">115230, город Москва, Электролитный пр-д, д. 3г стр. 2, помещ. 8</p>
        <p class="footer__contact-title">Почтовый адрес :</p>
        <p class="footer__contact-text">107150, город Москва, Бойцовая 27, офис 326.</p>
      </div>
      <div class="footer__contact-item self-center md:justify-self-center">
        <p class="footer__contact-text"><b>ОГРН:</b> 1187746051371</p>
        <p class="footer__contact-text"><b>ИНН/КПП:</b> 7726420671/772601001</p>
        <div class="mt-4">
          <p>График работы:</p>
          <p>Пн - Пт: с 9 до 6</p>
          <p>Сб - Вс: выходной</p>
        </div>
      </div>
      <div class="footer__contact-item flex flex-col justify-evenly sm:text-end">
        <p class="footer__contact-title">Связаться с нами:</p>
        <div><b class="footer__contact-text" >тел.</b> <a class="pb-2 hover:text-red" href="tel:+79017441182">+79017441182</a></div>
        <div><b class="footer__contact-text">e-mail :</b> <a href="mailto:Inbox@bir-team.ru" class="hover:text-red">Inbox@bir-team.ru</a>
          <div class="flex sm:justify-end gap-3 mt-3">
            <a href="https://vk.com/birteam" target="_blank"><img src="/img/icon_vk.svg" alt="birteam-vk"></a>
            <a href="https://t.me/birteamru" target="_blank"><img src="/img/icon_telegram.svg" alt="birteam-telegram"></a>
          </div>
        </div>
      </div>
    </div>
    <p class="text-sm text-center container mx-auto py-3 border-t border-solid border-white">&copy; BIR, {{currentYear}}</p>
  </footer>
</template>

<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import {BellIcon} from '@heroicons/vue/24/outline'
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
  title: String,
});

const currentYear = new Date().getFullYear();

const showingNavigationDropdown = ref(false);

const logout = () => {
  router.post(route('logout'));
};
</script>

<style>
  .header {
    @apply container mx-auto sticky top-0 px-4 left-0 mt-5 z-10 bg-darkblue;
  }
  .navbar-brand {
    @apply w-40 h-14 lg:w-64 lg:h-20;
  }
  .btn-login {
    @apply border-0 rounded-28 self-center bg-red hover:bg-inherit text-white ms-3 py-2 px-4 lg:py-3 lg:px-8 lg:text-xl font-bold text-center no-underline whitespace-nowrap hover:shadow-inset;
  }
  .footer {
    @apply container mx-auto text-white px-4;
  }
  .footer__contact {
    @apply grid justify-center gap-4 grid-cols-1 sm:grid-cols-3 md:grid-cols-6 lg:grid-cols-12 pb-3;
  }
  .footer__contact-item {
    @apply col-span-full sm:col-span-1 md:col-span-2 lg:col-span-4;
  }
  .footer__contact-text {
    @apply pb-2 text-sm mt-0 mb-0;
  }
  .footer__contact-title {
    @apply font-bold text-base;
  }
</style>
