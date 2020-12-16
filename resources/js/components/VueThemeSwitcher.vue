<template>
  <div class="toggle-container">
    <input type="checkbox" id="switch" name="theme" /><label for="switch"
      >Toggle</label
    >
  </div>
</template>

<script>
export default {
  name: "VueThemeSwticher",
  mounted() {
    var checkbox = document.querySelector("input[name=theme]");

    checkbox.addEventListener("change", function () {
      if (this.checked) {
        trans();
        document.documentElement.setAttribute("data-theme", "light");
      } else {
        trans();
        document.documentElement.setAttribute("data-theme", "default");
      }
    });

    let trans = () => {
      document.documentElement.classList.add("transition");
      window.setTimeout(() => {
        document.documentElement.classList.remove("transition");
      }, 1000);
    };
  },
  methods: {}
};
</script>

<style>
input[type="checkbox"] {
  height: 0;
  width: 0;
  visibility: hidden;
}

label {
  cursor: pointer;
  text-indent: -9999px;
  width: 52px;
  height: 27px;
  background: grey;
  float: right;
  border-radius: 100px;
  position: relative;
}

label:after {
  content: "";
  position: absolute;
  top: 3px;
  left: 3px;
  width: 20px;
  height: 20px;
  background: #fff;
  border-radius: 90px;
  transition: 0.3s;
}

input:checked + label {
  background: var(--color-headings);
}

input:checked + label:after {
  left: calc(100% - 5px);
  transform: translateX(-100%);
}

label:active:after {
  width: 45px;
}

html.transition,
html.transition *,
html.transition *:before,
html.transition *:after {
  transition: all 750ms !important;
  transition-delay: 0 !important;
}
</style>
