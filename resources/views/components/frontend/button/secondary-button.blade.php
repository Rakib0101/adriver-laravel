<template>
  <a
    href="#"
    class="border-2 max-h-12 border-gray-50 px-5 rounded-md bg-gray-50 hover:bg-gray-100 inline-flex justify-center items-center gap-2 hover:border-gray-100 transition-all duration-300 font-display uppercase font-semibold text-sm leading-[48px] tracking-[-0.01em]"
    :class="class"
  >
    <slot />
  </a>
</template>
<script>
  export default{
    props:{
            href: {type: String, default: '#'},
            class: {type: String, default: ''},
        }
  }
</script>
