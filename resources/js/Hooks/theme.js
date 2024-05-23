import { onBeforeMount, ref } from "vue"

const darkMode = ref(false);
const userTheme = localStorage.getItem('theme');
const systemTheme = window.matchMedia('(prefers-color-scheme: dark)').matches;

export const useTheme = () => {


  const element = document.documentElement;

  const checkTheme = () => {
    if (userTheme === 'dark' || (!userTheme && systemTheme)) {
      element.classList.add('dark');
    }
    else element.classList.remove('dark');
  };

  const toggleTheme = () => {
    if (element.classList.contains('dark')) {
      element.classList.remove('dark');
      localStorage.setItem('theme', 'light');
      darkMode.value = !darkMode.value;
      return;
    }
    element.classList.add('dark');
    localStorage.setItem('theme', 'dark');
    darkMode.value = !darkMode.value;
  };

  onBeforeMount(() => {
    checkTheme();
  });

  return { darkMode, toggleTheme }
}
