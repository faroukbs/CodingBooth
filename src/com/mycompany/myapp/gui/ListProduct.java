/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.components.MultiButton;
import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Product;
import com.mycompany.myapp.services.ServiceProduct;
import java.util.List;


/**
 *
 * @author bouss
 */
public class ListProduct extends Form {
    
        public ListProduct(Form previous) {
        setTitle("List Product");
          
               Container List = new Container (BoxLayout.y());
    
       
        for (Product p : ServiceProduct.getInstance().getAllProduct()) {
            MultiButton mb = new MultiButton(p.toString());
            //System.out.println(user.getId());
        Button update = new Button("update");
        update.setUIID("update");
            update.addActionListener(e -> new ModifierProduct(p,previous).show());
        Button delete = new Button("delete");
        delete.setUIID("delete");
           delete.addActionListener(e -> new DeleteProduct(p,previous).show());
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
//        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
    }
         
    
}
