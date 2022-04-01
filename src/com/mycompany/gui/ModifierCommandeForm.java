/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.gui;

import com.codename1.components.FloatingHint;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entites.Commande;
import com.mycompany.myapp.services.ServiceCommande;



/**
 *
 * @author aicha
 */
public class ModifierCommandeForm extends BaseForm {
    Form current;
    public ModifierCommandeForm(Resources res , Commande r) {
         super("Newsfeed",BoxLayout.y()); //herigate men Newsfeed w l formulaire vertical
    
        Toolbar tb = new Toolbar(true);
        current = this ;
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Modifier Commande");
        getContentPane().setScrollVisible(false);
        
        
        super.addSideMenu(res);
        
        TextField nom_client = new TextField(r.getNom_client(), "nom" , 20 , TextField.ANY);
        TextField prenom_client = new TextField(r.getPrenom_client(), "prenom" , 20 , TextField.ANY);
 
        //etat bch na3mlo comobbox bon lazm admin ya3mlleha approuver mais just chnwarikom ComboBox
        
        
        
        
        
        
        
        nom_client.setUIID("NewsTopLine");
        prenom_client.setUIID("NewsTopLine");
        
        nom_client.setSingleLineTextArea(true);
        prenom_client.setSingleLineTextArea(true);
        
        Button btnModifier = new Button("Modifier");
       btnModifier.setUIID("Button");
       
       //Event onclick btnModifer
       
       btnModifier.addPointerPressedListener(l ->   { 
           
           r.setNom_client(nom_client.getText());
           r.setPrenom_client(prenom_client.getText());
           
           
      
       
       //appel fonction modfier Commande men service
       
       if(ServiceCommande.getInstance().modifierCommande(r)) { // if true
           new ListCommandeForm(res).show();
       }
        });
       Button btnAnnuler = new Button("Annuler");
       btnAnnuler.addActionListener(e -> {
           new ListCommandeForm(res).show();
       });
       
       
       Label l2 = new Label("");
       
       Label l3 = new Label("");
       
       Label l4 = new Label("");
       
       Label l5 = new Label("");
       
        Label l1 = new Label();
        
        Container content = BoxLayout.encloseY(
                l1, l2, 
                new FloatingHint(nom_client),
                createLineSeparator(),
                new FloatingHint(prenom_client),
                createLineSeparator(),
                
                btnModifier,
                btnAnnuler
                
               
        );
        
        add(content);
        show();
        
        
    }

    
    
}
