<?php


namespace App\Controller;

use Sonata\AdminBundle\Controller\CRUDController;

class UserCRUDController extends CRUDController
{
    public function listAction()
    {
        return $this->renderWithExtraParams('admin/menu/user_menu_item.html.twig');
    }

    public function createAction()
    {
        return $this->renderWithExtraParams('admin/menu/user_menu_item.html.twig');
    }
}