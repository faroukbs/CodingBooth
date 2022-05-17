/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.services;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import static com.codename1.io.Log.e;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;

import com.codename1.ui.events.ActionListener;
import com.mycompany.entities.Eventl;
import com.mycompany.myapp.util.Statics;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;
import java.util.Map;


/**
 *
 * @author Home
 */
public class ServiceEventl {
    
  public ArrayList<Eventl> Eventl;
    
      public static ServiceEventl instance = null;
    private ConnectionRequest req;
     public static boolean resultOk = true;
     
    
      public static ServiceEventl getInstance() {
        if (instance == null) {
            instance = new ServiceEventl();
        }
        return instance;
    }
    public ArrayList<Eventl> getEventl;
         private ServiceEventl() {
        req = new ConnectionRequest();
    }
 public boolean resultOK;
  public boolean ajouterevent(Eventl l){
                 String url = Statics.BASE_URL+"/addeventl?titre="+l.getTitre()+"&ville="+l.getVille()+"&description="+l.getDescription()+"&photo="+l.getPhoto();
               req.setUrl(url);
                 req.addResponseListener((e) -> {
                    resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
        String str = new String(req.getResponseData());
        System.out.println("data"+str);
    });
        NetworkManager.getInstance().addToQueueAndWait(req);
return resultOK;
   
    
   
  }
 //Update 
    public boolean modifierevent(Eventl eventl) {
         String url = Statics.BASE_URL +"/updateevent?id="+eventl.getIdevent()+"&titre="+eventl.getTitre()+"&ville="+eventl.getVille()+"&description="+eventl.getDescription()+"&photo="+eventl.getPhoto();
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOk = req.getResponseCode() == 200 ;  // Code response Http 200 ok
                req.removeResponseListener(this);
            }
        });
        
    NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha
    return resultOk;
        
    }
    
 
      //Delete 
    public boolean deleteEvenement(int idevent ) {
        String url = Statics.BASE_URL +"/deleteeventJSON/"+idevent+"";
        
        req.setUrl(url);
        
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                    
                    req.removeResponseCodeListener(this);
            }
        });
        
        NetworkManager.getInstance().addToQueueAndWait(req);
        return  resultOk;
    }
  public ArrayList<Eventl> affichageEvent() 
     {
        ArrayList<Eventl> result = new ArrayList<>();
        String  url = Statics.BASE_URL +"/Allevent";
         req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser jsonp;                
                jsonp = new JSONParser();
                try {
                    //renvoi une map avec clé = root et valeur le reste
                    Map<String, Object> mapEvent = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));

                    List<Map<String, Object>> listOfMaps = (List<Map<String, Object>>) mapEvent.get("root");
                      
                    for (Map<String, Object> obj : listOfMaps) {
                        Eventl e = new Eventl();
                   int id = (int) Float.parseFloat(obj.get("idevent").toString());
                        String ville = obj.get("ville").toString();
                        String titre = obj.get("titre").toString();
                        String description = obj.get("description").toString();
   String photo = obj.get("photo").toString();
                        
                        e.setIdevent((int) id);
                        e.setTitre(titre);
                        e.setVille(ville);
                           e.setDescription(description);
                     e.setPhoto(photo);
                    
                    
//                        String DateConverter=obj.get("date").toString().substring(obj.get("Date").toString().indexOf("timestamp")+10 , obj.get("Date").toString().lastIndexOf("}"));      
   //             Date currentTime = new Date(Double.valueOf(DateConverter).longValue() * 1000);
   //             SimpleDateFormat formatter = new SimpleDateFormat("yyyy-MM-dd");
    //            String dateString = formatter.format(currentTime);
    //            v.setDate(dateString);
                result.add(e);
                  
                    }
                } 

       catch(Exception e ){
                       e.printStackTrace();
                   }
            }           
                });
        
         NetworkManager.getInstance().addToQueueAndWait(req);
                             
           return result;
    }  
  
      public ArrayList<Eventl> order_By_NomJSON() 
     {
        ArrayList<Eventl> result = new ArrayList<>();
            String  url = Statics.BASE_URL +"/order_By_ville";
         req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser jsonp;                
                jsonp = new JSONParser();
                try {
                    //renvoi une map avec clé = root et valeur le reste
                    Map<String, Object> mapEvent = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));

                    List<Map<String, Object>> listOfMaps = (List<Map<String, Object>>) mapEvent.get("root");
                      
                    for (Map<String, Object> obj : listOfMaps) {
                        Eventl e = new Eventl();
                        int id = (int) Float.parseFloat(obj.get("idevent").toString());
                        String ville = obj.get("ville").toString();
                        String titre = obj.get("titre").toString();
                        String description = obj.get("description").toString();
   String photo = obj.get("photo").toString();
                        
                        e.setIdevent((int) id);
                        e.setTitre(titre);
                        e.setVille(ville);
                           e.setDescription(description);
                     e.setPhoto(photo);
                    
                    
//                        String DateConverter=obj.get("date").toString().substring(obj.get("Date").toString().indexOf("timestamp")+10 , obj.get("Date").toString().lastIndexOf("}"));      
   //             Date currentTime = new Date(Double.valueOf(DateConverter).longValue() * 1000);
   //             SimpleDateFormat formatter = new SimpleDateFormat("yyyy-MM-dd");
    //            String dateString = formatter.format(currentTime);
    //            v.setDate(dateString);
                result.add(e);
                  
                    }
                } 

       catch(Exception e ){
                       e.printStackTrace();
                   }
            }           
                });
        
         NetworkManager.getInstance().addToQueueAndWait(req);
                             
           return result;
}
      
  public ArrayList<Eventl> titrerecher(String titre) {
       ArrayList<Eventl> result = new ArrayList<>();
        String url = Statics.BASE_URL + "/detailevent/"+titre;
    req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser jsonp;                
                jsonp = new JSONParser();
                try {
                    //renvoi une map avec clé = root et valeur le reste
                    Map<String, Object> mapEvent = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));

                    List<Map<String, Object>> listOfMaps = (List<Map<String, Object>>) mapEvent.get("root");
                      
                    for (Map<String, Object> obj : listOfMaps) {
                        Eventl e = new Eventl();
                        int id = (int) Float.parseFloat(obj.get("idevent").toString());
                        String ville = obj.get("ville").toString();
                        String titre = obj.get("titre").toString();
                       
   String photo = obj.get("photo").toString();
                        
                        e.setIdevent((int) id);
                        e.setTitre(titre);
                        e.setVille(ville);
                     e.setPhoto(photo);
                    
                    
//                        String DateConverter=obj.get("date").toString().substring(obj.get("Date").toString().indexOf("timestamp")+10 , obj.get("Date").toString().lastIndexOf("}"));      
   //             Date currentTime = new Date(Double.valueOf(DateConverter).longValue() * 1000);
   //             SimpleDateFormat formatter = new SimpleDateFormat("yyyy-MM-dd");
    //            String dateString = formatter.format(currentTime);
    //            v.setDate(dateString);
                result.add(e);
                  
                    }
                } 

       catch(Exception e ){
                       e.printStackTrace();
                   }
            }           
                });
        
         NetworkManager.getInstance().addToQueueAndWait(req);
                             
           return result;
    }
}
    
