/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;

import com.codename1.components.ScaleImageLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Component;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.layouts.Layout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;

/**
 *
 * @author Home
 */
public class BaseFormBack extends BaseForm1 {
          Form current;
    public BaseFormBack () {
    }

    public BaseFormBack (Layout contentPaneLayout) {
        super(contentPaneLayout);
    }

    public BaseFormBack (String title, Layout contentPaneLayout) {
        super(title, contentPaneLayout);
    }
    
    
    public Component createLineSeparator() {
        Label separator = new Label("", "WhiteSeparator");
        separator.setShowEvenIfBlank(true);
        return separator;
    }
    
    public Component createLineSeparator(int color) {
        Label separator = new Label("", "WhiteSeparator");
        separator.getUnselectedStyle().setBgColor(color);
        separator.getUnselectedStyle().setBgTransparency(255);
        separator.setShowEvenIfBlank(true);
        return separator;
    }

    protected void addSideMenu1(Resources res) {
        Toolbar tb = getToolbar();
        

       
        Image img = res.getImage("profile-background.jpg");
        if(img.getHeight() > Display.getInstance().getDisplayHeight() / 3) {
            img = img.scaledHeight(Display.getInstance().getDisplayHeight() / 3);
        }
        ScaleImageLabel sl = new ScaleImageLabel(img);
        sl.setUIID("BottomPad");
        sl.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
        
        tb.addComponentToSideMenu(LayeredLayout.encloseIn(
                sl,
                FlowLayout.encloseCenterBottom(
                        new Label(res.getImage("profile.jpg"), "PictureWhiteBackgrond"))
        ));
        
        tb.addMaterialCommandToSideMenu("liste evenement", FontImage.MATERIAL_UPDATE, e -> new AfficheEForm(res,"").show());
        tb.addMaterialCommandToSideMenu("liste ticket", FontImage.MATERIAL_UPDATE, e -> new Ticketf(res).show());
        tb.addMaterialCommandToSideMenu("liste commande", FontImage.MATERIAL_UPDATE, e -> new ListCommandeForm(res).show());
                tb.addMaterialCommandToSideMenu("liste  ligne commande commande", FontImage.MATERIAL_UPDATE, e -> new ListLigneCommandeForm(res).show());
                        tb.addMaterialCommandToSideMenu("liste produit", FontImage.MATERIAL_UPDATE, e -> new ProductBack(res,current).show());
                        tb.addMaterialCommandToSideMenu("Add produit", FontImage.MATERIAL_SHOP, e -> new AddProduct(res,current).show());
                                               tb.addMaterialCommandToSideMenu("liste categorie sale", FontImage.MATERIAL_UPDATE, e -> new ListCategorie(res).show());
                                                                              tb.addMaterialCommandToSideMenu("liste categorie product  ", FontImage.MATERIAL_UPDATE, e -> new ListCategory(res,current).show());
                                                                              tb.addMaterialCommandToSideMenu("liste salle", FontImage.MATERIAL_UPDATE, e -> new ListSalle(res).show());
        tb.addMaterialCommandToSideMenu("Logout", FontImage.MATERIAL_EXIT_TO_APP, e -> new ListE(res,0,current).show());
        tb.addMaterialCommandToSideMenu("MAP", FontImage.MATERIAL_EXIT_TO_APP, e -> new MapForm(res,this));
     
     
    }
    
}
