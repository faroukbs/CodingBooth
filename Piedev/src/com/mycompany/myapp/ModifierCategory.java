/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;

import static com.codename1.io.Log.p;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Category;
import com.mycompany.services.ServiceCategory;


/**
 *
 * @author bouss
 */
public class ModifierCategory extends BaseFormBack{
    /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    Form current;
    int Oxeeeeee;

   public ModifierCategory(Resources res,Category c , Form previous) {
        setTitle("edit Category");
         super.addSideMenu1(res);
        setLayout(BoxLayout.y());
        TextField id = new TextField(String.valueOf(c.getId()), "Category id");
        id.setUIID("TextFieldBlack");
            addStringValue("category id",id);
        TextField tfNom = new TextField(c.getNom(), "Category name");
        tfNom.setUIID("TextFieldBlack");
            addStringValue("category nom",tfNom);


        Button btnValider = new Button("edit product");
        addStringValue("valider",btnValider);
        Button btnRet = new Button("Return");
        addStringValue("return",btnRet);
       btnRet.addActionListener(e-> new ListCategory(res,current).show() );

        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfNom.getText().length() == 0)) {
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                } else {
                    try {
                        Category c = new Category(Integer.parseInt(id.getText()), tfNom.getText());
                        System.out.println(c.getId());
                        System.out.println("---------");
                        System.out.println(id.getText());
                        if (ServiceCategory.getInstance().ModifierCategory(c)) {
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
        

        //addAll(id, tfNom, btnValider,btnRet);
        // getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> this.previous.showBack());

    }
   private void addStringValue(String s, Component v) {
   
        add(BorderLayout.west(new Label(s,"PaddedLabel"))
        .add(BorderLayout.CENTER,v)
        );
        
        add(createLineSeparator(Oxeeeeee));
    }
}
    

