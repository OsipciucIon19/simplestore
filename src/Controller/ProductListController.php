<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductListController extends AbstractController
{
    /**
     * @Route("/products", name="productList")
     */
    public function getProductList() {

        $productList = [
            'items' => ['item1', 'item2', 'item3'],
            'pagination' => [
                'limit' => 10,
                'page' => 1
            ]
        ];

        return $this->render('productList/index.html.twig', ['productList' => $productList]);
    }
}