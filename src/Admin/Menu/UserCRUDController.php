<?php


namespace App\Admin\Menu;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Route\RouteCollection;

final class UserCRUDController extends AbstractAdmin
{
    protected $baseRoutePattern = 'admin_users';
    protected $baseRouteName = 'admin_users';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->clearExcept(['list','create']);
    }
}