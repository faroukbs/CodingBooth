/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.gogym.gui;

import com.codename1.components.FloatingHint;
import com.codename1.io.FileSystemStorage;
import com.codename1.ui.Button;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.spinner.Picker;
import com.gogym.entities.Utilisateur;
import com.gogym.services.ServiceUtilisateur;
import java.io.IOException;




/**
 *
 * @author hp
 */
public class Inscription extends com.codename1.ui.Form{
    
    public Inscription() {
        this(com.codename1.ui.util.Resources.getGlobalResources());
    }    
  public Inscription(com.codename1.ui.util.Resources resourceObjectInstance) {
       // initGuiBuilderComponents(resourceObjectInstance);
         
       getToolbar().setTitleComponent(
              /*  FlowLayout.encloseCenterMiddle(
                        new Label("          Home", "Title"),
                        new Label("                                  "+ServiceUser.getInstance().affichuser(mail).get(0).getUsername(), "Title")
                ),*/
                                FlowLayout.encloseRight(
                        new Label("Inscription", "Title")
                ));
       setLayout(BoxLayout.y());
                     
        setLayout(BoxLayout.y());
        
         Form previous = Display.getInstance().getCurrent();

         
        TextField nom = new TextField("","Nom ");
        TextField prenom = new TextField("","Prénom");
        Picker dateN = new Picker();
        dateN.setType(Display.PICKER_TYPE_DATE);
        TextField numtel = new TextField("","Téléphone");
        TextField email = new TextField("", "Email", 20, TextField.EMAILADDR);
        TextField password = new TextField("", "Mot de passe", 20, TextField.PASSWORD);
        
        Button picture = new Button("Télécharger une photo");
        picture.addActionListener(e -> changerImage());
        picture.setUIID("LinkChanger");
        
        Button btnValider = new Button("S'inscrire");
        btnValider.setUIID("InboxNumber3");
         
        
        Button login = new Button("Se connecter");
        login.setUIID("InboxNumber4");
        login.addActionListener(e -> previous.showBack());
      //  login.setUIID("Link");
        Label alreadHaveAnAccount = new Label("J'ai déjà un compte");
         
        
        
        /* le code lors de lenregistrement des donnees saisies   */
        btnValider.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if ((nom.getText().length()==0)||(prenom.getText().length()==0)||(email.getText().length()==0)||(password.getText().length()==0)||(numtel.getText().length()==0))
              Dialog.show("Vérifiez Vos Champs", "Vous devez saisir tout les champs du formulaire !!!", new Command("OK"));
             
                
                
                /**houni inscription **/
                else
                {    
          
                      ServiceUtilisateur.getInstance().signup( nom,prenom,email,password,dateN,numtel,"270355513_319926726699975_4182064070299297535_n-62282bc1eb1c1.jpg");
                    
                    
                    
                    }
                    
                }
                
                
            
        });
        
        addAll(nom,prenom,email,dateN,numtel,password,picture,btnValider,alreadHaveAnAccount, login);    
             
        
     
        
    }
    
    
    
    
    private void changerImage(){
        Display.getInstance().openGallery(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent ev) {
                if (ev != null && ev.getSource() != null) {
                    String filePath = (String) ev.getSource();
                    int fileNameIndex = filePath.lastIndexOf("/") + 1;
                    String fileName = filePath.substring(fileNameIndex);

                    Image img = null;
                    try {
                        img = Image.createImage(FileSystemStorage.getInstance().openInputStream(filePath));
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
    
    
    
    
    
}
