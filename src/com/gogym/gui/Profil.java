/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gogym.gui;

import com.codename1.components.ImageViewer;
import com.codename1.components.ScaleImageLabel;
import com.codename1.io.FileSystemStorage;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.spinner.Picker;
import com.gogym.entities.Utilisateur;
import java.io.IOException;
import java.text.SimpleDateFormat;
import com.gogym.gui.SessionManager;
import com.gogym.services.ServiceUtilisateur;
//import rest.file.uploader.tn.FileUploader;
import com.codename1.ui.URLImage;
import com.codename1.ui.FontImage;

import static jdk.nashorn.internal.runtime.Debug.id;



/**
 *
 * @author hp
 */
public class Profil extends Inbox1Form {
    
   String fileName;
  String ipath;
    public Profil() {
        this(com.codename1.ui.util.Resources.getGlobalResources());
    }    
 
    
    public Profil(com.codename1.ui.util.Resources resourceObjectInstance) {
       // initGuiBuilderComponents(resourceObjectInstance);
        
        getToolbar().setTitleComponent(
              /*  FlowLayout.encloseCenterMiddle(
                        new Label("          Home", "Title"),
                        new Label("                                  "+ServiceUser.getInstance().affichuser(mail).get(0).getUsername(), "Title")
                ),*/
                                FlowLayout.encloseRight(
                        new Label(SessionManager.getEmail(), "Title")
                ));
        setLayout(BoxLayout.y());
                        
         setLayout(BoxLayout.y());
        
        TextField nom = new TextField(SessionManager.getNom());
        nom.setUIID("TextFieldWhite");
       // addStringValue("Nom", nom);
        
        TextField prenom = new TextField(SessionManager.getPrenom());
        prenom.setUIID("TextFieldBlack");
        //addStringValue("Prenom", prenom);

        TextField email = new TextField(SessionManager.getEmail(),"email",20,TextField.EMAILADDR);
        email.setUIID("TextFieldBlack");
        //addStringValue("Email", email);
        
  //   TextField numTel = new TextField(SessionManager.getNumTel());
    //    numTel.setUIID("TextFieldBlack");
        
        //addStringValue("CIN", cin);
        
        TextField password = new TextField(SessionManager.getPassword(),"password",20,TextField.PASSWORD);
        password.setUIID("TextFieldBlack");
        
           TextField image = new TextField(SessionManager.getImage());
        image.setUIID("TextFieldBlack");
        System.out.println(SessionManager.getNumTel());
      //  EncodedImage placeholder = EncodedImage.createFromImage(Image.createImage(1100, 500), false);
     //   Image img1 = URLImage.createToStorage(placeholder,"http://localhost/symfonyProject/public/uploads/image/"+SessionManager.getImage(), "http://localhost/symfonyProject/public/uploads/image/"+SessionManager.getImage(),URLImage.RESIZE_SCALE);
      
       /* SimpleDateFormat formatter = new SimpleDateFormat("dd-M-yyyy");  
        Picker dateN = new Picker();
        dateN.setType(Display.PICKER_TYPE_DATE);
        dateN.setDate(SessionManager.getDateNaissance());  */
        //TextField DateN = new TextField(dateN, "Daten Naissance", 20, TextField.ANY);
   //     dateN.setUIID("TextFieldBlack");
        //addStringValue("Date Naissance", DateN);
      
      
        
      Button mod = new Button("Modifier profil");
        mod.setUIID("InboxNumber4");
        
        Button changer = new Button("Changer photo de profile");
        changer.setMaterialIcon(FontImage.MATERIAL_CLOUD_UPLOAD);
        changer.setUIID("InboxNumber");
        changer.addActionListener(e -> changerImage());
        
        changer.setUIID("LinkChanger");
      mod.requestFocus();
        mod.addActionListener(e -> {
            Boolean x =Dialog.show("Attention!!!", "vous voulez modifier votre profile" ,"Oui", "Non");
            if(x)
             { 
               ServiceUtilisateur.EditUser(nom.getText(),prenom.getText(), email.getText(),password.getText(),image.getText());
                 Dialog.show("Success", "modification de votre profile avec succéee" ,"Ok",null);
             }
            });
        
        Button btndel = new Button("Delete");
         btndel.setUIID("InboxNumber2");
         int id=SessionManager.getId();
        btndel.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                new InboxForm().show();
                       ServiceUtilisateur.getInstance().deleteuser(id);
                      }
                });
        
        
        
        
        addAll(nom,prenom,email,password,image,mod,changer,btndel);    
             
        
     
        gui_Label_5.setShowEvenIfBlank(true);
        gui_Label_6.setShowEvenIfBlank(true);
        gui_Label_7.setShowEvenIfBlank(true);
        gui_Label_8.setShowEvenIfBlank(true);
        gui_Label_9.setShowEvenIfBlank(true);
        
        gui_Text_Area_1.setRows(2);
        gui_Text_Area_1.setColumns(100);
        gui_Text_Area_1.setEditable(false);
        gui_Text_Area_1_1.setRows(2);
        gui_Text_Area_1_1.setColumns(100);
        gui_Text_Area_1_1.setEditable(false);
        gui_Text_Area_1_2.setRows(2);
        gui_Text_Area_1_2.setColumns(100);
        gui_Text_Area_1_2.setEditable(false);
        gui_Text_Area_1_3.setRows(2);
        gui_Text_Area_1_3.setColumns(100);
        gui_Text_Area_1_3.setEditable(false);
        gui_Text_Area_1_4.setRows(2);
        gui_Text_Area_1_4.setColumns(100);
        gui_Text_Area_1_4.setEditable(false);
        
    }
    
    
    
    
      private void changerImage(){
        Display.getInstance().openGallery(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent ev) {
                if (ev != null && ev.getSource() != null) {
                    String filePath = (String) ev.getSource();
                    int fileNameIndex = filePath.lastIndexOf("/") + 1;
                     fileName = filePath.substring(fileNameIndex);
System.out.println(fileName);
                    Image img = null;
                    try {
                       img = Image.createImage(FileSystemStorage.getInstance().openInputStream(filePath));
                   //  img = Image.createImage(FileSystemStorage.getInstance().openInputStream("http://localhost:8081/symfonyProject/public/uploads/image/"+fileName));
                        Dialog.show("Success", "Image selectionnée" ,"Ok",null);
                    } catch (IOException e) {
                        e.printStackTrace();
                    }
/*
                    MultiList photoList = findPhotoList();
                    Hashtable tableItem = new Hashtable();
                    tableItem.put("icon", img.scaled(Display.getInstance().getDisplayHeight() / 10, -1));
                    tableItem.put("emblem", fileName);
                    photoList.getModel().addItem(tableItem);*/
                    // Do something, add to List
                }
            }
        }, Display.GALLERY_IMAGE);
    }
    private void addStringValue(String s, Component v) {
        add(BorderLayout.west(new Label(s, "PaddedLabel")).
                add(BorderLayout.CENTER, v));
       // add(createLineSeparator());
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  private com.codename1.ui.Container gui_Container_1 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BorderLayout());
    private com.codename1.ui.Container gui_Container_2 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    private com.codename1.ui.Label gui_Label_1 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_4 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    private com.codename1.ui.Label gui_Label_4 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_3 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BoxLayout(com.codename1.ui.layouts.BoxLayout.Y_AXIS));
    private com.codename1.ui.Label gui_Label_3 = new com.codename1.ui.Label();
    private com.codename1.ui.Label gui_Label_2 = new com.codename1.ui.Label();
    private com.codename1.ui.TextArea gui_Text_Area_1 = new com.codename1.ui.TextArea();
    private com.codename1.ui.Label gui_Label_6 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_1_1 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BorderLayout());
    private com.codename1.ui.Container gui_Container_2_1 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    private com.codename1.ui.Label gui_Label_1_1 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_4_1 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    private com.codename1.ui.Label gui_Label_4_1 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_3_1 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BoxLayout(com.codename1.ui.layouts.BoxLayout.Y_AXIS));
    private com.codename1.ui.Label gui_Label_3_1 = new com.codename1.ui.Label();
    private com.codename1.ui.Label gui_Label_2_1 = new com.codename1.ui.Label();
    private com.codename1.ui.TextArea gui_Text_Area_1_1 = new com.codename1.ui.TextArea();
    private com.codename1.ui.Label gui_Label_7 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_1_2 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BorderLayout());
    private com.codename1.ui.Container gui_Container_2_2 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    private com.codename1.ui.Label gui_Label_1_2 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_4_2 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    private com.codename1.ui.Label gui_Label_4_2 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_3_2 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BoxLayout(com.codename1.ui.layouts.BoxLayout.Y_AXIS));
    private com.codename1.ui.Label gui_Label_3_2 = new com.codename1.ui.Label();
    private com.codename1.ui.Label gui_Label_2_2 = new com.codename1.ui.Label();
    private com.codename1.ui.TextArea gui_Text_Area_1_2 = new com.codename1.ui.TextArea();
    private com.codename1.ui.Label gui_Label_8 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_1_3 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BorderLayout());
    private com.codename1.ui.Container gui_Container_2_3 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    private com.codename1.ui.Label gui_Label_1_3 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_4_3 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    private com.codename1.ui.Label gui_Label_4_3 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_3_3 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BoxLayout(com.codename1.ui.layouts.BoxLayout.Y_AXIS));
    private com.codename1.ui.Label gui_Label_3_3 = new com.codename1.ui.Label();
    private com.codename1.ui.Label gui_Label_2_3 = new com.codename1.ui.Label();
    private com.codename1.ui.TextArea gui_Text_Area_1_3 = new com.codename1.ui.TextArea();
    private com.codename1.ui.Label gui_Label_9 = new com.codename1.ui.Label();
     private com.codename1.ui.Label gui_Label_10 = new com.codename1.ui.Label();
      private com.codename1.ui.Label gui_Label_11 = new com.codename1.ui.Label();
       private com.codename1.ui.Label gui_Label_12 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_1_4 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BorderLayout());
    private com.codename1.ui.Container gui_Container_2_4 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    private com.codename1.ui.Label gui_Label_1_4 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_4_4 = new com.codename1.ui.Container(new com.codename1.ui.layouts.FlowLayout());
    private com.codename1.ui.Label gui_Label_4_4 = new com.codename1.ui.Label();
    private com.codename1.ui.Container gui_Container_3_4 = new com.codename1.ui.Container(new com.codename1.ui.layouts.BoxLayout(com.codename1.ui.layouts.BoxLayout.Y_AXIS));
    private com.codename1.ui.Label gui_Label_3_4 = new com.codename1.ui.Label();
    private com.codename1.ui.Label gui_Label_2_4 = new com.codename1.ui.Label();
    private com.codename1.ui.TextArea gui_Text_Area_1_4 = new com.codename1.ui.TextArea();
    private com.codename1.ui.Label gui_Label_5 = new com.codename1.ui.Label();

     private com.codename1.ui.Button gui_Button_2 = new com.codename1.ui.Button();
       private com.codename1.ui.Button gui_Button_3 = new com.codename1.ui.Button();
        private com.codename1.ui.Button gui_Button_4 = new com.codename1.ui.Button();
       private com.codename1.ui.Button gui_Button_5 = new com.codename1.ui.Button();    
}
