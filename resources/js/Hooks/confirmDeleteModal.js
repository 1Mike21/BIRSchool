import { ref } from "vue";

export const useConfirmDeleteModal = () => {
  const showConfirmDeleteModal = ref(false);
  const parameter = ref({});

  const closeModal = () => {
    showConfirmDeleteModal.value = false;
  }

  const showModal = (id) => {
    showConfirmDeleteModal.value = true;
    parameter.value = id;
  }

  return { showConfirmDeleteModal, closeModal, showModal, parameter }
}
