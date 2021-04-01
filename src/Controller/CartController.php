<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function getCart()
    {

        $cart = [
            'item1' => [
                'code' => '0000',
                'amount' => 123
            ],
            'item2' => [
                'code' => '0001',
                'amount' => 0
            ],
            'item3' => [
                'code' => '0002',
                'amount' => 345
            ]
        ];

        return $this->render('cart/index.html.twig', ['cart' => $cart]);
    }
}