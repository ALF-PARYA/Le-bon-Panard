<?php

namespace App\Controller\Admin;

use App\Entity\Socks;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SocksCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Socks::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
