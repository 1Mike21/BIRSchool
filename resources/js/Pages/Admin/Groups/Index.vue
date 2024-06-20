<template>

  <Head title="Управление группами" />

  <div class="mt-3 mb-5 sm:flex items-center justify-between">
    <div class="mb-1 w-full">
      <div class="sm:flex">
        <div class="sm:flex items-center sm:divide-x sm:divide-gray-100 mb-3 sm:mb-0">
          <form class="lg:pr-3" action="#" method="GET">
            <label for="groups-search" class="sr-only">Search</label>
            <div class="relative lg:w-64 xl:w-96">
              <input type="text" name="email" id="groups-search"
                class="bg-white border-2 border-darkblue text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton w-full p-2.5"
                placeholder="Поиск...">
            </div>
          </form>
        </div>
        <div class="flex items-center ml-auto">
          <AdminButton as="link" hasIcon="true" :href="route('admin.groups.create') ">
            <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd">
              </path>
            </svg>
            Добавить группу
          </AdminButton>
        </div>
      </div>
      <div class="group-course mt-8">
        <div class="group-course__item" v-for="group in groups" :key="group.id">
          <img class="w-16 mx-auto" :src="group.icon" :alt="group.title">
          <h4 class="text-red font-medium text-2xl">{{ group.title }}</h4>
          <h5 class="dark:text-white text-black text-lg underline underline-offset-8 decoration-red">{{ group.level
            }}
          </h5>
          <h6 class="dark:text-white text-black text-base">{{ group.description }}</h6>
          <h6 class="dark:text-white text-black text-base">Статус: {{ checkStatusGroup(group.is_active) }}</h6>
          <div class="flex flex-col mx-auto gap-y-3">
            <Link class="btn-more-detail" :href="route('admin.groups.show', group.slug)">Описание группы</Link>
            <AdminButton :href="route('admin.groups.edit', group.slug)" class="bg-[#08B581] hover:bg-[#08DD9C]">
              <Edit />
              Редактировать
            </AdminButton>
            <AdminDangerButton @click="showModal(group.slug)">
              Удалить
            </AdminDangerButton>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Delete Group Modal -->
  <DialogModal :show="showConfirmDeleteModal" max-width="md" @close="closeModal">
    <template #title />
    <template #content>
      <img src="/img/icons/exclamation-mark.svg" alt="delete" class="h-36 w-36 mx-auto">
      <h3 class="text-black text-xl font-normal mt-5 mb-6">Вы уверены, что хотите удалить группу?</h3>
    </template>
    <template #footer>
      <AdminButton as="link" method="DELETE" :href="route('admin.groups.destroy', parameter)" @click="closeModal" class="mr-3">Да</AdminButton>
      <SecondaryButton @click="closeModal">Нет</SecondaryButton>
    </template>
  </DialogModal>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import AdminButton from '@/Components/Button/AdminButton.vue';
import AdminDangerButton from '@/Components/Button/AdminDangerButton.vue';
import SecondaryButton from '@/Components/Button/SecondaryButton.vue';
import Edit from '@/Components/Icons/Edit.vue';
import { useConfirmDeleteModal } from '@/Hooks/confirmDeleteModal';
import { Head, Link } from '@inertiajs/vue3';
import { defineAsyncComponent } from 'vue';

const DialogModal = defineAsyncComponent(() => import("@/Components/Modal/DialogModal.vue"));

defineOptions({ layout: AdminLayout });

defineProps({
  groups: Array
});

const { showConfirmDeleteModal, closeModal, showModal, parameter } = useConfirmDeleteModal();

const checkStatusGroup = (status) => {
  return status ? 'Активна' : 'Не активна';
}
</script>

<style scoped>
.group-course {
  @apply mx-auto grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-8;
}
.group-course__item {
  @apply flex flex-col gap-y-3 bg-white dark:bg-opacity-5 border-2 min-h-[310px] w-full max-sm:max-w-[330px] border-darkblue dark:border-white rounded-28 text-center p-3 pb-5 shadow-2xl dark:shadow-none;
}
.btn-more-detail {
  @apply border-0 rounded-lg self-center bg-[#00ADEB] text-white py-2 px-4 lg:px-6 text-center no-underline whitespace-nowrap hover:bg-[#24C4FF];
}
</style>
