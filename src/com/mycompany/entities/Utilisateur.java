/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gogym.entities;

import java.util.Date;

/**
 *
 * @author hp
 */
public class Utilisateur {
    
     private int id;
    private String nom;
    private String prenom;
    private String email;
    private String password;
    private String image;
    private String numTel;
    private Date date_naissance;
   
    private String roles="[\"ROLE_USER\"]";

    public Utilisateur() {
    }

    public Utilisateur(int id, String nom, String prenom, String email, String password, String numTel, String image, Date date_naissance) {
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.email = email;
        this.password = password;
        this.numTel = numTel;
        this.image = image;
        this.date_naissance = date_naissance;
       
    }

  

public Utilisateur(String email, String password) {
        this.password = email;
        this.email = email;
    }

    
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getPrenom() {
        return prenom;
    }

    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getNumTel() {
        return numTel;
    }

    public void setNumTel(String numTel) {
        this.numTel = numTel;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public Date getDateNaissance() {
        return date_naissance;
    }

    public void setDateNaissance(Date dateNaissance) {
        this.date_naissance = dateNaissance;
    }

    

  

    public String getRoles() {
        return roles;
    }

    public void setRoles(String roles) {
        this.roles = roles;
    }

    @Override
    public String toString() {
        return "Utilisateur{" + "id=" + id + ", nom=" + nom + ", prenom=" + prenom + ", email=" + email + ", password=" + password + ", numTel=" + numTel + ", image=" + image + ", date_naissance=" + date_naissance + ",  roles=" + roles + '}';
    }

    
















}
