<template>
  <div>
    <login />
  </div>
</template>

<script>
import login from './Auth/LoginComponent.vue'
import loginHeader from './Shared/LoginHeaderComponent.vue'
export default {

  components:
  {
    login,
    loginHeader
},
  name: "Test",
  created() {},
  data() {
    return {};
  },
  props: {},
  methods: {},
};
</script>

<style lang="scss" scoped></style>