/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.components.SpanLabel;
import com.codename1.ui.Button;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.mycompany.myapp.services.ServiceProduct;

/**
 *
 * @author bouss
 */
public class ListProduct extends Form {
    
        public ListProduct(Form previous) {
        setTitle("List Product");
          
            
        
        SpanLabel sp = new SpanLabel();
        sp.setText(ServiceProduct.getInstance().getAllProduct().toString());
        add(sp);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
    }

    
}
