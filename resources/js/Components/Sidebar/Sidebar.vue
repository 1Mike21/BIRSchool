<template>
  <aside
    :class="[ isSidebarOpen ? 'w-64' : 'w-14', 'fixed flex flex-col top-24 left-0 dark:bg-white dark:bg-opacity-5 bg-darkblue h-full transition-all duration-300 z-10' ]">
    <div class="no-scrollbar flex flex-col overflow-x-hidden overflow-y-auto duration-300 ease-linear">
      <!-- Sidebar Menu -->
      <nav class="mt-5 py-4 px-4 lg:mt-4">
        <template v-for="menuGroup in menuGroups" :key="menuGroup.name">
          <div>
            <h3 :class="['mb-2 ml-4 uppercase text-white', { hidden: !isSidebarOpen }]">{{ menuGroup.name }}</h3>

            <ul class="mb-8 flex flex-col gap-x-4">
              <SidebarItem v-for="menuItem in menuGroup.menuItems" :item="menuItem" :key="index" />
            </ul>
          </div>
        </template>
        <span
          @click="toggleSidebar"
          class="cursor-pointer flex"
        >
          <svg :class="{ 'rotate-180': isSidebarOpen }" fill="none" height="25" viewBox="0 0 24 24" width="25"
            xmlns="http://www.w3.org/2000/svg">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path
                d="M12.0519 14.8285L13.4661 16.2427L17.7088 12L13.4661 7.7574L12.0519 9.17161L13.8804 11H6.34321V13H13.8803L12.0519 14.8285Z"
                fill="#ffffff"></path>
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M19.7782 19.7782C24.0739 15.4824 24.0739 8.51759 19.7782 4.22183C15.4824 -0.0739417 8.51759 -0.0739417 4.22183 4.22183C-0.0739417 8.51759 -0.0739417 15.4824 4.22183 19.7782C8.51759 24.0739 15.4824 24.0739 19.7782 19.7782ZM18.364 18.364C21.8787 14.8492 21.8787 9.15076 18.364 5.63604C14.8492 2.12132 9.15076 2.12132 5.63604 5.63604C2.12132 9.15076 2.12132 14.8492 5.63604 18.364C9.15076 21.8787 14.8492 21.8787 18.364 18.364Z"
                fill="#ffffff"></path>
            </g>
          </svg>
          <p :class="['text-white font-semibold ml-2', { hidden: !isSidebarOpen }]">Свернуть меню</p>
        </span>
      </nav>
      <!-- /Sidebar Menu -->
    </div>
  </aside>
</template>

<script setup>
import SidebarItem from '@/Components/Sidebar/SidebarItem.vue';
import { useSidebar } from '@/Store/sidebar';

const props = defineProps({
  menuGroups: {
    type: Array,
    default: () => [],
  }
})

const { isSidebarOpen, toggleSidebar } = useSidebar();
</script>
