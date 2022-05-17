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
import com.mycompany.entities.Lignecommande;
import com.mycompany.myapp.util.Statics;

import java.util.ArrayList;
import java.util.List;
import java.util.Map;
/**
 *
 * @author Home
 */
public class ServiceLignecommande {
    public static ServiceLignecommande instance = null ;
    
    public static boolean resultOk = true;
    public boolean resultOK;

    //initilisation connection request 
    private ConnectionRequest req;
    
    
    public static ServiceLignecommande getInstance() {
        if(instance == null )
            instance = new ServiceLignecommande();
        return instance ;
    }
    
    
    
    public ServiceLignecommande() {
        req = new ConnectionRequest();
        
    }
    //ajout
    public boolean ajoutLigne(Lignecommande lignecommande){
        
        String url = Statics.BASE_URL+"/addligneC?idcommande="+lignecommande.getIdcommande()+"&id_produit="+lignecommande.getIdProduit()+"&quantite="+lignecommande.getQuantite();
        //  String url = Statics.BASE_URL + "create";
        req.setUrl(url);
        req.addResponseListener((e) -> {
                        resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
        String str = new String(req.getResponseData());
        System.out.println("data"+str);
    });
        NetworkManager.getInstance().addToQueueAndWait(req);
return resultOK;
    }
    //affichage
    
      public ArrayList<Lignecommande> affichageLigne() 
     {
        ArrayList<Lignecommande> result = new ArrayList<>();
        String  url = Statics.BASE_URL +"/AllLigne";
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
                        Lignecommande e = new Lignecommande();
                        float id = Float.parseFloat(obj.get("idlignecommande").toString());
                        
                        
                        float quantite = Float.parseFloat(obj.get("quantite").toString());
                                
                        
                       
   
                        
                        e.setIdlignecommande((int) id);
                        
                        
                        e.setQuantite((int) quantite);
                   
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
      //Delete 
    public boolean deleteLigne(int idlignecommande ) {
        String url = Statics.BASE_URL +"/deleteLigneJSON/"+idlignecommande+"";
        
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
    public boolean modifierligne(Lignecommande ligne) {
        String url = Statics.BASE_URL +"/updateLignec?id="+ligne.getIdlignecommande()+"&quantite="+ligne.getQuantite();
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
