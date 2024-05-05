import { onBeforeUnmount, onMounted, ref } from "vue";

export function useSidebar () {
  const isSidebarOpen = ref(true);
  const isSubmenuOpen = ref(false);

  const toggleSidebar = () => isSidebarOpen.value = !isSidebarOpen.value;

  const toggleSubmenu = () => isSubmenuOpen.value = !isSubmenuOpen.value;

  onMounted(() => {
    const mediaQuery = window.matchMedia("(min-width:768px)");
    isSidebarOpen.value = mediaQuery.matches;
    const listener = e => isSidebarOpen.value = e.matches;
    mediaQuery.addListener(listener);
  });

  onBeforeUnmount(() => mediaQuery.removeListener(listener));


  return {
    isSidebarOpen, isSubmenuOpen, toggleSidebar, toggleSubmenu
  }
}
