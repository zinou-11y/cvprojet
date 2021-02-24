
require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('show', require('./components/Show.vue').default);

var app = new Vue ({
    el:'#app',
    data:{
        experiences:[],
    },
    methods: {
        getExperiences:function() {
            axios.get('https://jsonplaceholder.typicode.com/posts')
            .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log (error);
                })
            }
        },
    mounted:function(){
        this.getExperiences();
    }
});
