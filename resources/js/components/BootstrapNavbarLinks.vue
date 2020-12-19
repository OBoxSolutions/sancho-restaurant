<template>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item" v-for="route in routes" :key="route.name">
      <a
        class="nav-link font-menu"
        :class="{
          active: active(route.name),
          'active-border-bottom': active(route.name)
        }"
        :href="route.route"
        >{{ route.public }}</a
      >
    </li>
    <!-- Authentication Links -->
    <slot></slot>
  </ul>
</template>

<script>
export default {
  props: ["userName", "currentRoute"],
  name: "BootstrapNavbarLinks",
  data() {
    return {
      routes: [
        {
          route: "/",
          name: "home",
          public: "Inicio"
        },
        {
          route: "/menu",
          name: "menu",
          public: "Menú"
        },
        {
          route: "/direction",
          name: "direction",
          public: "Dirección"
        },
        {
          route: "/email/send",
          name: "emailSend",
          public: "Enviar correos"
        },
        {
          route: "/email/create",
          name: "email",
          public: "Subscribirse"
        }
      ]
    };
  },
  methods: {
    active(routeName) {
      return routeName === this.currentRoute;
    }
  }
};
</script>

<style scoped>
.font-menu {
  font-size: 1.2em;
}
.active-border-bottom {
  border-style: solid;
  border-width: 0;
  border-bottom-width: 3px !important;
  border-color: white !important;
}
</style>
