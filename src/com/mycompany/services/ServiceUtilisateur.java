/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.MultipartRequest;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Dialog;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;



import com.mycompany.myapp.InboxForm;
import com.mycompany.myapp.SessionManager;
import com.mycompany.myapp.SignInForm_1;
import com.mycompany.myapp.util.Statics;

import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Map;
import java.util.Vector;

/**
 *
 * @author Lenovo
 */
public class ServiceUtilisateur {
    
    
  //singleton 
    public static ServiceUtilisateur instance = null ;
    
   public boolean resultOK;
    

    String json;

    //initilisation connection request 
    private ConnectionRequest req;
    
    
    public static ServiceUtilisateur getInstance() {
        if(instance == null )
            instance = new ServiceUtilisateur();
        return instance ;
    }
    
    
    
    public ServiceUtilisateur() {
        req = new ConnectionRequest();
        
    }
    
    //Signup
    public void signup(TextField nom,TextField prenom,TextField email,TextField password ,Picker dateN,TextField numtel,String image) {
        
    
        
        String url = Statics.BASE_URL+"/inscriptionn?nom="+nom.getText().toString()+"&prenom="+prenom.getText().toString()+
                "&password="+password.getText().toString()+
                "&email="+email.getText().toString()+
                "&date_naissance="+dateN.getText().toString()+
                "&numTel="+numtel.getText().toString()+ "&image="+image;
               
        
        req.setUrl(url);
       
        //Control saisi
        if(nom.getText().equals(" ") && prenom.getText().equals(" ") && email.getText().equals(" ")) {
            
            Dialog.show("Erreur","Veuillez remplir les champs","OK",null);
            
        }
        
        //hethi wa9t tsir execution ta3 url 
        req.addResponseListener((e)-> {
         
            //njib data ly7atithom fi form 
            byte[]data = (byte[]) e.getMetaData();//lazm awl 7aja n7athrhom ke meta data ya3ni na5o id ta3 kol textField 
            String responseData = new String(data);//ba3dika na5o content 
            
            System.out.println("data ===>"+responseData);
              new SignInForm_1().show();
        }
        );
        
        
        //ba3d execution ta3 requete ely heya url nestanaw response ta3 server.
        NetworkManager.getInstance().addToQueueAndWait(req);
        
            
       
    }
    
    
    //SignIn
    
      
    public void login(TextField gui_Text_Field_2,TextField gui_Text_Field_1) {
        
        
        String url = Statics.BASE_URL+"/loginJSON?email="+gui_Text_Field_2.getText().toString()+"&password="+gui_Text_Field_1.getText().toString();
        req = new ConnectionRequest(url, false); //false ya3ni url mazlt matba3thtich lel server
        
        req.setUrl(url);
        req.setPost(true);


       
        req.addResponseListener((e) ->{
            
            JSONParser j = new JSONParser();
            
            String json = new String(req.getResponseData()) + "";
            try {
            
            if(json.equals("failed")) {
                Dialog.show("Echec d'authentification","Email or password incorrect","OK",null);
            }
            else {
                System.out.println("data =="+json);
                
                Map<String,Object> user = j.parseJSON(new CharArrayReader(json.toCharArray()));
                
                
             
                //Session 
                float id = Float.parseFloat(user.get("id").toString());
                SessionManager.setId((int)id);//jibt id ta3 user ly3ml login w sajltha fi session ta3i
                
                SessionManager.setPassword(user.get("password").toString());
                SessionManager.setEmail(user.get("email").toString());
                SessionManager.setNom(user.get("nom").toString());
                SessionManager.setPrenom(user.get("prenom").toString());
               // SessionManager.setNumTel(String.valueOf((int)Float.parseFloat(user.get("num_tel").toString())));
               /* SimpleDateFormat formatter = new SimpleDateFormat("yyyy-M-dd");
                    Date date = formatter.parse(user.get("date_naissance").toString());
                    SessionManager.setDateNaissance(date);*/
                   if(user.get("image") != null)
                   SessionManager.setImage(user.get("image").toString());
                
                 if(user.size() >0 ) // l9a user
                   // new ListReclamationForm(rs).show();//yemchi lel list reclamation
                    new InboxForm().show();
                
               
                    }
            
            }catch(Exception ex) {
                ex.printStackTrace();
            }
            
            
   
        });
    
         //ba3d execution ta3 requete ely heya url nestanaw response ta3 server.
        NetworkManager.getInstance().addToQueueAndWait(req);
    }

    
    public static void EditUser(String nom, String prenom, String email, String password,String image)
    {
    String url = Statics.BASE_URL+"/modifieruser?nom="+nom+"&password="+password+"&email="+email+"&prenom="+prenom
            +"&image="+image;
       
    MultipartRequest req = new MultipartRequest();
        req.setUrl(url);
        req.setPost(true);
        req.addArgument("id",String.valueOf(SessionManager.getId()));
        req.addArgument("nom",nom);
        req.addArgument("password",password);
         req.addArgument("email",email);
          
           req.addArgument("image",image);
          
    System.out.println(email);
    
    req.addResponseListener((response)->
    {
     byte[] data = (byte[]) response.getMetaData();
            String s = new String(data);
            System.out.println(s);
   /* if (s.equals("succés"))
    {}
    else {Dialog.show("Erreur","Echec de modification","OK",null);}
     */       
    
    });
    NetworkManager.getInstance().addToQueueAndWait(req);
    
    
    }
    

   
              public void deleteuser(int id) {
        String url = Statics.BASE_URL + "/utilisateur/deleteuserr/"+id;
        req.setUrl(url);
        System.out.println(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  //heki 5dmtha taw nhabtha ala description
    public String getPasswordByEmail(String email, Resources rs ) {
        
        
        String url = Statics.BASE_URL+"/user/getPasswordByEmail?email="+email;
        req = new ConnectionRequest(url, false); //false ya3ni url mazlt matba3thtich lel server
        req.setUrl(url);
        
        req.addResponseListener((e) ->{
            
            JSONParser j = new JSONParser();
            
             json = new String(req.getResponseData()) + "";
            
            
            try {
            
          
                System.out.println("data =="+json);
                
                Map<String,Object> password = j.parseJSON(new CharArrayReader(json.toCharArray()));
                
                
            
            
            }catch(Exception ex) {
                ex.printStackTrace();
            }
            
            
            
        });
    
         //ba3d execution ta3 requete ely heya url nestanaw response ta3 server.
        NetworkManager.getInstance().addToQueueAndWait(req);
    return json;
    }

 

}
