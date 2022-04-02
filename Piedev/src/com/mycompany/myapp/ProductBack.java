/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;

import com.codename1.components.ImageViewer;
import com.codename1.components.MultiButton;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.URLImage;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Product;
import com.mycompany.myapp.util.Statics;
import com.mycompany.services.ServiceProduct;

/**
 *
 * @author Home
 */
public class ProductBack extends BaseFormBack {
        
        public ProductBack(Resources res,Form previous) {
        setTitle("List Product");
           super.addSideMenu1(res);
               Container List = new Container (BoxLayout.y());
    
       
        for (Product p : ServiceProduct.getInstance().getAllProduct()) {
              ImageViewer photo = new ImageViewer();
              EncodedImage placeholder = EncodedImage.createFromImage(Image.createImage(200, 150, 0xffff0000), true);
              Image i = URLImage.createToStorage(placeholder,p.getImage(),Statics.BOOK_IMG_URL +p.getImage());
           
                      
         
              
            MultiButton mb = new MultiButton(p.toString());
                mb.setIcon(i.fill(200,200));
              mb.setTextLine1("Nomprod: "+p.getNomprod());
            
                   
                      
                     mb.addActionListener((evt) -> {
                         //affichage en details details(voyage).show(); 
                         //autre page 
                         //ajouter panier 
                     });
            //System.out.println(user.getId());
        Button update = new Button("update");
        update.setUIID("update");
            update.addActionListener(e -> new ModifierProduct(res,p,previous).show());
        Button delete = new Button("delete");
        delete.setUIID("delete");
           delete.addActionListener(e -> new DeleteProduct(res,p,previous).show());
//            for(int i = 0; i < user; i++)
//            {
//                System.out.println();
//                }
            add(mb);
            add(delete);
            add(update);
            
            }
        
//        SpanLabel sp = new SpanLabel();
//        sp.setText(ServiceProduct.getInstance().getAllProduct().toString());
//        add(sp);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
    }
         
}
