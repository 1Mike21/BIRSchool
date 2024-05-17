import { ref } from "vue";
import { useForm } from '@inertiajs/vue3';

const form = useForm({})

export const useConfirmDeleteModal = () => {
  const showConfirmDeleteModal = ref(false);

  const closeModal = () => {
    showConfirmDeleteModal.value = false;
  }

  const showModal = () => {
    showConfirmDeleteModal.value = true;
  }

  const deleteData = (id, route) => {
    form.delete(route, {
      onSuccess: () => closeModal()
    });
  }

  return { showConfirmDeleteModal, closeModal, showModal, deleteData }
}
