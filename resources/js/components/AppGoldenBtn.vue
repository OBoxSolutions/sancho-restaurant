<template>
  <button
    class="btn golden-btn btn-font"
    :class="{ 'golden-btn--large': size === 'large' }"
  >
    <slot></slot>
  </button>
</template>

<script>
export default {
  name: "AppGoldenBtn",
  props: {
    size: {
      type: String,
      default: "normal"
    }
  }
};
</script>

<style scoped>
.golden-btn {
  background-color: var(--bg-color-tertiary);
  color: var(--bg-color-primary);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
}

.golden-btn:hover {
  background-color: var(--bg-color-quaternary);
}

.golden-btn--large {
  border: none;
  padding: 15px 40px;
  margin: 4px 2px;
  border-radius: 16px;
  font-size: medium;
  font-weight: bold;
}

.golden-btn--large:hover {
  background-color: var(--bg-color-secondary);
  color: white;
}
</style>
