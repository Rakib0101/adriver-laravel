<template>
  <a
    href="#"
    class="border-2 border-warning-50 p-5 rounded-md bg-warning-50 hover:bg-warning-100 flex justify-start items-center gap-2 hover:border-warning-100 transition-all duration-300 font-display uppercase font-semibold text-sm tracking-[-0.01em]"
    :class="class"
  >
    <slot />
  </a>
</template>
<script>
  export default {
    props:{
    class:{
      type:String,
      default:'',
     }
  }
  }
</script>
