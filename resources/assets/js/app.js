import Vue from 'vue';
import jQuery from 'jquery';
// import Router from 'vue-router'
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-default/index.css';
//import 'keen-ui/dist/keen-ui.css';

Vue.use(ElementUI);
 //Vue.use(VueRouter)
import  'vue-wysiwyg/dist/vueWysiwyg.css';
import Wysiwyg from 'vue-wysiwyg/dist/vueWysiwyg.js';

Vue.use(Wysiwyg, {}); 

new Vue ({
    el: '#app',
    data: function(){
        return {
            tableData: [],
            isCollapse: false,
            marContain: 'marContain-2',
            fileList: [{name: 'food.jpeg', url: 'https://fuss10.elemecdn.com/3/63/4e7f3a15429bfda99bce42a18cdd1jpeg.jpeg?imageMogr2/thumbnail/360x360/format/webp/quality/100'}, {name: 'food2.jpeg', url: 'https://fuss10.elemecdn.com/3/63/4e7f3a15429bfda99bce42a18cdd1jpeg.jpeg?imageMogr2/thumbnail/360x360/format/webp/quality/100'}]
        }
    },
    methods: {
        handleEdit: function (id) {
            console.log(scope);
        },
        handleDelete: function (index, row) {
            console.log(index, row);
        },
        handleRemove(file, fileList) {
            console.log(file, fileList);
        },
        handlePreview(file) {
            console.log(file);
        },
        handleOpen(key, keyPath) {
            console.log(key, keyPath);
        },
        handleClose(key, keyPath) {
            console.log(key, keyPath);
        },
        toggleMenu(){
            this.isCollapse = !this.isCollapse;
            if(this.isCollapse == true){
                this.marContain = 'marContain-1';
            } else {
                this.marContain = 'marContain-2';
            }
        }
    }
});