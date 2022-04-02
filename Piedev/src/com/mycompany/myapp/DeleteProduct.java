/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;

import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Category;
import com.mycompany.entities.Product;
import com.mycompany.services.ServiceCategory;
import com.mycompany.services.ServiceProduct;

/**
 *
 * @author bouss
 */
public class DeleteProduct extends BaseFormBack{
    Form current;
        
    public DeleteProduct(Resources res , Product p, Form previous) {
        setTitle("delete Product");
        
 super.addSideMenu1(res);
        Button btnSubmit = new Button("Delete");
        Button btnret = new Button("return");
        
            btnret.addActionListener(e -> new ListProduct(res,current).show());
        
        
        btnSubmit.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                    Dialog.show("Alert", "Are you sure !!", new Command("OK"));
             
                    System.out.println(p.getIdProduit());
                    System.out.println("deleted Product");
                    
                    if (ServiceProduct.getInstance().Delete(p.getIdProduit())) {
                        Dialog.show("Success", "Connection Accepted", new Command("OK"));
                    } else {
                        Dialog.show("Success", "Connection Accepted", new Command("OK"));
                    }
                        
                }
      
        });
        

        addAll(btnSubmit,btnret);
      //  this.getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
    }




    
}