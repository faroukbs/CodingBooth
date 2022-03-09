<?php
namespace App\Services\cart;
use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartService {
    protected $session;
    protected $produitrep;


    public function __construct(SessionInterface $session, ProduitRepository $produitrep){
        $this->session=$session;
        $this->produitrep = $produitrep;
    }

    public function getFullCart() : array {

        $panier = $this->session->get("panier",[]);

        // on fabrique les données

        $dataPanier = [];

        foreach ($panier as $id => $quantite){
            $produit = $this->produitrep->find($id);
            $dataPanier[] = [
                "produit" => $produit,
                "quantite" => $quantite
            ];
        }

        return $dataPanier;

    }

    public function getTotal() : float {

        $total = 0;
        foreach($this->getFullCart() as $item)
        {
            $totalItem = $item['produit']->getPrix() * $item['quantite'];
            $total += $totalItem ;
        }
        return $total;

    }

    public function add(int $id) {

        // On récupère le panier actuel
        $panier = $this->session->get("panier", []);


        if(!empty($panier[$id])){
            $panier[$id]++;
        }else{
            $panier[$id] = 1;
        }

        $this->session->set("panier", $panier);



    }


    public function delete(int $id) {
        // On récupère le panier actuel
        $panier = $this->session->get("panier", []);

        if(!empty($panier[$id])){

            unset($panier[$id]);
        }

        // on sauvgarde dans la session
        $this->session->set("panier", $panier);
    }






}