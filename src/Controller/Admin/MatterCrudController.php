<?php

namespace App\Controller\Admin;

use App\Entity\Matter;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MatterCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Matter::class;
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
