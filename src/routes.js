import index from "./components/index.vue";
import about from "./components/about.vue";
import hizmetler from "./components/hizmetlerimiz.vue";
import iletisim from "./components/iletisim.vue";
import projects from "./components/Projects.vue";
import project from "./components/Project.vue"

export const routes = [{
    path: '/',
    component: index
  },
  {
    path: '/hizmetlerimiz',
    component: hizmetler
  },
  {
    path: '/hakkimizda',
    component: about
  },
  {
    path: '/iletisim',
    component: iletisim
  },
  {
    path: '/projects',
    component: projects,
    name: 'projects'
  },
  {
    path: '/project',
    component: project,
    name: 'project'
  },
  {
    path: "/redirect",
    redirect: "/"
  },
  {
    path: "*",
    redirect: "/"
  },

];
