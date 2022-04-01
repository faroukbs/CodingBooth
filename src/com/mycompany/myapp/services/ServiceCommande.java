/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp.services;


import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import com.mycompany.myapp.entites.Commande;
import com.mycompany.myapp.entites.Lignecommande;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;


/**
 *
 * @author aicha
 */
public class ServiceCommande {
    //singleton 
    public static ServiceCommande instance = null ;
    
    public static boolean resultOk = true;

    //initilisation connection request 
    private ConnectionRequest req;
    
    
    public static ServiceCommande getInstance() {
        if(instance == null )
            instance = new ServiceCommande();
        return instance ;
    }
    
    
    
    public ServiceCommande() {
        req = new ConnectionRequest();
        
    }
    
    //ajout
    public void ajoutCommande(Commande commande){
        
        String url = Statics.BASE_URL+"/addCom?nom="+commande.getNom_client()+"&prenom="+commande.getPrenom_client()+"&telephone="+commande.getTelephone()+"&adresse="+commande.getAdresse()+"&montant="+commande.getMontant()+"&mode_paiement="+commande.getMode_paiement();
        req.setUrl(url);
        req.addResponseListener((e)->{
            String str = new String(req.getResponseData());
            System.out.println("data == "+str);
        });
        NetworkManager.getInstance().addToQueueAndWait(req);//execusion de la requette
    }
    //affichage
    
      public ArrayList<Commande> affichageCommande() 
     {
        ArrayList<Commande> result = new ArrayList<>();
        String  url = Statics.BASE_URL +"/Allcom";
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
                        Commande e = new Commande();
                        float id = Float.parseFloat(obj.get("idCommande").toString());
                        String nom = obj.get("nomClient").toString();
                        String prenom = obj.get("prenomClient").toString();
                        String telephone = obj.get("telephone").toString();
                        String adresse = obj.get("adresse").toString();
                        String montant = obj.get("montant").toString();
                        String modePaiement = obj.get("modePaiement").toString();
                                
                        
                       
   
                        
                        e.setIdcommande((int) id);
                        e.setNom_client(nom);
                        e.setPrenom_client(prenom);
                        e.setTelephone(telephone);
                        e.setAdresse(adresse);
                        e.setMontant(montant);
                        e.setMode_paiement(modePaiement);
                        
                     
                    
                    
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
  
    
    
    //Delete 
    public boolean deleteCommande(int idcommande ) {
        String url = Statics.BASE_URL +"/deleteCommandeJSON/"+idcommande+"";
        
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
    public boolean modifierCommande(Commande commande) {
        String url = Statics.BASE_URL +"/updateCommande?id="+commande.getIdcommande()+"&nomClient="+commande.getNom_client()+"&prenomClient="+commande.getPrenom_client();
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
