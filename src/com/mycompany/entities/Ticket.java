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
public class Ticket {
   private  int idticket;
      private  String typeticket;

    public Ticket(String typeticket, String description) {
        this.typeticket = typeticket;
        this.description = description;
   
    }
        private  String image;
          private  int prix ;
           private  String description;
           int idevent;

    public void setIdevent(int idevent) {
        this.idevent = idevent;
    }

    public Ticket(String typeticket, String description, int idevent) {
        this.typeticket = typeticket;
        this.description = description;
        this.idevent = idevent;
    }

    public Ticket(int idticket, String typeticket, int prix, String description) {
        this.idticket = idticket;
        this.typeticket = typeticket;
        this.prix = prix;
        this.description = description;
    }
    

    @Override
    public String toString() {
        return "Ticket{" + "idticket=" + idticket + ", typeticket=" + typeticket + ", image=" + image + ", prix=" + prix + ", description=" + description + ", idevent=" + idevent + '}';
    }

    public Ticket(int idticket, String typeticket, String description, int idevent) {
        this.idticket = idticket;
        this.typeticket = typeticket;
        this.description = description;
        this.idevent = idevent;
    }

    public int getIdevent() {
        return idevent;
    }
            

    public void setIdticket(int idticket) {
        this.idticket = idticket;
    }

    public void setTypeticket(String typeticket) {
        this.typeticket = typeticket;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public void setPrix(int prix) {
        this.prix = prix;
    }

    public void setDescription(String description) {
        this.description = description;
    }



    public int getIdticket() {
        return idticket;
    }

    public String getTypeticket() {
        return typeticket;
    }

    public String getImage() {
        return image;
    }

    public float getPrix() {
        return prix;
    }

    public String getDescription() {
        return description;
    }

  

    public Ticket() {
    }

    public Ticket(String typeticket, String image, int prix, String description) {
        this.typeticket = typeticket;
        this.image = image;
        this.prix = prix;
        this.description = description;
      
       
    }

    public Ticket(int idticket, String typeticket, String image, int prix, String description) {
        this.idticket = idticket;
        this.typeticket = typeticket;
        this.image = image;
        this.prix = prix;
        this.description = description;
      
    }

    public Ticket(String typeticket, String description, int idevent ,int prix) {
        this.typeticket = typeticket;
        this.prix = prix;
        this.description = description;
        this.idevent = idevent;
    }


    public Ticket(int idticket, String typeticket, String description) {
        this.idticket = idticket;
        this.typeticket = typeticket;
  
    }
    
}
