<?php

namespace App\Controller\Admin;

use App\Entity\Image;
use App\Entity\Location;
use App\Entity\Matter;
use App\Entity\Size;
use App\Entity\Socks;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Le Bon Panard');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Image', 'fas fa-list', Image::class);
        yield MenuItem::linkToCrud('Location', 'fas fa-list', Location::class);
        yield MenuItem::linkToCrud('Matter', 'fas fa-list', Matter::class);
        yield MenuItem::linkToCrud('Size', 'fas fa-list', Size::class);
        yield MenuItem::linkToCrud('Socks', 'fas fa-list', Socks::class);
        yield MenuItem::linkToCrud('User', 'fas fa-circle-user', User::class);
    }
}
