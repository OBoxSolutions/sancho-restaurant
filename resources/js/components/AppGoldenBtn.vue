<template>
  <button
    class="btn golden-btn-normal"
    :class="{ 'golden-btn-large': size === 'large' }"
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
.golden-btn-normal {
  background-color: var(--bg-color-tertiary);
  color: var(--bg-color-primary);
  text-align: center;
  text-decoration: none;
  display: inline-block;
  cursor: pointer;
}

.golden-btn-normal:hover {
  background-color: var(--bg-color-quaternary);
}

.golden-btn-large {
  background-color: var(--bg-color-tertiary);
  border: none;
  color: var(--bg-color-primary);
  padding: 15px 40px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
  font-size: medium;
  font-weight: bold;
}

.golden-btn-large:hover {
  background-color: var(--bg-color-secondary);
  color: white;
}
</style>
