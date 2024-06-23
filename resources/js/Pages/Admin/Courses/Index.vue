<template>

  <Head title="Управление курсами" />

  <div class="mt-3 mb-5 sm:flex items-center justify-between">
    <div class="mb-1 w-full">
      <div class="sm:flex">
        <div class="sm:flex items-center sm:divide-x sm:divide-gray-100 mb-3 sm:mb-0">
          <form class="lg:pr-3" action="#" method="GET">
            <label for="courses-search" class="sr-only">Search</label>
            <div class="relative lg:w-64 xl:w-96">
              <input type="text" name="email" id="courses-search"
                class="bg-white border-2 border-darkblue text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton w-full p-2.5"
                placeholder="Поиск...">
            </div>
          </form>
        </div>
        <div class="flex items-center ml-auto">
          <AdminButton as="link" hasIcon="true" :href="route('admin.courses.create')">
            <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd">
              </path>
            </svg>
            Добавить курс
          </AdminButton>
        </div>
      </div>
    </div>
  </div>
  <!-- Table with Courses -->
  <Table v-if="courses.meta.total > 0">
    <template #header>
      <TableRow>
        <TableHeader>Курс</TableHeader>
        <TableHeader>Описание</TableHeader>
        <TableHeader>Цена</TableHeader>
        <TableHeader>Группа</TableHeader>
        <TableHeader>Видимость</TableHeader>
        <TableHeader></TableHeader>
      </TableRow>
    </template>
    <TableRow v-for="course in courses.data" :key="course.id">
      <TableColumn class="flex items-center gap-x-3">
        <img class="h-10 w-10" :src="course.icon" :alt="course.title">
        <span class="max-w-20 text-wrap">{{ course.title }}</span>
      </TableColumn>
      <TableColumn class="max-h-5 text-wrap truncate">
        {{ course.description }}
      </TableColumn>
      <TableColumn>
        {{ course.price }}
      </TableColumn>
      <TableColumn>
        {{ course.group.title }}
      </TableColumn>
      <TableColumn>
        <!-- {{ course. }} -->
      </TableColumn>
      <TableColumn class="space-x-3 text-right">
        <AdminButton :href="route('admin.courses.show', course.id)" class="bg-[#00ADEB] hover:bg-[#24C4FF]">
          <Show />
        </AdminButton>
        <AdminButton :href="route('admin.courses.edit', course.id)" class="bg-[#08B581] hover:bg-[#08DD9C]">
          <Edit />
        </AdminButton>
        <AdminDangerButton @click="showModal(course.id)" />
      </TableColumn>
    </TableRow>
    <template #pagination>
      <Pagination :meta="courses.meta" />
    </template>
  </Table>

  <div v-else class="text-center font-bold text-xl dark:text-white">
    Курсов пока нет
  </div>

  <!-- Delete Course Modal -->
  <DialogModal :show="showConfirmDeleteModal" max-width="md" @close="closeModal">
    <template #title />
    <template #content>
      <img src="/img/icons/exclamation-mark.svg" alt="delete" class="h-36 w-36 mx-auto">
      <h3 class="text-black text-lg md:text-xl font-normal mt-5 mb-6">Вы уверены, что хотите удалить выбранный курс?</h3>
    </template>
    <template #footer>
      <AdminButton as="link" method="DELETE" :href="route('admin.courses.destroy', parameter)" @click="closeModal"
        class="mr-3">Да</AdminButton>
      <SecondaryButton @click="closeModal">Нет</SecondaryButton>
    </template>
  </DialogModal>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import AdminButton from '@/Components/Button/AdminButton.vue';
import AdminDangerButton from '@/Components/Button/AdminDangerButton.vue';
import SecondaryButton from '@/Components/Button/SecondaryButton.vue';
import Table from '@/Components/Table/Table.vue';
import TableRow from '@/Components/Table/TableRow.vue';
import TableColumn from '@/Components/Table/TableColumn.vue';
import TableHeader from '@/Components/Table/TableHeader.vue';
import Pagination from '@/Components/Pagination.vue';
import Edit from '@/Components/Icons/Edit.vue';
import Show from '@/Components/Icons/Show.vue';
import { useConfirmDeleteModal } from '@/Hooks/confirmDeleteModal';
import { defineAsyncComponent } from 'vue';

defineOptions({ layout: AdminLayout });

const DialogModal = defineAsyncComponent(() => import("@/Components/Modal/DialogModal.vue"));

const { showConfirmDeleteModal, closeModal, showModal, parameter } = useConfirmDeleteModal();

const props = defineProps({
  courses: {
    type: Array,
  }
});
</script>
