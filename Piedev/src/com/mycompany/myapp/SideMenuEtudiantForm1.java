package com.mycompany.myapp;

import com.codename1.components.ToastBar;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.Layout;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Eventl;
import com.mycompany.myapp.util.Statics;
import java.io.IOException;

/**
 * Common code that can setup the side menu
 *
 * @author Shai Almog
 */
public abstract class SideMenuEtudiantForm1 extends Form {

    EncodedImage ec;

    public SideMenuEtudiantForm1(String title, Layout contentPaneLayout) {
        super(title, contentPaneLayout);
    }

    public SideMenuEtudiantForm1(String title) {
        super(title);
    }

    public SideMenuEtudiantForm1() {
    }

    public SideMenuEtudiantForm1(Layout contentPaneLayout) {
        super(contentPaneLayout);
    }

    public void setupSideMenu(Resources res) {
       // String url = Statics.USER_IMG_URL + User.getCurrentPic();
        try {
            ec = EncodedImage.create("/pic.jpeg");
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
        }
       // Image profilePic = URLImage.createToStorage(ec, url, url, URLImage.RESIZE_SCALE);
        Image mask = res.getImage("round-mask.png");
        mask = mask.scaledHeight(mask.getHeight() / 4 * 3);
       // profilePic = profilePic.fill(mask.getWidth(), mask.getHeight());
       // Label profilePicLabel = new Label("  " + User.getCurrentPrenom() + " " + User.getCurrentNom(), profilePic, "SideMenuTitle");
        //profilePicLabel.setMask(mask.createMask());

    
    


        getToolbar().addMaterialCommandToSideMenu("  Events ", FontImage.MATERIAL_ACCESS_TIME, e -> new ListEventForm(res).show());
      

    }

    /* getToolbar().addMaterialCommandToSideMenu("list Club", FontImage.MATERIAL_DASHBOARD,  e -> showOtherForm(res,"list Club",p));
            getToolbar().addMaterialCommandToSideMenu("list Club detail", FontImage.MATERIAL_DASHBOARD,  e -> showOtherForm(res,"list Club detail",p));
            getToolbar().addMaterialCommandToSideMenu("stat", FontImage.MATERIAL_DASHBOARD,  e -> showOtherForm(res,"stat",p));
            getToolbar().addMaterialCommandToSideMenu("Event", FontImage.MATERIAL_DASHBOARD,  e -> showOtherForm(res,"Event",p));
            getToolbar().addMaterialCommandToSideMenu("Demande Event", FontImage.MATERIAL_DASHBOARD,  e -> showOtherForm(res,"Demande Event",p));

     */
}
