<template>
  <ModalPage>
    <template #title />
    <template #content>
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
                  <label for="current-password" class="text-sm font-medium text-gray-900 block mb-2">Новый
                    пароль</label>
                  <input type="password" name="current-password" id="current-password"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-violetButton focus:border-violetButton block w-full p-2.5"
                    placeholder="••••••••" required>
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="new-password" class="text-sm font-medium text-gray-900 block mb-2">Подтвердите
                    пароль</label>
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
    </template>
  </ModalPage>
</template>

<script setup>
import ModalPage from '@/Components/Modal/ModalPage.vue';

</script>
