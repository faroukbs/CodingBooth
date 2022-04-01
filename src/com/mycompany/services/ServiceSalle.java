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
import com.mycompany.entities.Eventl;
import com.mycompany.entities.Salle;
import com.mycompany.myapp.util.Statics;
import static com.mycompany.services.ServiceEventl.resultOk;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author ahmed
 */
public class ServiceSalle {
       
      public static ServiceSalle instance = null;
    private ConnectionRequest req;
     public static boolean resultOk = true;
     
    
      public static ServiceSalle getInstance() {
        if (instance == null) {
            instance = new ServiceSalle();
        }
        return instance;
    }
    public ArrayList<Salle> getSalle;
         private ServiceSalle() {
        req = new ConnectionRequest();
    }
          public boolean resultOK;
  public boolean ajoutersalle(Salle s){
                 String url = Statics.BASE_URL+"/addsalle?nomsalle="+s.getNomsalle()+"&description="+s.getDescription()+"&idcategorie="+s.getIdcategorie();
               req.setUrl(url);
                 req.addResponseListener((e) -> {
                    resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
        String str = new String(req.getResponseData());
        System.out.println("data"+str);
    });
        NetworkManager.getInstance().addToQueueAndWait(req);
return resultOK;
   
    
   
  }
  public ArrayList<Salle> affichageSalle() 
     {
        ArrayList<Salle> result = new ArrayList<>();
        String  url = Statics.BASE_URL +"/Allsalle";
         req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                JSONParser jsonp;                
                jsonp = new JSONParser();
                try {
                    //renvoi une map avec clé = root et valeur le reste
                    Map<String, Object> mapSalle = jsonp.parseJSON(new CharArrayReader(new String(req.getResponseData()).toCharArray()));

                    List<Map<String, Object>> listOfMaps = (List<Map<String, Object>>) mapSalle.get("root");
                      
                    for (Map<String, Object> obj : listOfMaps) {
                        Salle s = new Salle();
                        int id = (int) Float.parseFloat(obj.get("idsalle").toString());
                        String nomsalle = obj.get("nomsalle").toString();
                        String description = obj.get("description").toString();

                        
                        s.setIdsalle((int) id);
                        s.setNomsalle(nomsalle);
                        s.setDescription(description);
                   
                    
                    
//                        String DateConverter=obj.get("date").toString().substring(obj.get("Date").toString().indexOf("timestamp")+10 , obj.get("Date").toString().lastIndexOf("}"));      
   //             Date currentTime = new Date(Double.valueOf(DateConverter).longValue() * 1000);
   //             SimpleDateFormat formatter = new SimpleDateFormat("yyyy-MM-dd");
    //            String dateString = formatter.format(currentTime);
    //            v.setDate(dateString);
                result.add(s);
                  
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
  public boolean deletesalle(int idsalle) {
        String url = Statics.BASE_URL +"/deletesalleJSON/"+idsalle+"";
        
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
    public boolean modifiersalle(Salle s) {
         String url = Statics.BASE_URL +"/updatesalle?id="+s.getIdsalle()+"&nomsalle="+s.getNomsalle()+"&description="+s.getDescription();
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
