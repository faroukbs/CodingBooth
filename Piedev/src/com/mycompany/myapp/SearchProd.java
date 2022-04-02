/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;

import com.codename1.components.MultiButton;
import com.codename1.ui.Component;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.plaf.UIManager;
import com.mycompany.entities.Product;
import com.mycompany.services.ServiceProduct;
import java.util.ArrayList;
import java.util.Collections;

/**
 *
 * @author Home
 */
public class SearchProd  extends BaseForm1{
    Form current;
    ArrayList<Product> ProductArrayList = new ArrayList<>();
    ServiceProduct ProductService = new ServiceProduct();
    public SearchProd(Form previous){
        /* *** *CONFIG SCREEN* *** */
        current = this;
        setTitle("My Products");
        setLayout(BoxLayout.y());
        /* *** *YOUR CODE GOES HERE* *** */
        ProductArrayList = ProductService.getAllProduct();
        Collections.reverse(ProductArrayList);
        fillData();
        /* *** *SEARCHBAR* *** */
        getToolbar().addSearchCommand(e -> {
            String text = (String) e.getSource();
            if (text == null || text.length() == 0) {
                // clear search
                for (Component cmp : getContentPane()) {
                    cmp.setHidden(false);
                    cmp.setVisible(true);
                }
                getContentPane().animateLayout(150);
            } else {
                text = text.toLowerCase();
                for (Component cmp : getContentPane()) {
                    MultiButton mb = (MultiButton) cmp;
                    String line1 = mb.getTextLine1();
                    String line2 = mb.getTextLine2();
                    boolean show = line1 != null && line1.toLowerCase().indexOf(text) > -1 ||
                            line2 != null && line2.toLowerCase().indexOf(text) > -1;
                    mb.setHidden(!show);
                    mb.setVisible(show);

                }
                getContentPane().animateLayout(150);
            }
        }, 4);
        /* *** *OVERFLOW MENU* *** */
        
        getToolbar().addCommandToOverflowMenu("Trier par nom", null, (evt) -> {
            removeAll();
            Collections.sort(ProductArrayList, Product.statusComparator);
           
            fillData();
        });
        
         /* *** *SIDE MENU* *** */
        getToolbar().addCommandToLeftSideMenu("", null, (evt) -> {
        });
        getToolbar().addCommandToLeftSideMenu("My Products", FontImage.createMaterial(FontImage.MATERIAL_ARCHIVE, UIManager.getInstance().getComponentStyle("TitleCommand")), (evt) -> {
        //    new ListEqForm().show();
        });
    }

    public void fillData() {
        for (Product E : ProductArrayList) {
             MultiButton multiButton = new MultiButton();
           
            multiButton.setTextLine1("Nom Product: "+E.getNomprod());
            multiButton.setTextLine2("Description Product: "+E.getDescription());
          //  multiButton.setTextLine4("User: "+reservation.getUser());
          //  multiButton.setTextLine3("Billet: "+reservation.getBillet());
            multiButton.setUIID(E.getIdProduit()+ "");
            multiButton.setEmblem(FontImage.createMaterial(FontImage.MATERIAL_KEYBOARD_ARROW_RIGHT, "", 10.0f));
           // multiButton.addActionListener(l -> new ReservationDetailForm(current, reservation).show());

            add(multiButton);
        }
    }
}

    
    

