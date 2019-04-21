import Vue from 'vue'

Vue.component('changelog', require('./components/Changelog.vue').default)

new Vue({
    el: '#app'
})