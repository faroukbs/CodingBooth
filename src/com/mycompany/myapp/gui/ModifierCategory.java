/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import static com.codename1.io.Log.p;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.mycompany.myapp.entities.Category;
import com.mycompany.myapp.services.ServiceCategory;

/**
 *
 * @author bouss
 */
public class ModifierCategory extends Form{
    /*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    Form current;

   public ModifierCategory(Category c , Form previous) {
        setTitle("edit Category");
        setLayout(BoxLayout.y());
        TextField id = new TextField(String.valueOf(c.getId()), "Category id");
        TextField tfNom = new TextField(c.getNom(), "Category name");


        Button btnValider = new Button("edit product");
        Button btnRet = new Button("Return");
        btnRet.addActionListener(e-> new HomeForm(c).show() );

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
        

        addAll(id, tfNom, btnValider,btnRet);
        // getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> this.previous.showBack());

    }
}
    

