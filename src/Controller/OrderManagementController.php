<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class OrderManagementController extends AbstractController
{
    /**
     * @Route("/order-overview", name="order_overview")
     */
    public function orderOverview()
    {
        return $this->render('order_management/order-overview.html.twig');
    }

    /**
     * @Route("/order-archive", name="order_archive")
     */
    public function orderArchived() 
    {
        return $this->render('order_management/order-archived.html.twig');
    }

    /**
     * @Route("/my-purchase", name="my_purchase")
     */
    public function myPurchase() 
    {
        return $this->render('order_management/my-purchase.html.twig');
    }
}
