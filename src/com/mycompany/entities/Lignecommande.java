/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.entities;

/**
 *
 * @author Home
 */

    public class Lignecommande {
    private int idlignecommande;
    private int idcommande;
    private int idProduit;
    private int quantite;

    public Lignecommande() {
    }

    public Lignecommande(int idlignecommande, int idcommande, int idProduit, int quantite) {
        this.idlignecommande = idlignecommande;
        this.idcommande = idcommande;
        this.idProduit = idProduit;
        this.quantite = quantite;
    }

    public Lignecommande(int idcommande, int idProduit, int quantite) {
        this.idcommande = idcommande;
        this.idProduit = idProduit;
        this.quantite = quantite;
    }

    
    public int getIdlignecommande() {
        return idlignecommande;
    }

    public void setIdlignecommande(int idlignecommande) {
        this.idlignecommande = idlignecommande;
    }

    public int getIdcommande() {
        return idcommande;
    }

    public void setIdcommande(int idcommande) {
        this.idcommande = idcommande;
    }

    public int getIdProduit() {
        return idProduit;
    }

    public void setIdProduit(int idProduit) {
        this.idProduit = idProduit;
    }

    public int getQuantite() {
        return quantite;
    }

    public void setQuantite(int quantite) {
        this.quantite = quantite;
    }

    @Override
    public int hashCode() {
        int hash = 5;
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final Lignecommande other = (Lignecommande) obj;
        if (this.idlignecommande != other.idlignecommande) {
            return false;
        }
        if (this.idcommande != other.idcommande) {
            return false;
        }
        if (this.idProduit != other.idProduit) {
            return false;
        }
        if (this.quantite != other.quantite) {
            return false;
        }
        return true;
    }
    
    
    
    
}

