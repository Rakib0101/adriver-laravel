<template>
     <QuillEditor theme="snow" placeholder="Write ad detail..." />
</template>
<script>
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';

export default {
  components: {
    QuillEditor
  }
}
</script>
<style>
.ql-editor {
  min-height: 172px;
}
</style>