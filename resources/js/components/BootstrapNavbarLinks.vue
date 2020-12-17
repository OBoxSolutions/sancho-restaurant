<template>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item" v-for="route in routes" :key="route.name">
      <a
        class="nav-link"
        :class="{ active: route.name === currentRoute }"
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
          route: "/reserve",
          name: "events",
          public: "Reservar"
        },
        {
          route: "/contact",
          name: "contact",
          public: "Contactar"
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
  }
};
</script>
