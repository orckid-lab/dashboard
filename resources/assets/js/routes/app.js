import Router from '../modules/Router';

const router = new Router();

router.path('views');

router.get('/', 'app');
router.get('/contact', 'contact');

export default router.routes();