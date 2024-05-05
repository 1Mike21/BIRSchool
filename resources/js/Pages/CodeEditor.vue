<template>
  <Head title="Редактор кода" />

  <div class="rounded-2xl overflow-hidden">
    <div class="bg-red h-14 flex align-middle px-2">
      <button title="Очистить"><img class="w-12" src="/img/icons/clear.svg" alt="Очистить"></button>
      <button title="Сохранить"><img class="w-8" src="/img/icons/save.svg" alt="Сохранить"></button>
    </div>
    <div class="code-editor flex justify-between min-h-[800px]">
      <div class="code grid grid-rows-3 overflow-y-auto p-4 bg-white bg-opacity-10 w-[50%]">
        <div class="html-code">
          <h2 class="title-text"><img src="/img/icons/html-5.svg" alt="HTML" class="w-6 mr-3 inline">HTML</h2>
          <textarea class="textarea-code"></textarea>
        </div>
        <div class="css-code">
          <h2 class="title-text"><img src="/img/icons/css-3.svg" alt="CSS" class="w-6 mr-3 inline">CSS</h2>
          <textarea class="textarea-code"></textarea>
        </div>
        <div class="js-code">
          <h2 class="title-text"><img src="/img/icons/js.svg" alt="JS" class="w-6 mr-3 inline">JS</h2>
          <textarea class="textarea-code"></textarea>
        </div>
      </div>
      <div class="bar w-1 bg-slate-400 cursor-w-resize" title="Щелкните и перетащите"></div>
      <iframe class="bg-white w-[50%]" id="result"></iframe>
    </div>
  </div>
</template>

<script>
import { Head, Link } from '@inertiajs/vue3';

// const html_code = document.querySelector('.html-code textarea');
// const css_code = document.querySelector('.css-code textarea');
// const js_code = document.querySelector('.js-code textarea');
// const result = document.querySelector('#result');
// const bar = document.querySelector('.bar');
// const code_editor = document.querySelector('.code-editor');

// function run() {
//   localStorage.setItem('html_code', html_code.value);
//   localStorage.setItem('css_code', css_code.value);
//   localStorage.setItem('js_code', js_code.value);
//   result.contentDocument.body.innerHTML = `<style>${localStorage.css_code}</style>` + localStorage.html_code;
//   result.contentWindow.eval(localStorage.js_code);
// }
// html_code.onkeyup = ()=> run();
// css_code.onkeyup = ()=> run();
// js_code.onkeyup = ()=> run();

// html_code.value = localStorage.html_code;
// css_code.value = localStorage.css_code;
// js_code.value = localStorage.js_code;
</script>

<style scoped>
.title-text {
  @apply text-white font-semibold my-4;
}
.textarea-code {
  @apply w-full bg-white h-[calc(100%-4rem)] border-none text-black resize-none scrollbar-thin;
}
</style>
