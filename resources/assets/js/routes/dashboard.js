import Router from '../modules/Router';

const router = new Router();

router.path('views/dashboard');

router.get('/', 'dashboard');
router.get('/users', 'users');

export default router.routes();