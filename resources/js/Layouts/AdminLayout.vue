<template>

  <Head :title="title" />

  <Banner />

  <Sidebar :menuGroups="menuGroups" />
  <div class="h-full bg-white">
    <header class="fixed flex justify-between h-24 w-full z-10">
      <div class="w-full flex items-center justify-between h-24 text-white bg-red p-3">
        <div class="flex items-center justify-start pl-3 w-14 md:w-64 h-14 border-none">
          <Link :href="route('index')">
          <WhiteApplicationLogo class="navbar-brand" />
          </Link>
        </div>
        <!-- Settings Options -->
        <div class="flex justify-between items-center h-14 header-right gap-4">
          <div v-if="$page.props.auth.user" class="hidden sm:flex sm:items-center ms-1 xl:ms-6">
            <button type="button"
              class="relative rounded-full p-1 text-white focus:outline-none focus:ring-2 focus:ring-white">
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
                class="relative mt-2 sm:ml-auto rounded-full p-1 text-white  focus:outline-none focus:ring-2 focus:ring-white">
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

    <main class="h-full ml-14 mt-24 mb-10 md:ml-64">
      <slot />
    </main>
  </div>
</template>

<script setup>
import { ref } from 'vue';
import { Head, Link, router } from '@inertiajs/vue3';
import { BellIcon } from '@heroicons/vue/24/solid';
import Banner from '@/Components/Banner.vue';
import WhiteApplicationLogo from '@/Components/WhiteApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import Sidebar from '@/Components/Sidebar/Sidebar.vue';

const showingNavigationDropdown = ref(false);

const logout = () => {
  router.post(route('logout'));
};

