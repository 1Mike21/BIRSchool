<template>

  <Head title="Пользователи" />

  <div class="mt-3 mb-5 sm:flex items-center justify-between">
    <div class="mb-1 w-full">
      <div class="sm:flex">
        <div class="sm:flex items-center sm:divide-x sm:divide-gray-100 mb-3 sm:mb-0">
          <form class="lg:pr-3" action="#" method="GET">
            <label for="users-search" class="sr-only">Search</label>
            <div class="relative lg:w-64 xl:w-96">
              <input type="text" name="email" id="users-search"
                class="bg-white border-2 border-darkblue text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton w-full p-2.5"
                placeholder="Поиск...">
            </div>
          </form>
        </div>
        <div class="flex items-center ml-auto">
          <AdminButton as="link" hasIcon="true" :href="route('admin.users.create')">
            <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd">
              </path>
            </svg>
            Добавить пользователя
          </AdminButton>
        </div>
      </div>
    </div>
  </div>
  <!-- Table with Users -->
  <Table v-if="users.meta.total > 0">
    <template #header>
      <TableRow>
        <TableHeader>Пользователь</TableHeader>
        <TableHeader>Номер телефона</TableHeader>
        <TableHeader>Роль</TableHeader>
        <TableHeader>Статус</TableHeader>
        <TableHeader>Дата регистрации</TableHeader>
        <TableHeader></TableHeader>
      </TableRow>
    </template>
    <TableRow v-for="user in users.data" :key="user.id">
      <TableColumn class="flex items-center gap-x-3 mr-6">
        <img class="h-10 w-10 rounded-full" :src="user.profile_photo_url" :alt="user.surname + '' + user.name">
        <div class="text-sm font-normal">
          <div class="text-base font-semibold">{{ user.surname }} {{ user.name }}</div>
          <div class="text-sm font-normal text-gray-700 dark:text-gray-300">{{ user.email }}</div>
        </div>
      </TableColumn>
      <TableColumn>{{ user.phone_number }}</TableColumn>
      <template v-for="role in user.roles" :key="role.id">
        <TableColumn>
          {{ role.name }}
        </TableColumn>
        <TableColumn>
          <div class="h-2.5 w-2.5 rounded-full bg-green-500"></div>
          <!-- <div class="h-2.5 w-2.5 rounded-full bg-rose-600"></div> -->
        </TableColumn>
        <TableColumn>{{ user.created_at }}</TableColumn>
        <TableColumn class="space-x-3 text-right">
          <AdminButton v-show="role.name == 'Ученик'" :href="route('admin.users.show', user.id)"
            class="bg-[#00ADEB] hover:bg-[#24C4FF]">
            <Show />
          </AdminButton>
          <AdminButton :href="route('admin.users.edit', user.id)" class="bg-[#08B581] hover:bg-[#08DD9C]">
            <Edit />
          </AdminButton>
          <AdminDangerButton @click="showModal(user.id)" />
        </TableColumn>
      </template>
    </TableRow>
    <template #pagination>
      <Pagination :meta="users.meta" />
    </template>
  </Table>
  <div v-else class="text-center font-bold text-xl dark:text-white">
    Пользователей пока нет
  </div>

  <!-- Delete User Modal -->
  <DialogModal :show="showConfirmDeleteModal" max-width="md" @close="closeModal">
    <template #title />
    <template #content>
      <img src="/img/icons/exclamation-mark.svg" alt="delete" class="h-36 w-36 mx-auto">
      <h3 class="text-black text-lg md:text-xl font-normal mt-5 mb-6">Вы уверены, что хотите удалить выбранного пользователя?</h3>
    </template>
    <template #footer>
      <AdminButton as="link" method="DELETE" :href="route('admin.users.destroy', parameter)" @click="closeModal" class="mr-3">Да</AdminButton>
      <SecondaryButton @click="closeModal">Нет</SecondaryButton>
    </template>
  </DialogModal>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import { defineAsyncComponent } from 'vue';
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
const DialogModal = defineAsyncComponent(() => import("@/Components/Modal/DialogModal.vue"));

defineOptions({ layout: AdminLayout });

const props = defineProps({
  users: {
    type: Array,
  }
});

const { showConfirmDeleteModal, closeModal, showModal, parameter } = useConfirmDeleteModal();
</script>
