/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.services;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import com.mycompany.entities.Categorie;
import com.mycompany.myapp.util.Statics;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
/**
 *
 * @author ahmed
 */
public class ServiceCategorie {
    public static ServiceCategorie instance = null;
    private ConnectionRequest req;
     public static boolean resultOk = true;
     
    
      public static ServiceCategorie getInstance() {
        if (instance == null) {
            instance = new ServiceCategorie();
        }
        return instance;
    }
    public ArrayList<Categorie> getCategorie;
         private ServiceCategorie() {
        req = new ConnectionRequest();
    }
          public boolean resultOK;
  public boolean ajoutercategorie(Categorie c){
                 String url = Statics.BASE_URL+"/addcategorie?nomcategorie="+c.getNomcategorie();
               req.setUrl(url);
                 req.addResponseListener((e) -> {
                    resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
        String str = new String(req.getResponseData());
        System.out.println("data"+str);
    });
        NetworkManager.getInstance().addToQueueAndWait(req);
return resultOK;
   
    
   
  }
  public ArrayList<Categorie> affichageCategorie() 
     {
        ArrayList<Categorie> result = new ArrayList<>();
        String  url = Statics.BASE_URL +"/Allcategorie";
         req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser jsonp;                
                jsonp = new JSONParser();
                try {
                    //renvoi une map avec clé = root et valeur le reste
                    Map<String, Object> mapCategorie = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));

                    List<Map<String, Object>> listOfMaps = (List<Map<String, Object>>) mapCategorie.get("root");
                      
                    for (Map<String, Object> obj : listOfMaps) {
                        Categorie c = new Categorie();
                        int id = (int) Float.parseFloat(obj.get("idcategorie").toString());
                        String nomcategorie = obj.get("nomcategorie").toString();


                        
                        c.setIdcategorie((int) id);
                        c.setNomcategorie(nomcategorie);

                   
                    
                    
//                        String DateConverter=obj.get("date").toString().substring(obj.get("Date").toString().indexOf("timestamp")+10 , obj.get("Date").toString().lastIndexOf("}"));      
   //             Date currentTime = new Date(Double.valueOf(DateConverter).longValue() * 1000);
   //             SimpleDateFormat formatter = new SimpleDateFormat("yyyy-MM-dd");
    //            String dateString = formatter.format(currentTime);
    //            v.setDate(dateString);
                result.add(c);
                  
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
  public boolean deletecategorie(int idcategorie) {
        String url = Statics.BASE_URL +"/deletecategorieJSON/"+idcategorie+"";
        
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
   //Update 
    public boolean modifiercategorie(Categorie c) {
         String url = Statics.BASE_URL +"/updatecategorie?id="+c.getIdcategorie()+"&nomcategorie="+c.getNomcategorie();
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
}
