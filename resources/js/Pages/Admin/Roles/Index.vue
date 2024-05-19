<template>

  <Head title="Роли" />
  <div class="p-4 sm:flex items-center justify-between lg:mt-1.5">
    <div class="mb-1 w-full">
      <div class="sm:flex">
        <div class="hidden sm:flex items-center sm:divide-x sm:divide-gray-100 mb-3 sm:mb-0">
          <form class="lg:pr-3" action="#" method="GET">
            <label for="users-search" class="sr-only">Search</label>
            <div class="mt-1 relative lg:w-64 xl:w-96">
              <input type="text" name="email" id="users-search"
                class="bg-white border-2 border-darkblue text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5"
                placeholder="Поиск...">
            </div>
          </form>
          <div class="flex space-x-1 pl-0 sm:pl-2 mt-3 sm:mt-0">
            <a href="#"
              class="text-gray-500 hover:text-rose-800 cursor-pointer p-1 hover:bg-gray-100 rounded inline-flex justify-center">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                  clip-rule="evenodd"></path>
              </svg>
            </a>
          </div>
        </div>
        <div class="flex items-center ml-auto">
          <AdminButton as="link" hasIcon="true" :href="route('admin.roles.create')">
            <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd">
              </path>
            </svg>
            Новая роль
          </AdminButton>
        </div>
      </div>
    </div>
  </div>
  <h1>Роли</h1>
  <!-- Table with Roles -->
  <Table v-if="roles.length > 0">
    <template #header>
      <TableRow>
        <TableHeader>Роль</TableHeader>
        <TableHeader></TableHeader>
      </TableRow>
    </template>
    <TableRow v-for="role in roles" :key="role.id">
      <TableColumn>{{ role.name }}</TableColumn>
      <TableColumn class="space-x-2">
        <AdminButton :href="route('admin.roles.edit', role.id)" class="bg-[#08B581] hover:bg-[#08DD9C]">
          <Edit />
        </AdminButton>
        <AdminDangerButton @click="showModal(role.id)" />
      </TableColumn>
    </TableRow>
  </Table>

  <div v-else class="text-center font-bold text-xl">
    Ролей пока нет
  </div>

  <!-- Delete Role Modal -->
  <DialogModal :show="showConfirmDeleteModal" max-width="md" @close="closeModal">
    <template #title />
    <template #content>
      <img src="/img/icon/exclamation-mark.svg" alt="delete" class="h-36 w-36 mx-auto">
      <h3 class="text-black text-xl font-normal mt-5 mb-6">Вы уверены, что хотите удалить выбранную роль?
      </h3>
    </template>
    <template #footer>
      <AdminButton as="link" method="DELETE" :href="route('admin.roles.destroy', parameter)" @click="closeModal">Да
      </AdminButton>
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
  roles: {
    type: Object,
    require: true,
  }
});

const { showConfirmDeleteModal, closeModal, showModal, parameter } = useConfirmDeleteModal();
</script>
