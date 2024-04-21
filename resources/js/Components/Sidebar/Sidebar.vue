<template>
  <aside
    class="fixed flex flex-col top-24 left-0 w-14 hover:w-64 md:w-64 bg-darkblue h-full transition-all duration-300 z-10"
    >
    <div class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear">
      <!-- Sidebar Menu -->
      <nav class="mt-5 py-4 px-4 lg:mt-4">
        <template v-for="menuGroup in menuGroups" :key="menuGroup.name">
          <div>
            <h3 class="mb-4 ml-4 text-lg font-semibold text-white">{{ menuGroup.name }}</h3>

            <ul class="mb-6 flex flex-col gap-1.5">
              <SidebarItem v-for="(menuItem, index) in menuGroup.menuItems" :item="menuItem" :key="index" :index="index"/>
            </ul>
          </div>
        </template>
      </nav>
      <!-- Sidebar Menu -->
    </div>
  </aside>
</template>

<script setup>
import SidebarItem from '@/Components/Sidebar/SidebarItem.vue';
import { ref } from 'vue';

const props = defineProps({
  menuGroups: {
    type: Array,
    default: () => [],
  }
})
</script>
