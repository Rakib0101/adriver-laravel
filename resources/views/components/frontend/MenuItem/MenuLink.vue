<template>
  <router-link :to="href" class="text-gray-400 hover:text-gray-900 font-medium text-base" :class="{'text-primary-500': active}"
    >
    {{name}}
    </router-link
  >
</template>
<script>
    export default{
        props:{
            href: {type: String, default: '#'},
            active: {type: Boolean, default: false},
            name: {type: String, default: 'Menu Item'}
        }
    }
</script>
