
import home from '../components/backend/home.vue';
import categories from '../components/backend/category/manage.vue';
import create from '../components/backend/category/create.vue';


export const routes = [
	{ path: '/home', component: home },
	{ path: '/categories', component: categories },
	{ path: '/add-category', component: create },
	
	
];
