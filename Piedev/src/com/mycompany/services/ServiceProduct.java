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
import com.mycompany.entities.Product;
import com.mycompany.myapp.util.Statics;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author bouss
 */
public class ServiceProduct {
     public ArrayList<Product> prod;

    public static ServiceProduct instance = null;
    public boolean resultOK;
    private ConnectionRequest req;

    public ServiceProduct() {
        req = new ConnectionRequest();
    }

    public static ServiceProduct getInstance() {
        if (instance == null) {
            instance = new ServiceProduct();
        }
        return instance;
    }

    public boolean addProduct(Product p) {
        System.out.println(p);
        System.out.println("********");
        String url = Statics.BASE_URL +"/product/new?nomprod=" + p.getNomprod()+"&description=" +p.getDescription()+"&image=" + p.getImage()+"&prix=" + p.getPrix()+"&quantity=" + p.getQuantity();
        //String url = Statics.BASE_URL + "create";

        req.setUrl(url);
        req.setPost(false);

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

    public ArrayList<Product> parseProducts(String jsonText) {
        try {
            prod = new ArrayList<>();
            JSONParser j = new JSONParser();
            Map<String, Object> productsListJson
                    = j.parseJSON(new CharArrayReader(jsonText.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) productsListJson.get("root");
            for (Map<String, Object> obj : list) {
                Product p = new Product();
                float id = Float.parseFloat(obj.get("idProduit").toString());
                p.setIdProduit((int) id);
                String nom = obj.get("nomprod").toString();
                p.setNomprod(nom);
                String desc = obj.get("description").toString();
                p.setDescription(desc);
                String image = obj.get("image").toString();
                p.setImage(image);
                float prix = Float.parseFloat(obj.get("prix").toString());
                p.setPrix((float) prix);
                float quantity = Float.parseFloat(obj.get("quantity").toString());
                p.setQuantity((int) quantity);
                
                prod.add(p);
            }

        } catch (IOException ex) {

        }
        return prod;
    }

    public ArrayList<Product> getAllProduct() {
        req = new ConnectionRequest();
        //String url = Statics.BASE_URL+"/tasks/";
        String url = Statics.BASE_URL + "/product/list";
        System.out.println("===>" + url);
        req.setUrl(url);
        req.setPost(false);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                prod = parseProducts(new String(req.getResponseData()));
                req.removeResponseListener(this);
            }
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return prod;
    }
    
     public Product Detailprod( int idProduit , Product p) {
        
        String url = Statics.BASE_URL+"/product/list=?"+idProduit;
        req.setUrl(url);
        
        String str  = new String(req.getResponseData());
        req.addResponseListener(((evt) -> {
        
            JSONParser jsonp = new JSONParser();
            try {
                
                Map<String,Object>obj = jsonp.parseJSON(new CharArrayReader(new String(str).toCharArray()));
                
                p.setNomprod(obj.get("nomprod").toString());
                p.setDescription(obj.get("description").toString());
                p.setImage(obj.get("image").toString());
                p.setPrix(Integer.parseInt(obj.get("prix").toString()));
                p.setQuantity(Integer.parseInt(obj.get("quantity").toString()));
                
            }catch(IOException ex) {
                System.out.println("error related to sql :( "+ex.getMessage());
            }
            
            
            System.out.println("data === "+str);
            
            
            
        }));
        
              NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha

              return p;
        
        
    }
    
    

         public boolean  Delete(int idproduit){
       String url = Statics.BASE_URL + "/product/Delete/"+idproduit;
  
        req.setUrl(url);
        req.setPost(false);
        req.setFailSilently(true);
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                 resultOK = req.getResponseCode() == 200;
                req.removeResponseListener(this);
            }
    
        });
        NetworkManager.getInstance().addToQueueAndWait(req);
        return resultOK;

      
}
             //Update 
    public boolean modifierProduct(Product p) {
         String url = Statics.BASE_URL +"/edit?id_produit="+p.getIdProduit()+"&nomprod=" + p.getNomprod()+"&description=" +p.getDescription()+"&image=" + p.getImage()+"&prix=" + p.getPrix()+"&quantity=" + p.getQuantity();
        //String url = Statics.BASE_URL +"/updateevent?id="+eventl.getIdevent()+"&titre="+eventl.getTitre()+"&ville="+eventl.getVille()+"&photo="+eventl.getPhoto();
        req.setUrl(url);
        
        req.addResponseListener(new ActionListener<NetworkEvent>() {
            @Override
            public void actionPerformed(NetworkEvent evt) {
                resultOK = req.getResponseCode() == 200 ;  // Code response Http 200 ok
                req.removeResponseListener(this);
            }
        });
        
    NetworkManager.getInstance().addToQueueAndWait(req);//execution ta3 request sinon yet3ada chy dima nal9awha
    return resultOK;
        
    }

}

 
 
