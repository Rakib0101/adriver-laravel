<template>
  <Breadcrumb
    :links="[{ label: 'Browse Listing', url: '#' }]"
    :title="'Browse Listing'"
  />
</template>
<script>
import Breadcrumb from "./Breadcrumb.vue";
export default {
  components: {
    Breadcrumb,
  },
};
</script>
