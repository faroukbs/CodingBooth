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
import com.mycompany.entities.Evaluation;



import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.LinkedHashMap;
import java.util.List;
import java.util.Map;

import com.mycompany.entities.Eventl;
import com.mycompany.myapp.util.Statics;

/**
 *
 * @author Home
 */
public class ServiceEval {
    public LinkedHashMap<String, Object> aa = new LinkedHashMap<>();

    public ArrayList<Eventl> event;
    public Map<Eventl, Float> events;


    public static ServiceEval instance = null;
    public boolean resultOK;
    private ConnectionRequest req;
    private ConnectionRequest cr;

    private ServiceEval() {
        req = new ConnectionRequest();
    }

    public static ServiceEval getInstance() {
        if (instance == null) {
            instance = new ServiceEval();
        }
        return instance;
    }

    public Map<Eventl, Float> parseEvent(String jsonText) {
        Map<Eventl, Float> hm = new HashMap();
        System.out.println("ggggggg");

        try {

            event = new ArrayList<>();
          
            JSONParser j = new JSONParser();
            Map<String, Object> tasksListJson = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));
            System.out.println("jesontext parseEvent: " + jsonText);
            List<Map<String, Object>> list = (List<Map<String, Object>>) tasksListJson.get("root");
            System.out.println("List parseEvent: " + list);
            
            for (Map<String, Object> obj : list) {

                Eventl t = new Eventl();
              
                System.out.println("hello titre " + obj);
//                  float idd = Float.parseFloat(obj.get("id").toString());
             
                float id = Float.parseFloat(obj.get("idevent").toString());
                t.setIdevent((int) id);
             
                t.setPhoto(obj.get("photo").toString());
                t.setTitre(obj.get("titre").toString());
                  t.setVille(obj.get("ville").toString());
                event.add(t);
                System.out.println(obj.get("note"));
             if(obj.get("note")==null){
                  hm.put(t,(float) 0); }
//                System.out.println("Rate: " + obj.get("rating").toString());
             else{
               hm.put(t, Float.parseFloat(obj.get("note").toString()));
                System.out.println("hm" + hm);}
            }

        } catch (IOException ex) {

        }
        return hm;
    }

    public Map<Eventl, Float> getAllTasks() {
        System.out.println("idddd:  " );
        String url = Statics.BASE_URL + "/Allevent";
        cr = new ConnectionRequest(url);
        //   cr.setUrl(url);
        System.out.println("cr: " + cr.getUrl());

        cr.addResponseListener(new ActionListener<NetworkEvent>() {

            @Override
            public void actionPerformed(NetworkEvent evt) {
                System.out.println("hello omaa jmai ");
                String res = new String(cr.getResponseData());

                System.out.println(res);
                events = parseEvent(res);
                System.out.println("bbb :" + events);

            }
        });
        NetworkManager.getInstance().addToQueueAndWait(cr);
        return events;
    }
    
       public boolean addRate(Evaluation r) {
      String url = Statics.BASE_URL+"/addrate?note="+r.getNote()+"&idevent="+r.getC().getIdevent();
        req.setUrl(url);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200; //Code HTTP 200 OK
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;
    }
}
