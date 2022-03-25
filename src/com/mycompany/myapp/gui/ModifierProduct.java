/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.entities.Product;
import com.mycompany.myapp.services.ServiceProduct;

/**
 *
 * @author bouss
 */
public class ModifierProduct extends Form {

    Form current;

   public ModifierProduct(Product p , Form previous) {
        setTitle("edit product");
        setLayout(BoxLayout.y());
        TextField id = new TextField(String.valueOf(p.getIdProduit()), "product id");
        TextField tfNom = new TextField(p.getNomprod(), "product name");
        TextField tfDesc = new TextField(p.getDescription(), "product description");
        TextField tfImg = new TextField(p.getImage(), "product image");
        TextField tfPrix = new TextField(String.valueOf(p.getPrix()), "product price");
        TextField tfQnt = new TextField(String.valueOf(p.getQuantity()), "product quantity");

        Button btnValider = new Button("edit product");
        Button btnRet = new Button("Return");
        btnRet.addActionListener(e-> new HomeForm(p).show() );

        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfNom.getText().length() == 0) && (tfDesc.getText().length() == 0) && (tfPrix.getText().length() == 0) && (tfQnt.getText().length() == 0) && (tfImg.getText().length() == 0)) {
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                } else {
                    try {
                        Product p = new Product(Integer.parseInt(id.getText()), tfNom.getText(), tfDesc.getText(), tfImg.getText(), Float.parseFloat(tfPrix.getText()), Integer.parseInt(tfQnt.getText()));
                        System.out.println(p.getIdProduit());
                        System.out.println("---------");
                        System.out.println(id.getText());
                        if (ServiceProduct.getInstance().modifierProduct(p)) {
                            Dialog.show("Success", "Connection accepted", new Command("OK"));
                        } else {
                            Dialog.show("ERROR", "Server error", new Command("OK"));
                        }
                    } catch (NumberFormatException e) {
                        Dialog.show("ERROR", "Status must be a number", new Command("OK"));
                    }

                }

            }
            
        });
        

        addAll(id, tfNom, tfDesc, tfImg, tfPrix, tfQnt, btnValider,btnRet);
        // getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> this.previous.showBack());

    }
}