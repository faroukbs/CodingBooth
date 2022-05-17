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
import com.mycompany.entities.Category;
import com.mycompany.services.ServiceCategory;


/**
 *
 * @author bhk
 */
public class AddCategory extends BaseFormBack{
    int Oxeeeeee;

    public AddCategory(Resources res ,Form previous) {
        setTitle("Add a new category");
         super.addSideMenu1(res);
        setLayout(BoxLayout.y());
        
        TextField tfNom = new TextField("","category name");
        tfNom.setUIID("TextFieldBlack");
            addStringValue("category name",tfNom);
        
        Button btnValider = new Button("Add Category");
        addStringValue("", btnValider);
        
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((tfNom.getText().length()==0))
                    Dialog.show("Alert", "Please fill all the fields", new Command("OK"));
                else
                {
                    try {
                        Category c = new Category (tfNom.getText().toString());
                        if( ServiceCategory.getInstance().addTask(c))
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
        
        //addAll(tfNom,btnValider);
        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e-> previous.showBack());
                
    }
     private void addStringValue(String s, Component v) {
   
        add(BorderLayout.west(new Label(s,"PaddedLabel"))
        .add(BorderLayout.CENTER,v)
        );
        
        
        add(createLineSeparator(Oxeeeeee));
    }

    
    
}