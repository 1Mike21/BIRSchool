<template>

  <Head title="Работы учеников" />

  <div class="mt-3 mb-5">
    <AdminButton as="link" hasIcon="true" :href="route('admin.students-projects.create')">
      <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd">
        </path>
      </svg>
      Загрузить работу
    </AdminButton>
  </div>

  <div class="grid grid-cols-1 min-[600px]:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 min-[2000px]:grid-cols-5 gap-14">
    <div class="relative">
      <AdminDangerButton @click="showModal()" class="absolute top-3 right-3 bg-opacity-50" />
      <img class="h-auto w-auto border dark:border-none shadow-xl dark:shadow-none"
        src="/storage/slider_student_portfolio/work1.jpg" alt="Работа ученика">
      <p class="dark:text-white text-black mt-2">Статус: Активна</p>
    </div>
  </div>
  <!-- Delete Student Project Modal -->
  <DialogModal :show="showConfirmDeleteModal" max-width="md" @close="closeModal">
    <template #title />
    <template #content>
      <img src="/img/icons/exclamation-mark.svg" alt="delete" class="h-36 w-36 mx-auto">
      <h3 class="text-black text-lg md:text-xl font-normal mt-5 mb-6">Вы уверены, что хотите удалить работу ученика?</h3>
    </template>
    <template #footer>
      <AdminButton as="link" method="DELETE" :href="route('admin.students-projects.destroy', parameter)" @click="closeModal" class="mr-3">Да</AdminButton>
      <SecondaryButton @click="closeModal">Нет</SecondaryButton>
    </template>
  </DialogModal>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import AdminButton from '@/Components/Button/AdminButton.vue';
import AdminDangerButton from '@/Components/Button/AdminDangerButton.vue';
import { useConfirmDeleteModal } from '@/Hooks/confirmDeleteModal';

defineOptions({ layout: AdminLayout });

// const { showConfirmDeleteModal, closeModal, showModal, parameter } = useConfirmDeleteModal();
// const DialogModal = defineAsyncComponent(() => import("@/Components/Modal/DialogModal.vue"));
</script>
