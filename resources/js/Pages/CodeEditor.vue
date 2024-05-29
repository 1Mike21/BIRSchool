<template>

  <Head title="Редактор кода" />

  <div class="rounded-2xl overflow-hidden">
    <div class="bg-red h-14 flex align-middle px-2">
      <button @click="clearCode" title="Очистить все"><img class="w-12" src="/img/icons/clear.svg" alt="Очистить"></button>
      <button title="Сохранить"><img class="w-8" src="/img/icons/save.svg" alt="Сохранить"></button>
    </div>
    <div class="code-editor flex justify-between min-h-[800px]">
      <div class="code grid grid-rows-3 overflow-y-auto p-4 bg-white bg-opacity-10 w-[50%]">
        <div>
          <h2 class="title-text"><img src="/img/icons/html-5.svg" alt="HTML" class="w-6 mr-3 inline">HTML</h2>
          <textarea @keyup="run" v-model="editor.html" class="textarea-code"></textarea>
        </div>
        <div>
          <h2 class="title-text"><img src="/img/icons/css-3.svg" alt="CSS" class="w-6 mr-3 inline">CSS</h2>
          <textarea @keyup="run" v-model="editor.css" class="textarea-code"></textarea>
        </div>
        <div>
          <h2 class="title-text"><img src="/img/icons/js.svg" alt="JS" class="w-6 mr-3 inline">JS</h2>
          <textarea @keyup="run" v-model="editor.js" class="textarea-code"></textarea>
        </div>
      </div>
      <div class="bar w-1 bg-slate-400 cursor-w-resize" title="Щелкните и перетащите"></div>
      <iframe class="bg-white w-[50%]" ref="result"></iframe>
    </div>
  </div>
</template>

<script setup>
import { Head } from '@inertiajs/vue3';
import { onMounted, reactive, ref } from 'vue';

const result = ref(null);

const editor = reactive({
  html: '',
  css: '',
  js: '',
});

const clearCode = () => {
  editor.html = '';
  editor.css = '';
  editor.js = '';
  result.value.contentDocument.body.innerHTML = "";
}

const run = () => {
  result.value.contentDocument.body.innerHTML = editor.html;
  localStorage.setItem('html_code', editor.html);
  localStorage.setItem('css_code', editor.css);
  localStorage.setItem('js_code', editor.js);
  result.value.contentDocument.body.innerHTML = `<style>${localStorage.css_code}</style>` + localStorage.html_code;
  result.value.contentWindow.eval(localStorage.js_code);

};

onMounted(() => {
  editor.html = localStorage.html_code;
  editor.css = localStorage.css_code;
  editor.js = localStorage.js_code;
});
</script>

<style scoped>
.title-text {
  @apply text-white font-semibold my-4;
}
.textarea-code {
  @apply w-full bg-white dark:bg-slate-900 h-[calc(100%-4rem)] border-none text-black dark:text-white resize-none scrollbar-thin;
}
</style>
