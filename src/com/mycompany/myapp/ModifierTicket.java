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
import com.mycompany.entities.Ticket;
import com.mycompany.services.ServiceEventl;
import com.mycompany.services.ServiceTicket;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Home
 */
public class ModifierTicket extends BaseFormBack{
     Form current;
      public ModifierTicket(Resources res ,Ticket t) {
         super("Newsfeed",BoxLayout.y()); //herigate men Newsfeed w l formulaire vertical
    
        Toolbar tb = new Toolbar(true);
        current = this ;
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Modifier Ticket");
        getContentPane().setScrollVisible(false);
        
        
           super.addSideMenu1(res);
        
        TextField typeticket = new TextField(t.getTypeticket() , "ttpeticket" , 20 , TextField.ANY);
        TextField description = new TextField(t.getDescription() , "description" , 20 , TextField.ANY);
       TextField prix = new TextField(String.valueOf(t.getPrix()) , "prix" , 20 , TextField.ANY);
  
                    
    
        
        
        
        
        typeticket.setUIID("NewsTopLine");
        description.setUIID("NewsTopLine");
        prix.setUIID("NewsTopLine");
        
        typeticket.setSingleLineTextArea(true);
      description.setSingleLineTextArea(true);
        prix.setSingleLineTextArea(true);
        
        Button btnModifier = new Button("Modifier");
       btnModifier.setUIID("Button");
       
       //Event onclick btnModifer
       
       btnModifier.addPointerPressedListener(l ->   { 
           
           t.setTypeticket(typeticket.getText());
           t.setDescription(description.getText());
           t.setPrix((int) Float.parseFloat(prix.getText()));
          
       
       //appel fonction modfier event men service
       
       if(ServiceTicket.getInstance().modifieticket(t)) { // if true
           new Ticketf(res).show();
       }
        });
       Button btnAnnuler = new Button("Annuler");
       btnAnnuler.addActionListener(e -> {
           new Ticketf(res).show();
       });
       
       
       Label l2 = new Label("");
       
       Label l3 = new Label("");
       
       Label l4 = new Label("");
       
       Label l5 = new Label("");
       
        Label l1 = new Label();
        
        Container content = BoxLayout.encloseY(
                l1, l2, 
                new FloatingHint(typeticket),
                createLineSeparator(),
                new FloatingHint(description),
                createLineSeparator(),
                new FloatingHint(prix),
                createLineSeparator(),
                createLineSeparator(),//ligne de séparation
                btnModifier,
                btnAnnuler
                
               
        );
        
        add(content);
        show();
        
        
    }
    
}
