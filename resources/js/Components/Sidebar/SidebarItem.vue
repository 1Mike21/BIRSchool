<template>
  <li>
    <SidebarLink
      :dropdown="item.children"
      :active="route().current(item.route)"
      :href="route(item.route)"
      @click.prevent="toggleSubmenu"
      :class="isSidebarOpen ? 'p-2 px-4' : 'p-1 mb-2'"
    >
    <span v-html="item.icon"></span>

    <span :class="{ 'hidden': !isSidebarOpen }">
      {{ item.label }}
    </span>

    <svg
      v-if="item.children"
      :class="{ 'rotate-180': isSubmenuOpen, hidden: !isSidebarOpen }"
      class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
      fill="none"
      height="20"
      viewBox="0 0 20 20"
      width="20"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path fill-rule="evenodd" clip-rule="evenodd"
        d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
        fill="" />
    </svg>
    </SidebarLink>

    <!-- Dropdown Menu Start -->
    <div
      v-show="isSubmenuOpen && isSidebarOpen"
      class="translate transform overflow-hidden"
    >
      <SidebarDropdown v-if="item.children" :items="item.children" />
    </div>
    <!-- Dropdown Menu End -->
  </li>
</template>

<script setup>
import { useSidebar } from '@/Hooks/sidebar';
import SidebarDropdown from '@/Components/Sidebar/SidebarDropdown.vue';
import SidebarLink from '@/Components/Sidebar/SidebarLink.vue';
import { useAccessControl } from '@/Hooks/accessControl';
import { watch } from 'vue';

const props = defineProps({
  item: {
    type: String,
    default: '',
  },
  checkRoles: {
    type: Boolean,
    default: false
  }
});

const { hasRoles } = useAccessControl();

watch(() => props.checkRoles, newCheckRoles => {
  if (newCheckRoles) hasRoles(props.item.roles);
});

const { isSidebarOpen, isSubmenuOpen, toggleSubmenu } = useSidebar();
</script>
