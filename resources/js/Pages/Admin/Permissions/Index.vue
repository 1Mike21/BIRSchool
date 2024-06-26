<template>

  <Head title="Разрешения" />
  <div class="mt-3 mb-5 sm:flex items-center justify-between">
    <div class="mb-1 w-full">
      <div class="sm:flex">
        <div class="sm:flex items-center sm:divide-x sm:divide-gray-100 mb-3 sm:mb-0">
          <form class="lg:pr-3" action="#" method="GET">
            <label for="permissions-search" class="sr-only">Search</label>
            <div class="relative lg:w-64 xl:w-96">
              <input type="text" name="email" id="permissions-search"
                class="bg-white border-2 border-darkblue text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton w-full p-2.5"
                placeholder="Поиск...">
            </div>
          </form>
        </div>
        <div class="flex items-center ml-auto">
          <AdminButton as="link" hasIcon="true" :href="route('admin.permissions.create')">
            <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd">
              </path>
            </svg>
            Новое разрешение
          </AdminButton>
        </div>
      </div>
    </div>
  </div>
  <!-- Table with Permissions -->
  <Table v-if="permissions.length > 0">
    <template #header>
      <TableRow>
        <TableHeader>Разрешение</TableHeader>
        <TableHeader></TableHeader>
      </TableRow>
    </template>
    <TableRow v-for="permission in permissions" :key="permission.id">
      <TableColumn>{{ permission.name }}</TableColumn>
      <TableColumn class="space-x-3">
        <AdminButton :href="route('admin.permissions.edit', permission.id)" class="bg-[#08B581] hover:bg-[#08DD9C]">
          <Edit />
        </AdminButton>
        <AdminDangerButton @click="showModal(permission.id)" />
      </TableColumn>
    </TableRow>
  </Table>

  <div v-else class="text-center font-bold text-xl dark:text-white">
    Разрешений пока нет
  </div>

  <!-- Delete Permission Modal -->
  <DialogModal :show="showConfirmDeleteModal" max-width="md" @close="closeModal">
    <template #title />
    <template #content>
      <img src="/img/icons/exclamation-mark.svg" alt="delete" class="h-36 w-36 mx-auto">
      <h3 class="text-black text-xl font-normal mt-5 mb-6">Вы уверены, что хотите удалить выбранное разрешение?
      </h3>
    </template>
    <template #footer>
      <AdminButton as="link" method="DELETE" :href="route('admin.permissions.destroy', parameter)" @click="closeModal" class="mr-3">Да</AdminButton>
      <SecondaryButton @click="closeModal">Нет</SecondaryButton>
    </template>
  </DialogModal>
</template>

<script setup>
import { defineAsyncComponent } from 'vue';
import AdminLayout from '@/Layouts/AdminLayout.vue';
import AdminButton from '@/Components/Button/AdminButton.vue';
import AdminDangerButton from '@/Components/Button/AdminDangerButton.vue';
import Table from '@/Components/Table/Table.vue';
import TableRow from '@/Components/Table/TableRow.vue';
import TableColumn from '@/Components/Table/TableColumn.vue';
import TableHeader from '@/Components/Table/TableHeader.vue';
import Edit from '@/Components/Icons/Edit.vue';
import { useConfirmDeleteModal } from '@/Hooks/confirmDeleteModal';
import { Head } from '@inertiajs/vue3';
const DialogModal = defineAsyncComponent(() => import("@/Components/Modal/DialogModal.vue"));
import SecondaryButton from '@/Components/Button/SecondaryButton.vue';

defineOptions({ layout: AdminLayout });

const props = defineProps({
  permissions: {
    type: Object,
    require: true,
  }
});

const { showConfirmDeleteModal, closeModal, showModal, parameter } = useConfirmDeleteModal();
</script>
