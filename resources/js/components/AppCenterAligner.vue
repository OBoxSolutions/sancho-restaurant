<template>
  <div class="box">
    <slot></slot>
  </div>
</template>

<script>
export default {};
</script>

<style>
.box {
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100%;
}
</style>
