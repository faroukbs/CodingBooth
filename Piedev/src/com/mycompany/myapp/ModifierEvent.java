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
import com.mycompany.entities.Eventl;
import com.mycompany.services.ServiceEventl;

/**
 *
 * @author Home
 */
public class ModifierEvent extends BaseFormBack{
     Form current;
      public ModifierEvent(Resources res , Eventl rec) {
         super("Newsfeed",BoxLayout.y()); //herigate men Newsfeed w l formulaire vertical
    
        Toolbar tb = new Toolbar(true);
        current = this ;
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Modifier event");
        getContentPane().setScrollVisible(false);
        
        
        super.addSideMenu1(res);
        
        TextField titre = new TextField(rec.getTitre() , "titre" , 20 , TextField.ANY);
        TextField ville = new TextField(rec.getVille() , "ville" , 20 , TextField.ANY);
         TextField description = new TextField(rec.getDescription() , "description" , 20 , TextField.ANY);
 TextField photo = new TextField(rec.getPhoto() , "photo" , 20 , TextField.ANY);
 
        //etat bch na3mlo comobbox bon lazm admin ya3mlleha approuver mais just chnwarikom ComboBox
        
    
        
        
        
        
        titre.setUIID("NewsTopLine");
        ville.setUIID("NewsTopLine");
          description.setUIID("NewsTopLine");
        photo.setUIID("NewsTopLine");
        
        titre.setSingleLineTextArea(true);
        ville.setSingleLineTextArea(true);
           description.setSingleLineTextArea(true);
        photo.setSingleLineTextArea(true);
      
        Button btnModifier = new Button("Modifier");
       btnModifier.setUIID("Button");
       
       //Event onclick btnModifer
       
       btnModifier.addPointerPressedListener(l ->   { 
           
           rec.setTitre(titre.getText());
           rec.setVille(ville.getText());
             rec.setDescription(description.getText());
            rec.setPhoto(photo.getText());
          
       
       //appel fonction modfier event men service
       
       if(ServiceEventl.getInstance().modifierevent(rec)) { // if true
           new AfficheEForm(res,"").show();
       }
        });
       Button btnAnnuler = new Button("Annuler");
       btnAnnuler.addActionListener(e -> {
           new AfficheEForm(res,"").show();
       });
       
       
       Label l2 = new Label("");
       
       Label l3 = new Label("");
       
       Label l4 = new Label("");
       
       Label l5 = new Label("");
       
        Label l1 = new Label();
        
        Container content = BoxLayout.encloseY(
                l1, l2, 
                new FloatingHint(titre),
                createLineSeparator(),
                new FloatingHint(ville),
                 createLineSeparator(),
                 new FloatingHint(description),
                createLineSeparator(),
                new FloatingHint(photo),
           
                createLineSeparator(),//ligne de séparation
                btnModifier,
                btnAnnuler
                
               
        );
        
        add(content);
        show();
        
        
    }
    
}