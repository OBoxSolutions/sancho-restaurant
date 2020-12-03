<template>
  <div
    class="jumbotron jumbotron-fluid mb-0"
    :class="{ 'no-padding': !hasPadding, 'background-image': backgroundImage }"
    :style="{ 'background-image': `url(${backgroundImage})` }"
  >
    <div class="container">
      <h1 v-if="title !== ''">{{ title }}</h1>
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      default: ""
    },
    hasPadding: {
      type: Boolean,
      default: true
    },
    backgroundImage: {
      type: String,
      default: ""
    }
  },
  name: "VueSection"
};
</script>

<style scoped>
.no-padding {
  padding-bottom: 0px;
  padding-top: 0px;
}
.background-image {
  background-repeat: no-repeat;
  background-position: right; /* Center the image */
  background-size: cover;
}
</style>
