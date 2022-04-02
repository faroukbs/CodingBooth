/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.entities;

import java.util.Comparator;

/**
 *
 * @author bouss
 */
public class Product {
    private int idProduit;
    private String nomprod;
    private String description;
    private String image ;
    private float prix;
    private int quantity;
//    private int categoryprod;

    public Product(int idProduit, String nomprod, String description, String image, float prix, int quantity) {
        this.idProduit=idProduit;
        this.nomprod = nomprod;
        this.description = description;
        this.image = image;
        this.prix = prix;
        this.quantity = quantity;
    }

    public Product(String nomprod, String description, String image, float prix, int quantity) {
        this.nomprod = nomprod;
        this.description = description;
        this.image = image;
        this.prix = prix;
        this.quantity = quantity;
    }

    public Product() {
    }










    public int getIdProduit() {
        return idProduit;
    }

    public void setIdProduit(int idProduit) {
        this.idProduit = idProduit;
    }

    public String getNomprod() {
        return nomprod;
    }

    public void setNomprod(String nomprod) {
        this.nomprod = nomprod;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public float getPrix() {
        return prix;
    }

    public void setPrix(float prix) {
        this.prix = prix;
    }

    public int getQuantity() {
        return quantity;
    }

    public void setQuantity(int quantity) {
        this.quantity = quantity;
    }

    @Override
    public String toString() {
        return "Product{" + "idProduit=" + idProduit + ", nomprod=" + nomprod + ", description=" + description + ", image=" + image + ", prix=" + prix + ", quantity=" + quantity + '}';
    }
        public static Comparator<Product> statusComparator = new Comparator<Product>() {
        @Override
        public int compare(Product o1, Product o2) {
            return (int) (o1.getNomprod().toLowerCase().compareTo(o2.getNomprod().toLowerCase()));
        }
    };
    
}
