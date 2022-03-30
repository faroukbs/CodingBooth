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
public class ModifierTicket extends BaseForm{
     Form current;
      public ModifierTicket(Resources res ,Ticket t) {
         super("Newsfeed",BoxLayout.y()); //herigate men Newsfeed w l formulaire vertical
    
        Toolbar tb = new Toolbar(true);
        current = this ;
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Ajout Reclamation");
        getContentPane().setScrollVisible(false);
        
        
        super.addSideMenu(res);
        
        TextField typeticket = new TextField(t.getTypeticket() , "titre" , 20 , TextField.ANY);
        TextField description = new TextField(t.getDescription() , "ville" , 20 , TextField.ANY);
   TextField idevent = new TextField("","2453");
                        idevent.getStyle().setFgColor(154245);
        
    
        
        
        
        
        typeticket.setUIID("NewsTopLine");
        description.setUIID("NewsTopLine");
        idevent.setUIID("NewsTopLine");
        
        typeticket.setSingleLineTextArea(true);
      description.setSingleLineTextArea(true);
        idevent.setSingleLineTextArea(true);
        
        Button btnModifier = new Button("Modifier");
       btnModifier.setUIID("Button");
       
       //Event onclick btnModifer
       
       btnModifier.addPointerPressedListener(l ->   { 
           
           t.setTypeticket(typeticket.getText());
           t.setDescription(description.getText());
           t.setIdevent((int) Float.parseFloat(idevent.getText()));
          
       
       //appel fonction modfier reclamation men service
       
       if(ServiceTicket.getInstance().modifieticket(t)) { // if true
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
                new FloatingHint(typeticket),
                createLineSeparator(),
                new FloatingHint(description),
                createLineSeparator(),
                new FloatingHint(idevent),
                createLineSeparator(),
                createLineSeparator(),//ligne de séparation
                btnModifier,
                btnAnnuler
                
               
        );
        
        add(content);
        show();
        
        
    }
    
}
