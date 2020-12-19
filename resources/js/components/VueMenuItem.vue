<template>
  <div class="mt-4">
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
