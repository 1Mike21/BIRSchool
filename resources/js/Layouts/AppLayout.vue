<template>

  <Head :title="title" />

  <header class="header indent_section_bottom">
    <!-- Navigation Menu -->
    <div class="py-3">
      <div class="gap-4 flex justify-between items-center mb-8 lg:mb-0">
        <div class="shrink-0 flex justify-between items-center">
          <!-- Logo -->
          <Link :href="route('index')">
            <ApplicationLogo class="hidden dark:block navbar-brand" />
            <BlackApplicationLogo class="dark:hidden navbar-brand" />
          </Link>
          <!-- Navigation Links -->
          <nav class="hidden grow items-center 2xl:ml-6 lg:block">
            <ul class="hidden mb-2 lg:mb-0 space-x-5 lg:space-x-7 sm:-my-px sm:ms-6 xl:ms-10 sm:flex">
              <NavLink :href="route('courses.index')" :active="route().current('courses.index')">
                Все курсы
              </NavLink>
              <NavLink v-if="$page.props.auth.user" :href="route('user.courses.index')"
                :active="route().current('user.courses.index')">
                Мои курсы
              </NavLink>
              <NavLink :href="route('code-editor')" :active="route().current('code-editor')">
                Редактор кода
              </NavLink>
              <NavLink :href="route('contacts')" :active="route().current('contacts')">
                Контакты
              </NavLink>
            </ul>
          </nav>
        </div>
        <div v-if="!$page.props.auth.user" class="flex items-center gap-x-3">
          <DarkModeSwitcher />
          <button @click="showModal" class="btn-login hidden lg:block">
            Войти
          </button>
        </div>

        <DialogModal :show="loginAndRegModal" max-width="md" @close="closeModal">
          <template #title>
            <ul class="flex items-center">
              <li class="mr-2">
                <button :class="{active: isActive == 1}" :id="isActive" @click="changeComponent(Login, 1)"
                  type="button">
                  Авторизация
                </button>
              </li>
              <li class="mr-2">
                <button :class="{active: isActive == 2}" :id="isActive" @click="changeComponent(Register, 2)"
                  type="button">
                  Регистрация
                </button>
              </li>
            </ul>
          </template>
          <template #content>
            <KeepAlive>
              <component :is="nameComponent" @close-modal="closeModal" @change-component="changeComponent" />
            </KeepAlive>
          </template>
        </DialogModal>

        <ul v-if="$page.props.auth.user" class="hidden lg:flex sm:items-center gap-x-2 ms-1 xl:ms-6">
          <li>
            <DarkModeSwitcher v-if="$page.props.auth.user" />
          </li>
          <li>
            <button type="button"
              class="relative rounded-full p-1 text-[#404063] dark:text-gray-300 hover:text-darkblue dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-darkblue dark:focus:ring-white">
              <span class="absolute -inset-1.5" />
              <span class="sr-only">View notifications</span>
              <BellIcon class="h-6 w-6" aria-hidden="true" />
            </button>
          </li>
          <!-- Profile Dropdown -->
          <li class="ms-3 relative">
            <Dropdown align="right" width="48">
              <template #trigger>
                <button v-if="$page.props.jetstream.managesProfilePhotos"
                  class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                  <img class="h-10 w-10 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url"
                    :alt="$page.props.auth.user.name">
                </button>
              </template>

              <template #content>
                <!-- Account Management -->
                <DropdownLink v-if="hasRoles(['Администратор', 'Куратор'])" :href="route('admin.users.index')">
                  Админ панель
                </DropdownLink>

                <DropdownLink v-else :href="route('user.profile.index')">
                  Личный кабинет
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
          </li>
        </ul>

        <!-- Hamburger -->
        <div class="-me-2 flex items-center lg:hidden">
          <button
            class="inline-flex items-center justify-center p-2 rounded-md text-red dark:text-gray-400 hover:text-red dark:hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-red dark:focus:text-gray-500 transition duration-150 ease-in-out"
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
      <div :class="{ 'block': showingNavigationDropdown, 'hidden': !showingNavigationDropdown }" class="lg:hidden">
        <div class="pt-2 pb-6 space-y-1">
          <ul class="mb-2 pb-2 lg:mb-0 sm:-my-px lg:flex">
            <ResponsiveNavLink :href="route('courses.index')" :active="route().current('courses.index')">
              Все курсы
            </ResponsiveNavLink>
            <ResponsiveNavLink v-if="$page.props.auth.user" :href="route('user.courses.index')" :active="route().current('user.courses.index')">
              Мои курсы
            </ResponsiveNavLink>
            <ResponsiveNavLink :href="route('code-editor')" :active="route().current('code-editor')">
              Редактор кода
            </ResponsiveNavLink>
            <ResponsiveNavLink :href="route('contacts')" :active="route().current('contacts')">
              Контакты
            </ResponsiveNavLink>
          </ul>
          <button v-if="!$page.props.auth.user" @click="showModal" class="btn-login">
            Войти
          </button>
        </div>

        <!-- Responsive Settings Options -->
        <div v-if="$page.props.auth.user" class="pt-4 pb-1 border-t border-gray-200">
          <div class="flex flex-col sm:flex-row items-start sm:items-center px-4">
            <div v-if="$page.props.jetstream.managesProfilePhotos" class="shrink-0 me-5">
              <img class="h-10 w-10 rounded-full object-cover" :src="$page.props.auth.user.profile_photo_url"
                :alt="$page.props.auth.user.name">
            </div>
            <div class="mt-2">
              <div class="font-medium text-base text-darkblue dark:text-white">
                {{ $page.props.auth.user.name }}
              </div>
              <div class="font-medium text-sm text-darkblue dark:text-white">
                {{ $page.props.auth.user.email }}
              </div>
            </div>
            <button type="button"
              class="relative mt-2 sm:ml-auto rounded-full p-1 text-[#404063] dark:text-gray-300 hover:text-darkblue dark:hover:text-white focus:outline-none focus:ring-2 focus:ring-darkblue dark:focus:ring-white">
              <span class="absolute -inset-1.5" />
              <span class="sr-only">View notifications</span>
              <BellIcon class="h-6 w-6" aria-hidden="true" />
            </button>
          </div>

          <ul class="mt-3 space-y-1">
            <ResponsiveNavLink v-if="hasRoles(['Администратор', 'Куратор'])" :href="route('user.profile.index')"
              :active="route().current('user.profile.index')">
              Панель администратора
            </ResponsiveNavLink>

            <ResponsiveNavLink v-else :href="route('user.profile.index')"
              :active="route().current('user.profile.index')">
              Личный кабинет
            </ResponsiveNavLink>

            <!-- Authentication -->
            <form method="POST" @submit.prevent="logout">
              <button type="submit" class="btn-login">
                Выход
              </button>
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
        <p class="footer__contact-title">Юридический адрес:</p>
        <p class="footer__contact-text">115230, город Москва, Электролитный пр-д, д. 3г стр. 2, помещ. 8</p>
        <p class="footer__contact-title">Почтовый адрес:</p>
        <p class="footer__contact-text">107150, город Москва, Бойцовая 27, офис 326.</p>
      </div>
      <div class="footer__contact-item self-center md:justify-self-center">
        <p class="footer__contact-text"><b>ОГРН:</b> 1187746051371</p>
        <p class="footer__contact-text"><b>ИНН/КПП:</b> 7726420671/772601001</p>
        <div class="mt-4">
          <p><b>График работы:</b></p>
          <p>Пн - Пт: с 9 до 6</p>
          <p>Сб - Вс: выходной</p>
        </div>
      </div>
      <div class="footer__contact-item flex flex-col justify-evenly sm:text-end">
        <p class="footer__contact-title">Связаться с нами:</p>
        <div><b class="footer__contact-text">тел.:</b> <a class="pb-2 hover:text-red"
            href="tel:+79017441182">+79017441182</a></div>
        <div><b class="footer__contact-text">e-mail:</b> <a href="mailto:Inbox@bir-team.ru"
            class="hover:text-red">Inbox@bir-team.ru</a>
          <div class="flex sm:justify-end gap-3 mt-3">
            <a href="https://vk.com/birteam" target="_blank"><img src="/img/icons/icon_vk.svg" alt="birteam-vk"></a>
            <a href="https://t.me/birteamru" target="_blank"><img src="/img/icons/icon_telegram.svg" alt="birteam-telegram"></a>
          </div>
        </div>
      </div>
    </div>
    <p class="text-sm text-center container mx-auto py-3 border-t border-solid border-white">&copy; BIR, {{currentYear}}</p>
  </footer>
