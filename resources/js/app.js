require("./bootstrap");

import Vue from "vue";

Vue.component("task-list", require("./components/TaskList.vue").default);

const app = new Vue({
    el: "#app"
});
