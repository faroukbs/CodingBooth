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
import com.mycompany.entities.Ticket;
import com.mycompany.myapp.util.Statics;
import static com.mycompany.services.ServiceEventl.resultOk;
import java.io.IOException;
import java.io.Reader;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author Home
 */
public class ServiceTicket {
      private static ServiceTicket instance = null;
    public ConnectionRequest req;
    public ArrayList<Eventl> eventl;

    public boolean resultOK;

    public static ServiceTicket getInstance() {
        if(instance== null)
            instance = new ServiceTicket();
        return instance;
    }
    
        private ServiceTicket() {
        req = new ConnectionRequest();
    }
        
    public ArrayList<Ticket> affichageticket() 
     {
        ArrayList<Ticket> result = new ArrayList<>();
        String  url = Statics.BASE_URL +"/Allticketl";
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
                        Ticket t = new Ticket();
                            int prix = (int) Float.parseFloat(obj.get("prix").toString());
                     
                        int id = (int) Float.parseFloat(obj.get("idticket").toString());
                        String typeticket = obj.get("typeticket").toString();
                        String description = obj.get("description").toString();

                        t.setIdticket((int) id);
                        t.setPrix((int) prix);
                        t.setTypeticket(typeticket);
                        t.setDescription(description);
             
                    
                    
//                        String DateConverter=obj.get("date").toString().substring(obj.get("Date").toString().indexOf("timestamp")+10 , obj.get("Date").toString().lastIndexOf("}"));      
   //             Date currentTime = new Date(Double.valueOf(DateConverter).longValue() * 1000);
   //             SimpleDateFormat formatter = new SimpleDateFormat("yyyy-MM-dd");
    //            String dateString = formatter.format(currentTime);
    //            v.setDate(dateString);
                result.add(t);
                  
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
  
         public boolean Addticket(Ticket ticket)
    {
      String url = Statics.BASE_URL+"/addticket?typeticket="+ticket.getTypeticket()+"&description="+ticket.getDescription()+"&idevent="+ticket.getIdevent()+"&prix="+ticket.getPrix();
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
         
             public boolean deleteticket(int idticket ) {
        String url = Statics.BASE_URL +"/deleteticketJSON/"+idticket+"";
        
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
    public boolean modifieticket(Ticket ticket) {
         String url = Statics.BASE_URL +"/updateticket?id="+ticket.getIdticket()+"&typeticket="+ticket.getTypeticket()+"&description="+ticket.getDescription()+"&prix="+ticket.getPrix();
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
     
  
    