const menuGroups = ref([
  {
    name: 'Панель админа',
    menuItems: [
      {
        icon: `<svg
          width="18"
          height="18"
          viewBox="0 0 448 448"
          fill="none"
          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <rect width="448" height="448" fill="url(#pattern0_1108_420)"/>
          <defs>
          <pattern id="pattern0_1108_420" patternContentUnits="objectBoundingBox" width="1" height="1">
          <use xlink:href="#image0_1108_420" transform="scale(0.00223214)"/>
          </pattern>
          <image id="image0_1108_420" width="448" height="448" xlink:href="data:image/png;base64,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MAETMIGeCFgAewLrbk3ABEzABMomYAEse37snQmYgAmYQE8ELIA9gXW3JmACJmACZROwAJY9P/bOBEzABEygJwIWwJ7AulsTMAETMIGyCVgAy54fe2cCJmACJtATAQtgT2DdrQmYgAmYQNkELIBlz4+9MwETMAET6ImABbAnsO7WBEzABEygbAIWwLLnx96ZgAmYgAn0RMAC2BNYd2sCJmACJlA2AQtg2fNj70zABEzABHoiYAHsCay7NQETMAETKJuABbDs+bF3JmACJmACPRGwAPYE1t2agAmYgAmUTcACWPb82DsTMAETMIGeCIQAfqanvt2tCZiACZiACRRLgMV6ZsdMwARMwARMoEcCFsAe4bprEzABEzCBcglYAMudG3tmAiZgAibQIwELYI9w3bUJmIAJmEC5BCyA5c6NPTMBEzABE+iRgAWwR7ju2gRMwARMoFwCFsBy58aemYAJmIAJ9EjAAtgjXHdtAiZgAiZQLgELYLlzY89MwARMwAR6JGAB7BGuuzYBEzABEyiXgAWw3LmxZyZgAiZgAj0SsAD2CNddm4AJmIAJlEvg/wM9/lQAIz+fuwAAAABJRU5ErkJggg=="/>
          </defs>
          </svg>`,
        label: 'Пользователи',
        route: '#',
      },
      {
        icon: `<svg
                  class="fill-current"
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M15.7499 2.9812H14.2874V2.36245C14.2874 2.02495 14.0062 1.71558 13.6405 1.71558C13.2749 1.71558 12.9937 1.99683 12.9937 2.36245V2.9812H4.97803V2.36245C4.97803 2.02495 4.69678 1.71558 4.33115 1.71558C3.96553 1.71558 3.68428 1.99683 3.68428 2.36245V2.9812H2.2499C1.29365 2.9812 0.478027 3.7687 0.478027 4.75308V14.5406C0.478027 15.4968 1.26553 16.3125 2.2499 16.3125H15.7499C16.7062 16.3125 17.5218 15.525 17.5218 14.5406V4.72495C17.5218 3.7687 16.7062 2.9812 15.7499 2.9812ZM1.77178 8.21245H4.1624V10.9968H1.77178V8.21245ZM5.42803 8.21245H8.38115V10.9968H5.42803V8.21245ZM8.38115 12.2625V15.0187H5.42803V12.2625H8.38115ZM9.64678 12.2625H12.5999V15.0187H9.64678V12.2625ZM9.64678 10.9968V8.21245H12.5999V10.9968H9.64678ZM13.8374 8.21245H16.228V10.9968H13.8374V8.21245ZM2.2499 4.24683H3.7124V4.83745C3.7124 5.17495 3.99365 5.48433 4.35928 5.48433C4.7249 5.48433 5.00615 5.20308 5.00615 4.83745V4.24683H13.0499V4.83745C13.0499 5.17495 13.3312 5.48433 13.6968 5.48433C14.0624 5.48433 14.3437 5.20308 14.3437 4.83745V4.24683H15.7499C16.0312 4.24683 16.2562 4.47183 16.2562 4.75308V6.94683H1.77178V4.75308C1.77178 4.47183 1.96865 4.24683 2.2499 4.24683ZM1.77178 14.5125V12.2343H4.1624V14.9906H2.2499C1.96865 15.0187 1.77178 14.7937 1.77178 14.5125ZM15.7499 15.0187H13.8374V12.2625H16.228V14.5406C16.2562 14.7937 16.0312 15.0187 15.7499 15.0187Z"
                    fill=""
                  />
                </svg>`,
        label: 'Calendar',
        route: '/calendar'
      },
      {
        icon: `<svg
                  class="fill-current"
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M1.43425 7.5093H2.278C2.44675 7.5093 2.55925 7.3968 2.58737 7.31243L2.98112 6.32805H5.90612L6.27175 7.31243C6.328 7.48118 6.46862 7.5093 6.58112 7.5093H7.453C7.76237 7.48118 7.87487 7.25618 7.76237 7.03118L5.428 1.4343C5.37175 1.26555 5.3155 1.23743 5.14675 1.23743H3.88112C3.76862 1.23743 3.59987 1.29368 3.57175 1.4343L1.153 7.08743C1.0405 7.2843 1.20925 7.5093 1.43425 7.5093ZM4.47175 2.98118L5.3155 5.17493H3.59987L4.47175 2.98118Z"
                    fill=""
                  />
                  <path
                    d="M10.1249 2.5031H16.8749C17.2124 2.5031 17.5218 2.22185 17.5218 1.85623C17.5218 1.4906 17.2405 1.20935 16.8749 1.20935H10.1249C9.7874 1.20935 9.47803 1.4906 9.47803 1.85623C9.47803 2.22185 9.75928 2.5031 10.1249 2.5031Z"
                    fill=""
                  />
                  <path
                    d="M16.8749 6.21558H10.1249C9.7874 6.21558 9.47803 6.49683 9.47803 6.86245C9.47803 7.22808 9.75928 7.50933 10.1249 7.50933H16.8749C17.2124 7.50933 17.5218 7.22808 17.5218 6.86245C17.5218 6.49683 17.2124 6.21558 16.8749 6.21558Z"
                    fill=""
                  />
                  <path
                    d="M16.875 11.1656H1.77187C1.43438 11.1656 1.125 11.4469 1.125 11.8125C1.125 12.1781 1.40625 12.4594 1.77187 12.4594H16.875C17.2125 12.4594 17.5219 12.1781 17.5219 11.8125C17.5219 11.4469 17.2125 11.1656 16.875 11.1656Z"
                    fill=""
                  />
                  <path
                    d="M16.875 16.1156H1.77187C1.43438 16.1156 1.125 16.3969 1.125 16.7625C1.125 17.1281 1.40625 17.4094 1.77187 17.4094H16.875C17.2125 17.4094 17.5219 17.1281 17.5219 16.7625C17.5219 16.3969 17.2125 16.1156 16.875 16.1156Z"
                    fill="white"
                  />
                </svg>`,
        label: 'Forms',
        route: '#',
        children: [
          { label: 'Form Elements', route: '/forms/form-elements' },
          { label: 'Form Layout', route: '/forms/form-layout' }
        ]
      },
      {
        icon: `<svg
                  class="fill-current"
                  width="18"
                  height="19"
                  viewBox="0 0 18 19"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_130_9756)">
                    <path
                      d="M15.7501 0.55835H2.2501C1.29385 0.55835 0.506348 1.34585 0.506348 2.3021V15.8021C0.506348 16.7584 1.29385 17.574 2.27822 17.574H15.7782C16.7345 17.574 17.5501 16.7865 17.5501 15.8021V2.3021C17.522 1.34585 16.7063 0.55835 15.7501 0.55835ZM6.69385 10.599V6.4646H11.3063V10.5709H6.69385V10.599ZM11.3063 11.8646V16.3083H6.69385V11.8646H11.3063ZM1.77197 6.4646H5.45635V10.5709H1.77197V6.4646ZM12.572 6.4646H16.2563V10.5709H12.572V6.4646ZM2.2501 1.82397H15.7501C16.0313 1.82397 16.2563 2.04897 16.2563 2.33022V5.2271H1.77197V2.3021C1.77197 2.02085 1.96885 1.82397 2.2501 1.82397ZM1.77197 15.8021V11.8646H5.45635V16.3083H2.2501C1.96885 16.3083 1.77197 16.0834 1.77197 15.8021ZM15.7501 16.3083H12.572V11.8646H16.2563V15.8021C16.2563 16.0834 16.0313 16.3083 15.7501 16.3083Z"
                      fill=""
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_130_9756">
                      <rect width="18" height="18" fill="white" transform="translate(0 0.052124)" />
                    </clipPath>
                  </defs>
                </svg>`,
        label: 'Tables',
        route: '/tables'
      },
      {
        icon: `<svg
                  class="fill-current"
                  width="18"
                  height="18"
                  viewBox="0 0 18 18"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M14.2875 0.506226H3.7125C2.75625 0.506226 1.96875 1.29373 1.96875 2.24998V15.75C1.96875 16.7062 2.75625 17.5219 3.74063 17.5219H14.3156C15.2719 17.5219 16.0875 16.7344 16.0875 15.75V2.24998C16.0313 1.29373 15.2438 0.506226 14.2875 0.506226ZM14.7656 15.75C14.7656 16.0312 14.5406 16.2562 14.2594 16.2562H3.7125C3.43125 16.2562 3.20625 16.0312 3.20625 15.75V2.24998C3.20625 1.96873 3.43125 1.74373 3.7125 1.74373H14.2875C14.5688 1.74373 14.7938 1.96873 14.7938 2.24998V15.75H14.7656Z"
                    fill=""
                  />
                  <path
                    d="M12.7965 2.6156H9.73086C9.22461 2.6156 8.80273 3.03748 8.80273 3.54373V7.25623C8.80273 7.76248 9.22461 8.18435 9.73086 8.18435H12.7965C13.3027 8.18435 13.7246 7.76248 13.7246 7.25623V3.5156C13.6965 3.03748 13.3027 2.6156 12.7965 2.6156ZM12.4309 6.8906H10.0684V3.88123H12.4309V6.8906Z"
                    fill=""
                  />
                  <path
                    d="M4.97773 4.35938H7.03086C7.36836 4.35938 7.67773 4.07812 7.67773 3.7125C7.67773 3.34687 7.39648 3.09375 7.03086 3.09375H4.94961C4.61211 3.09375 4.30273 3.375 4.30273 3.74063C4.30273 4.10625 4.61211 4.35938 4.97773 4.35938Z"
                    fill=""
                  />
                  <path
                    d="M4.97773 7.9312H7.03086C7.36836 7.9312 7.67773 7.64995 7.67773 7.28433C7.67773 6.9187 7.39648 6.63745 7.03086 6.63745H4.94961C4.61211 6.63745 4.30273 6.9187 4.30273 7.28433C4.30273 7.64995 4.61211 7.9312 4.97773 7.9312Z"
                    fill=""
                  />
                  <path
                    d="M13.0789 10.2374H4.97891C4.64141 10.2374 4.33203 10.5187 4.33203 10.8843C4.33203 11.2499 4.61328 11.5312 4.97891 11.5312H13.0789C13.4164 11.5312 13.7258 11.2499 13.7258 10.8843C13.7258 10.5187 13.4164 10.2374 13.0789 10.2374Z"
                    fill=""
                  />
                  <path
                    d="M13.0789 13.8093H4.97891C4.64141 13.8093 4.33203 14.0906 4.33203 14.4562C4.33203 14.8218 4.61328 15.1031 4.97891 15.1031H13.0789C13.4164 15.1031 13.7258 14.8218 13.7258 14.4562C13.7258 14.0906 13.4164 13.8093 13.0789 13.8093Z"
                    fill=""
                  />
                </svg>`,
        label: 'Pages',
        route: '#',
        children: [{ label: 'Settings', route: '/pages/settings' }]
      }
    ]
  },
]);
</script>

<style></style>
