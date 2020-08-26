import Vue from "vue";
import Router from "vue-router";
Vue.use(Router);

// import Login from "./components/au";
import Login from "./components/pages/Login";
import Register from "./components/pages/Register";
// import Home from "./components/pages/Home";

const routes = [
  {
    path: "/",
    component: Login
  },
  {
    path: "/register",
    component: Register
  }
  //   {
  //     path: "/home",
  //     component: Home
  //   }
];

export default new Router({
  mode: "history",
  routes
});
