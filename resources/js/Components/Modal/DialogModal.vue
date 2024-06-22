<template>
  <Modal :show="show" :max-width="maxWidth" :closeable="closeable" @close="close">
    <div class="py-4">
      <div class="border-b border-gray-300 font-medium">
        <div class="max-[330px]:px-4 px-6 flex items-center justify-between pb-3">
          <slot name="title" />
          <button
            class="inline-flex items-center ml-auto p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
            @click="close">
            <svg class="max-[360px]:h-5 max-[360px]:w-5 h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>

      <div class="mt-4 max-[330px]:px-4 px-6">
        <slot name="content" />
      </div>
    </div>

    <div class="flex flex-row justify-end max-[330px]:px-4 px-6 py-4 bg-gray-100 rounded-lg text-end">
      <slot name="footer" />
    </div>
  </Modal>
</template>

<script setup>
import Modal from '@/Components/Modal/Modal.vue';

const emit = defineEmits(['close']);

defineProps({
  show: {
    type: Boolean,
    default: false,
  },
  maxWidth: {
    type: String,
    default: '2xl',
  },
  closeable: {
    type: Boolean,
    default: true,
  },
});

const close = () => {
  emit('close');
};
</script>
