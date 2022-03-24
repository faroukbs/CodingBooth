/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.entities.Category;
import com.mycompany.myapp.entities.Product;
import com.mycompany.myapp.services.ServiceProduct;
import com.mycompany.myapp.services.ServiceTask;

/**
 *
 * @author bouss
 */
public class AddProduct extends Form{
    public AddProduct(Form previous) {
        setTitle("Add a new product");
        setLayout(BoxLayout.y());
        
        TextField tfNom = new TextField("","product name");
        TextField tfDesc = new TextField("","product description");
        TextField tfImg = new TextField("","product image");
        TextField tfPrix = new TextField("","product price");
        TextField tfQnt = new TextField("","product quantity");
        
        
        Button btnValider = new Button("Add product");
        
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfNom.getText().length()==0) && (tfDesc.getText().length()==0)&& (tfPrix.getText().length()==0)&& (tfQnt.getText().length()==0) && (tfImg.getText().length()==0) )
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                else
                {
                    try {
                        Product  p = new Product (tfNom.getText().toString(),tfDesc.getText().toString(),tfImg.getText().toString(),Float.parseFloat(tfPrix.getText().toString()),Integer.parseInt(tfQnt.getText().toString()) );
                        if( ServiceProduct.getInstance().addProduct(p))
                        {
                           Dialog.show("Success","Connection accepted",new Command("OK"));
                        }else
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }
                    
                }
                
                
            }
        });
        
        addAll(tfNom,tfDesc,tfImg,tfPrix,tfQnt,btnValider);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
                
    }
}
