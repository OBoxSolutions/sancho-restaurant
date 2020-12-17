<template>
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary-color">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src="/assets/logo.webp" alt="Logo" style="width: 240px" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Right Side Of Navbar -->
        <bootstrap-navbar-links
          :user-name="userName"
          :current-route="currentRoute"
        >
          <!-- Authentication Links -->
          <slot></slot>
        </bootstrap-navbar-links>
        <!-- <vue-theme-switcher></vue-theme-switcher> -->
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  props: ["userName", "currentRoute"],
  name: "BootstrapNavbar"
};
</script>
