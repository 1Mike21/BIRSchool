<template>
  <tr class="hover:bg-gray-100 relative">
    <td class="p-4 w-4">
      <!-- <div class="flex items-center">
        <input id="checkbox-{{ .id }}" aria-describedby="checkbox-1" type="checkbox"
          class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-violetButton h-4 w-4 rounded">
        <label for="checkbox-{{ .id }}" class="sr-only">checkbox</label>
      </div> -->
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="min-[1400px]:hidden w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
      </svg>
      <Checkbox class="absolute cursor-pointer left-5 bottom-8"/>
    </td>
    <slot />
    <td class="p-4 whitespace-nowrap space-x-2">
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
    </td>
  </tr>
</template>

<script setup>
import Checkbox from '@/Components/FormElement/Checkbox.vue';

</script>
