import Vue from 'vue'
import moment from 'moment'

Vue.component('changelog', require('./components/Changelog.vue').default);

new Vue({
    el: '#app'
});

Vue.filter('formatDate', function(value) {
    if (value) {
      return moment(String(value)).format('LL')
    }
});