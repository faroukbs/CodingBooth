/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.gui;

import com.codename1.ui.Button;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.myapp.entities.Category;
import com.mycompany.myapp.entities.Product;

/**
 *
 * @author bhk
 */
public class HomeForm extends Form{
Form current;
    public HomeForm(Product p) {
        current=this; //Back 
        setTitle("Home");
        setLayout(BoxLayout.y());
        
        add(new Label("Choose an option"));
        //product
        Button btnAddProd = new Button("Add Product");
        Button btnListProd = new Button("List Product");
       //category
        Button btnAddTask = new Button("Add Category");
        Button btnListTasks = new Button("List category");
        
        
        
        //product
        btnAddProd.addActionListener(e-> new AddProduct(current).show());
        btnListProd.addActionListener(e-> new ListProduct(current).show());
        addAll(btnAddProd,btnListProd);
        
        //category
        btnAddTask.addActionListener(e-> new AddCategory(current).show());
        btnListTasks.addActionListener(e-> new ListCategory(current).show());
        addAll(btnAddTask,btnListTasks);
        
        
    }

    HomeForm(Category c) {
                current=this; //Back 
        setTitle("Home");
        setLayout(BoxLayout.y());
        
        add(new Label("Choose an option"));
        //product
        Button btnAddProd = new Button("Add Product");
        Button btnListProd = new Button("List Product");
       //category
        Button btnAddTask = new Button("Add Category");
        Button btnListTasks = new Button("List category");
        
        
        
        //product
        btnAddProd.addActionListener(e-> new AddProduct(current).show());
        btnListProd.addActionListener(e-> new ListProduct(current).show());
        addAll(btnAddProd,btnListProd);
        
        //category
        btnAddTask.addActionListener(e-> new AddCategory(current).show());
        btnListTasks.addActionListener(e-> new ListCategory(current).show());
        addAll(btnAddTask,btnListTasks);
    }
    
    
    
}
