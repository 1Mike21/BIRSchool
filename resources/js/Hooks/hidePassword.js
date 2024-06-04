import { computed, ref } from "vue";

export const useHidePassword = () => {
  const passwordVisible = ref(false);

  const toggleVisibility = () => {
    passwordVisible.value = !passwordVisible.value;
  }

  const checkType = computed(() => {
    return passwordVisible.value ? 'text' : 'password';
  });

  return { passwordVisible, toggleVisibility, checkType }
}
