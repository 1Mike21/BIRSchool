<template>
  <div class="relative">
    <span @click="toggleVisibility" class="cursor-pointer absolute top-1/4 right-10">
      <span v-show="!passwordVisible">
        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
          stroke="#1f2937">
          <g id="SVGRepo_bgCarrier" stroke-width="0" />
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
          <g id="SVGRepo_iconCarrier">
            <path d="M12 5C5.63636 5 2 12 2 12C2 12 5.63636 19 12 19C18.3636 19 22 12 22 12C22 12 18.3636 5 12 5Z"
              stroke="#1f2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path
              d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z"
              stroke="#1f2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </g>
        </svg>
      </span>
      <span v-show="passwordVisible">
        <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="SVGRepo_bgCarrier" stroke-width="0" />
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
          <g id="SVGRepo_iconCarrier">
            <path
              d="M20 14.8335C21.3082 13.3317 22 12 22 12C22 12 18.3636 5 12 5C11.6588 5 11.3254 5.02013 11 5.05822C10.6578 5.09828 10.3244 5.15822 10 5.23552M12 9C12.3506 9 12.6872 9.06015 13 9.17071C13.8524 9.47199 14.528 10.1476 14.8293 11C14.9398 11.3128 15 11.6494 15 12M3 3L21 21M12 15C11.6494 15 11.3128 14.9398 11 14.8293C10.1476 14.528 9.47198 13.8524 9.1707 13C9.11386 12.8392 9.07034 12.6721 9.04147 12.5M4.14701 9C3.83877 9.34451 3.56234 9.68241 3.31864 10C2.45286 11.1282 2 12 2 12C2 12 5.63636 19 12 19C12.3412 19 12.6746 18.9799 13 18.9418"
              stroke="#1f2937" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
          </g>
        </svg>
      </span>
    </span>
    <TextInput :id="id" :value="modelValue" :type="checkType"
      @input="$emit('update:modelValue', $event.target.value)"
      :ref="passwordInput"
      :class="['mt-1 block w-full', { 'border-red': errors }]"
      :autocomplete="autocomplete" />
  </div>
</template>

<script setup>
import TextInput from '@/Components/FormElement/TextInput.vue';
import { useHidePassword } from '@/Hooks/hidePassword';

defineProps({
  modelValue: String,
  passwordInput: String,
  errors: Array,
  autocomplete: String,
  id: {
    type: String,
    default: 'password'
  }
});

const { passwordVisible, toggleVisibility, checkType } = useHidePassword();
</script>
