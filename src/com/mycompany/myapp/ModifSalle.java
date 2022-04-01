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
import com.mycompany.entities.Salle;
import com.mycompany.services.ServiceSalle;
/**
 *
 * @author ahmed
 */
public class ModifSalle extends BaseForm {
     Form current;
      public ModifSalle(Resources res , Salle rec) {
         super("Newsfeed",BoxLayout.y()); //herigate men Newsfeed w l formulaire vertical
    
        Toolbar tb = new Toolbar(true);
        current = this ;
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Ajout Reclamation");
        getContentPane().setScrollVisible(false);
        
        
        super.addSideMenu(res);
        
        TextField nomsalle = new TextField(rec.getNomsalle() , "nomsalle" , 20 , TextField.ANY);
        TextField description = new TextField(rec.getDescription() , "description" , 20 , TextField.ANY);
          
 
        //etat bch na3mlo comobbox bon lazm admin ya3mlleha approuver mais just chnwarikom ComboBox
        
    
        
        
        
        
        nomsalle.setUIID("NewsTopLine");
        description.setUIID("NewsTopLine");

        
        nomsalle.setSingleLineTextArea(true);
        description.setSingleLineTextArea(true);
    
        Button btnModifier = new Button("Modifier");
       btnModifier.setUIID("Button");
       
       //Event onclick btnModifer
       
       btnModifier.addPointerPressedListener(l ->   { 
           
           rec.setNomsalle(nomsalle.getText());
           rec.setDescription(description.getText());
         
       
       //appel fonction modfier reclamation men service
       
       if(ServiceSalle.getInstance().modifiersalle(rec)) { // if true
           new ListSalle(res).show();
       }
        });
       Button btnAnnuler = new Button("Annuler");
       btnAnnuler.addActionListener(e -> {
           new ListSalle(res).show();
       });
       
       
       Label l2 = new Label("");
       
       Label l3 = new Label("");
       
       Label l4 = new Label("");
       
       Label l5 = new Label("");
       
        Label l1 = new Label();
        
        Container content = BoxLayout.encloseY(
                l1, l2, 
                new FloatingHint(nomsalle),
                createLineSeparator(),
                new FloatingHint(description),
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
