Vue.component('mylink', {
    props: ['hreflink','namelink'],
    template: `
        <a class="nav-item nav-link" :href="hreflink"> {{ namelink }} <span class="sr-only">(current)</span></a>
      `
});
