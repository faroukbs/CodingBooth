/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;
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
import com.mycompany.entities.Categorie;
import com.mycompany.services.ServiceCategorie;
/**
 *
 * @author ahmed
 */
public class ModifCategorie extends BaseFormBack {
    Form current;
      public ModifCategorie(Resources res , Categorie rec) {
         super("Newsfeed",BoxLayout.y()); //herigate men Newsfeed w l formulaire vertical
    
        Toolbar tb = new Toolbar(true);
        current = this ;
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Ajout Reclamation");
        getContentPane().setScrollVisible(false);
        
        super.addSideMenu1(res);
        
        TextField nomcategorie = new TextField(rec.getNomcategorie() , "nom categorie" , 20 , TextField.ANY);
        nomcategorie.setUIID("NewsTopLine");
        nomcategorie.setSingleLineTextArea(true);

    
        Button btnModifier = new Button("Modifier");
       btnModifier.setUIID("Button");
       
       //Event onclick btnModifer
       
       btnModifier.addPointerPressedListener(l ->   { 
           
           rec.setNomcategorie(nomcategorie.getText());

         
       
       //appel fonction modfier reclamation men service
       
       if(ServiceCategorie.getInstance().modifiercategorie(rec)) { // if true
           new ListCategorie(res).show();
       }
        });
       Button btnAnnuler = new Button("Annuler");
       btnAnnuler.addActionListener(e -> {
           new ListCategorie(res).show();
       });
       
       
       Label l2 = new Label("");
       
       Label l3 = new Label("");
       
       Label l4 = new Label("");
       
       Label l5 = new Label("");
       
        Label l1 = new Label();
        
        Container content = BoxLayout.encloseY(
                l1, l2, 
                new FloatingHint(nomcategorie),
                createLineSeparator(),

             
                createLineSeparator(),
                createLineSeparator(),//ligne de séparation
                btnModifier,
                btnAnnuler
                
               
        );
        
        add(content);
        show();
        
        
    }
}
