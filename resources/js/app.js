/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./jquery.flexslider');

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });

setInterval(function () {
    randomBoxSlideOne();
    randomBoxSlideOne();

    randomBoxSlideTwo();
    randomBoxSlideTwo();

    randomBoxSlideThree();
    randomBoxSlideThree();
}, 5000);

function randomBoxSlideOne() {
    let slideOneProjectNumber = Math.round(Math.random() * 10);

    if (slideOneProjectNumber >= 3) {
        $(`#slide-1-inquiries`)
            .insertAfter(`#slide-1-project-${slideOneProjectNumber}`)
    } else {
        $(`#slide-1-project-${Math.floor(Math.random() * 2) + 1}`)
            .insertAfter(`#slide-1-project-3`)
    }
}

function randomBoxSlideTwo() {
    let slideOneProjectNumber = Math.round(Math.random() * 10);

    if (slideOneProjectNumber < 6) {
        $(`#slide-2-inquiries`)
            .insertAfter(`#slide-2-project-${slideOneProjectNumber}`)
    } else {
        $(`#slide-2-project-${Math.floor(Math.random() * 3) + 7}`)
            .insertAfter(`#slide-2-project-6`)
    }
}

function randomBoxSlideThree() {
    $(`#slide-3-inquiries`)
        .insertAfter(`#slide-3-project-${Math.round(Math.random() * 10)}`);

    $(`#slide-3-project-${Math.round(Math.random() * 10)}}`)
        .insertAfter(`#slide-3-project-${Math.round(Math.random() * 10)}`);
}