</template>

<script setup>
import { ref, defineAsyncComponent } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import {BellIcon} from '@heroicons/vue/24/outline';
import ApplicationLogo from '@/Components/Logo/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown/Dropdown.vue';
import DropdownLink from '@/Components/Dropdown/DropdownLink.vue';
import NavLink from '@/Components/NavLink/NavLink.vue';
import ResponsiveNavLink from '@/Components/NavLink/ResponsiveNavLink.vue';
import DarkModeSwitcher from '@/Components/DarkModeSwitcher.vue';
import BlackApplicationLogo from '@/Components/Logo/BlackApplicationLogo.vue';
import { useAccessControl } from '@/Hooks/accessControl';
const DialogModal = defineAsyncComponent(() => import("@/Components/Modal/DialogModal.vue"));
const Login = defineAsyncComponent(() => import("@/Components/Auth/Login.vue"));
const Register = defineAsyncComponent(() => import("@/Components/Auth/Register.vue"));

defineProps({
  title: String,
});

const { hasRoles } = useAccessControl();

const nameComponent = ref(Login);

const isActive = ref(1);

const changeComponent = (component, id) => {
  nameComponent.value = component;
  isActive.value = id;
};

const currentYear = new Date().getFullYear();

const showingNavigationDropdown = ref(false);

const loginAndRegModal = ref(false);

const showModal = () => {
  loginAndRegModal.value = true;
};

const closeModal = () => {
  loginAndRegModal.value = false;
};

const logout = () => {
  router.post(route('logout'));
};
</script>

<style>
.active {
  @apply text-red;
}
.header {
  @apply container mx-auto sticky top-0 px-4 left-0 mb-4 sm:mb-8 md:mb-14 lg:mb-20 mt-5 z-10 bg-gray-50 dark:bg-darkblue;
}
.navbar-brand {
  @apply w-40 h-14 lg:w-64 lg:h-20;
}
.btn-login {
  @apply border-0 rounded-full self-center bg-red text-white hover:text-white ms-3 py-2 px-4 lg:py-3 lg:px-8 lg:text-xl font-bold text-center no-underline whitespace-nowrap hover:shadow-inset;
}
.footer {
  @apply container mx-auto text-darkblue dark:text-white px-4 mt-4 sm:mt-8 md:mt-14 lg:mt-20;
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
