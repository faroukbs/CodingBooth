/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;

import com.codename1.components.MultiButton;
import com.codename1.components.SpanLabel;
import static com.codename1.io.Log.p;
import static com.codename1.io.Log.p;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Category;
import com.mycompany.services.ServiceCategory;


/**
 *
 * @author bhk
 */
public class ListCategory extends BaseFormBack {

    public ListCategory(Resources res,Form previous) {
           super.addSideMenu1(res);
               Container List = new Container (BoxLayout.y());
    
       
        for (Category c : ServiceCategory.getInstance().getAllTasks()) {
            MultiButton mb = new MultiButton(c.toString());
            //System.out.println(user.getId());
        Button update = new Button("update");
        update.setUIID("update");
            update.addActionListener(e -> new ModifierCategory(res,c,previous).show());
            
        Button delete = new Button("delete");
        delete.setUIID("delete");
           delete.addActionListener(e -> new DeleteCategory(res,c,previous).show());
//            for(int i = 0; i < user; i++)
//            {
//                System.out.println();
//                }
            add(mb);
            add(delete);
            add(update);
            
            }
//        setTitle("List category");
//
//        SpanLabel sp = new SpanLabel();
//        sp.setText(ServiceCategory.getInstance().getAllTasks().toString());
//        add(sp);
//        getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
    }

}
