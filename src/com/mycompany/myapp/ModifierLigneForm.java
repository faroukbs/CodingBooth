/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;

//import com.codename1.components.FloatingHint;
//import com.codename1.ui.Button;
//import com.codename1.ui.Container;
//import com.codename1.ui.Form;
//import com.codename1.ui.Label;
//import com.codename1.ui.TextField;
//import com.codename1.ui.Toolbar;
//import com.codename1.ui.layouts.BoxLayout;
//import com.codename1.ui.util.Resources;
//import com.mycompany.myapp.entites.Lignecommande;
//import com.mycompany.myapp.services.ServiceLignecommande;
//
///**
// *
// * @author aicha
// */
//public class ModifierLigneForm extends BaseForm{
//    Form current;
//    public ModifierLigneForm(Resources res , Lignecommande r) {
//         super("Newsfeed",BoxLayout.y()); //herigate men Newsfeed w l formulaire vertical
//    
//        Toolbar tb = new Toolbar(true);
//        current = this ;
//        setToolbar(tb);
//        getTitleArea().setUIID("Container");
//        setTitle("Modifier Commande");
//        getContentPane().setScrollVisible(false);
//        
//        
//        super.addSideMenu(res);
//        
//        TextField quantite = new TextField(r.getQuantite(), "quantité" , 20 , TextField.ANY);
// 
//        //etat bch na3mlo comobbox bon lazm admin ya3mlleha approuver mais just chnwarikom ComboBox
//        
//        
//        
//        
//        
//        
//        
//        quantite.setUIID("NewsTopLine");
//        
//        quantite.setSingleLineTextArea(true);
//        
//        Button btnModifier = new Button("Modifier");
//       btnModifier.setUIID("Button");
//       
//       //Event onclick btnModifer
//       
//       btnModifier.addPointerPressedListener(l ->   { 
//           
//           r.setQuantite(quantite.getText());
//           
//           
//      
//       
//       //appel fonction modfier Commande men service
//       
//       if(ServiceLignecommande.getInstance().modifierligne(r)) { // if true
//           new ListLigneCommandeForm(res).show();
//       }
//        });
//       Button btnAnnuler = new Button("Annuler");
//       btnAnnuler.addActionListener(e -> {
//           new ListLigneCommandeForm(res).show();
//       });
//       
//       
//       Label l2 = new Label("");
//       
//       Label l3 = new Label("");
//       
//       Label l4 = new Label("");
//       
//       Label l5 = new Label("");
//       
//        Label l1 = new Label();
//        
//        Container content = BoxLayout.encloseY(
//                l1, l2, 
//                new FloatingHint(quantite),
//                createLineSeparator(),
//                
//                
//                btnModifier,
//                btnAnnuler
//                
//               
//        );
//        
//        add(content);
//        show();
//        
//        
//    }
//
//    
//}

