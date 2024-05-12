import { ref } from "vue"

const darkMode = ref(false);

export const useDarkMode = () => {
  const toggleDarkMode = () => {
    darkMode.value = !darkMode.value;

  }
  return { darkMode, toggleDarkMode }
}
