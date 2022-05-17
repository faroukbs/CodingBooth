/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;

import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Dialog;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Product;
import com.mycompany.services.ServiceProduct;


/**
 *
 * @author bouss
 */
public class AddProduct extends BaseFormBack{
         int Oxeeeeee;
    public AddProduct(Resources  res,Form previous) {
        setTitle("Add a new product");
         super.addSideMenu1(res);
        setLayout(BoxLayout.y());
        
        TextField tfNom = new TextField("","product name");
        tfNom.setUIID("TextFieldBlack");
            addStringValue("product name",tfNom);
            
        TextField tfDesc = new TextField("","product description");
                tfDesc.setUIID("TextFieldBlack");
            addStringValue("product description",tfDesc);
        TextField tfImg = new TextField("","product image");
                tfImg.setUIID("TextFieldBlack");
            addStringValue("product image",tfImg);
        TextField tfPrix = new TextField("","product price");
                tfPrix.setUIID("TextFieldBlack");
            addStringValue("product price",tfPrix);
        TextField tfQnt = new TextField("","product quantity");
                tfQnt.setUIID("TextFieldBlack");
            addStringValue("product quantity",tfQnt);
        
        
        Button btnValider = new Button("Add product");
              addStringValue("", btnValider);
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
        
      //  addAll(tfNom,tfDesc,tfImg,tfPrix,tfQnt,btnValider);
      //  getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
                
    }
        private void addStringValue(String s, Component v) {
   
        add(BorderLayout.west(new Label(s,"PaddedLabel"))
        .add(BorderLayout.CENTER,v)
        );
        
        add(createLineSeparator(Oxeeeeee));
    }
}
