<template>
  <div class="col-sm-12 col-md-6">
    <h5>
      {{ title }}
    </h5>
    <p>
      <slot></slot>
    </p>
  </div>
</template>

<script>
export default {
  name: "VueMenuItem",
  props: {
    title: {
      type: String,
      required: true
    }
  }
};
</script>

<style></style>
