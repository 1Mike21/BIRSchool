<template>
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
          <AdminButton class="w-1/2 justify-center px-3 py-2 sm:w-auto" data-modal-toggle="add-user-modal">
            <svg class="-ml-1 mr-2 h-6 w-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                clip-rule="evenodd"></path>
            </svg>
            Добавить
          </AdminButton>
        </div>
      </div>
    </div>
  </div>
  <!-- Table with Users -->
  <Table :heads="tableHeads">
    <TableRow>
      <TableColumn class="flex items-center gap-x-3 mr-6">
        <img class="h-10 w-10 rounded-full" src="/img/Angelina_1.png" alt="avatar">
        <div class="text-sm font-normal text-gray-500">
          <div class="text-base font-semibold text-black">Ангелина Петелина</div>
          <div class="text-sm font-normal text-gray-700">petelina@yandex.ru</div>
        </div>
      </TableColumn>
      <TableColumn>+7 917 111-22-33</TableColumn>
      <TableColumn>Админ</TableColumn>
      <TableColumn>
        <div class="flex items-center">
          <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>
          <div class="h-2.5 w-2.5 rounded-full bg-rose-600 mr-2"></div>
        </div>
      </TableColumn>
      <TableColumn>05.04.2024</TableColumn>
      <TableColumn class="space-x-2">
        <button type="button" data-modal-toggle="user-modal"
          class="text-white bg-[#00ADEB] hover:bg-[#24C4FF] focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
          <svg class="h-5 w-5" viewBox="0 0 12 12" enable-background="new 0 0 12 12" version="1.1" xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <g>
                <circle cx="6" cy="6" fill="#ffffff" r="1.5"></circle>
                <path
                  d="M6,2C4,2,2,3,0,6c2,3,4,4,6,4s4-1,6-4C10,3,8,2,6,2z M6,8.5C4.621582,8.5,3.5,7.3789063,3.5,6 S4.621582,3.5,6,3.5S8.5,4.6210938,8.5,6S7.378418,8.5,6,8.5z"
                  fill="#ffffff"></path>
              </g>
            </g>
          </svg>
        </button>
        <button type="button" data-modal-toggle="user-modal"
          class="text-white bg-[#08B581] hover:bg-[#08DD9C] focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
            <path fill-rule="evenodd"
              d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
        <button type="button" data-modal-toggle="delete-user-modal"
          class="text-white bg-[#963249] hover:bg-[#b63c58] focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm inline-flex items-center px-3 py-2 text-center">
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </TableColumn>
    </TableRow>
  </Table>
  <!-- Pagination by page -->
  <div class="sticky sm:flex items-center w-full sm:justify-between bottom-0 right-0 p-4">
    <div class="flex items-center mb-4 sm:mb-0">
      <a href="#" class="text-gray-500 hover:text-black cursor-pointer p-1 justify-center">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </a>
      <span class="text-sm font-medium text-gray-500"><span class="text-black font-bold">1</span> из <span
          class="text-black font-bold">15</span></span>
      <a href="#" class="text-gray-500 hover:text-black cursor-pointer p-1 justify-center">
        <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
            clip-rule="evenodd"></path>
        </svg>
      </a>
    </div>
  </div>
  <!-- Edit User Modal -->
  <div class="top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center h-modal sm:h-full" id="user-modal">
    <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
      <!-- Modal content -->
      <div class="bg-white rounded-lg shadow relative">
        <!-- Modal header -->
        <div class="flex items-start justify-between p-5 border-b rounded-t">
          <h3 class="text-xl font-semibold">
            Редактировать информацию о пользователе
          </h3>
          <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
            data-modal-toggle="user-modal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">
          <!-- <form action="#"> -->
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="first-name" class="text-sm font-medium text-black block mb-2">Имя</label>
              <input type="text" name="first-name" id="first-name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5"
                placeholder="Введите имя" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="last-name" class="text-sm font-medium text-black block mb-2">Фамилия</label>
              <input type="text" name="last-name" id="last-name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5"
                placeholder="Введите фамилию" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="email" class="text-sm font-medium text-black block mb-2">Email</label>
              <input type="email" name="email" id="email"
                class="shadow-sm bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5"
                placeholder="example@yandex.ru" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="phone-number" class="text-sm font-medium text-black block mb-2">Номер телефона</label>
              <input type="number" name="phone-number" id="phone-number"
                class="shadow-sm bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5"
                placeholder="+7 (926) 345-67-89" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="role_id" class="text-sm font-medium text-black block mb-2">Роль</label>
              <select name="role_id" id="role_id"
                class="shadow-sm bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5">
                <option value="">-- Выберите роль --</option>
                <option value="">Админ</option>
                <option value="">Куратор</option>
                <option value="">Ученик</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="current-password" class="text-sm font-medium text-gray-900 block mb-2">Новый пароль</label>
              <input type="password" name="current-password" id="current-password"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5"
                placeholder="••••••••" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="new-password" class="text-sm font-medium text-gray-900 block mb-2">Подтвердите пароль</label>
              <input type="password" name="new-password" id="new-password"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5"
                placeholder="••••••••" required>
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="items-center p-6 border-t border-gray-200 rounded-b">
          <AdminButton type="submit" class="px-5 py-2.5">
            Сохранить
          </AdminButton>
        </div>
        <!-- </form> -->
      </div>
    </div>
  </div>
  <!-- Add User Modal -->
  <div class="top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center h-modal sm:h-full" id="add-user-modal">
    <div class="relative w-full max-w-2xl px-4 h-full md:h-auto">
      <!-- Modal content -->
      <div class="bg-white rounded-lg shadow relative">
        <!-- Modal header -->
        <div class="flex items-start justify-between p-5 border-b rounded-t">
          <h3 class="text-xl font-semibold">
            Добавить нового пользователя
          </h3>
          <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
            data-modal-toggle="add-user-modal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-6 space-y-6">
          <!-- <form action="#"> -->
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="first-name" class="text-sm font-medium text-black block mb-2">Имя</label>
              <input type="text" name="first-name" id="first-name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5"
                placeholder="Введите имя" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="last-name" class="text-sm font-medium text-black block mb-2">Фамилия</label>
              <input type="text" name="last-name" id="last-name"
                class="shadow-sm bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5"
                placeholder="Введите фамилию" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="email" class="text-sm font-medium text-black block mb-2">Email</label>
              <input type="email" name="email" id="email"
                class="shadow-sm bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5"
                placeholder="example@yandex.ru" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="phone-number" class="text-sm font-medium text-black block mb-2">Номер телефона</label>
              <input type="number" name="phone-number" id="phone-number"
                class="shadow-sm bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5"
                placeholder="+7 (926) 345-67-89" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="role_id" class="text-sm font-medium text-black block mb-2">Роль</label>
              <select name="role_id" id="role_id"
                class="shadow-sm bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5">
                <option value="">-- Выберите роль --</option>
                <option value="">Админ</option>
                <option value="">Куратор</option>
                <option value="">Ученик</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="current-password" class="text-sm font-medium text-gray-900 block mb-2">Пароль</label>
              <input type="password" name="current-password" id="current-password"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5"
                placeholder="••••••••" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="new-password" class="text-sm font-medium text-gray-900 block mb-2">Подтвердите пароль</label>
              <input type="password" name="new-password" id="new-password"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5"
                placeholder="••••••••" required>
            </div>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="items-center p-6 border-t border-gray-200 rounded-b">
          <AdminButton type="submit" class="px-5 py-2.5">
            Добавить
          </AdminButton>
        </div>
        <!-- </form> -->
      </div>
    </div>
  </div>
  <!-- Delete User Modal -->
  <div class="top-4 left-0 right-0 md:inset-0 z-50 justify-center items-center h-modal sm:h-full"
    id="delete-user-modal">
    <div class="relative w-full max-w-md px-4 h-full md:h-auto">
      <!-- Modal content -->
      <div class="bg-white rounded-lg shadow relative">
        <!-- Modal header -->
        <div class="flex justify-end p-2">
          <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-black rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
            data-modal-toggle="delete-user-modal">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <!-- Modal body -->
        <div class="p-6 pt-0 text-center">
          <img src="/img/icon/exclamation-mark.svg" alt="Иконка" class="h-36 w-36 mx-auto">
          <h3 class="text-black text-xl font-normal mt-5 mb-6">Вы уверены, что хотите удалить этого пользователя?
          </h3>
          <a href="#"
            class="text-white bg-violetButton hover:bg-violetHoverButton focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-base items-center px-3 py-2.5 text-center mr-4">Да
          </a>
          <a href="#"
            class="text-black bg-white hover:bg-gray-200 focus:ring-4 focus:ring-gray-300 border border-gray-200 font-medium items-center rounded-lg text-base px-3 py-2.5 text-center"
            data-modal-toggle="delete-user-modal">Нет
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import AdminButton from '@/Components/Button/AdminButton.vue';
import Table from '@/Components/Table/Table.vue';
import TableRow from '@/Components/Table/TableRow.vue';
import TableColumn from '@/Components/Table/TableColumn.vue';

defineOptions({ layout: AdminLayout })

const tableHeads = ['Пользователь', 'Номер телефона', 'Роль', 'Статус', 'Дата регистрации', ''];

</script>
