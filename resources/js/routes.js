import exemple from './components/ExampleComponent.vue'
import test from './components/test.vue'
import frise from './components/frise'

const routes = [
    {
        path: '/',
        name: 'home',
        component: frise,
    },
    {
        path: '/exemple',
        component: exemple
    },
    {
        path: '/test',
        component: test
    }
]

export default routes;