/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;

import com.codename1.components.ImageViewer;
import com.codename1.components.InfiniteProgress;
import com.codename1.components.MultiButton;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Command;
import com.codename1.ui.Component;
import static com.codename1.ui.Component.BOTTOM;
import static com.codename1.ui.Component.CENTER;
import static com.codename1.ui.Component.LEFT;
import static com.codename1.ui.Component.RIGHT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Font;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Slider;
import com.codename1.ui.Tabs;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Border;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Eventl;
import com.mycompany.services.ServiceEval;
import com.mycompany.services.ServiceEventl;


import java.io.IOException;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.Map;
/**
 *
 * @author Home
 */
public class ListE extends BaseForm1 {
    int n=0;
    Form current;
    Image imgg = null;
    ImageViewer iv = null;
    EncodedImage ec;
     private void initStarRankStyle(Style s, Image star) {
        s.setBackgroundType(Style.BACKGROUND_IMAGE_TILE_BOTH);
        s.setBorder(Border.createEmpty());
        s.setBgImage(star);
        s.setBgTransparency(0);
    }

    private Slider createStarRankSlider(int r) {
        Slider starRank = new Slider();
        starRank.setEditable(true);
        starRank.setMinValue(0);
        starRank.setMaxValue(5);
        starRank.setProgress(r);
        Font fnt = Font.createTrueTypeFont("native:MainLight", "native:MainLight").
                derive(Display.getInstance().convertToPixels(5, true), Font.STYLE_PLAIN);
        Style s = new Style(0xffff33, 0, fnt, (byte) 0);
        Image fullStar = FontImage.createMaterial(FontImage.MATERIAL_STAR, s).toImage();
        s.setOpacity(100);
        s.setFgColor(0);
        Image emptyStar = FontImage.createMaterial(FontImage.MATERIAL_STAR, s).toImage();
        initStarRankStyle(starRank.getSliderEmptySelectedStyle(), emptyStar);
        initStarRankStyle(starRank.getSliderEmptyUnselectedStyle(), emptyStar);
        initStarRankStyle(starRank.getSliderFullSelectedStyle(), fullStar);
        initStarRankStyle(starRank.getSliderFullUnselectedStyle(), fullStar);
        // starRank.setPreferredSize(new Dimension(fullStar.getWidth() * 5, fullStar.getHeight()));
        
        return starRank;
    }

    public ListE(Resources res ,int n,Form previous) {
  
                super("Newsfeed",BoxLayout.y());
     Toolbar tb=new Toolbar(true);
        current = this;
            setToolBar(tb);
            getTitleArea().setUIID("Container");
            getContentPane().setScrollVisible(false);
      
        super.addSideMenu(res);
        tb.addSearchCommand(e -> {});
        
        Tabs swipe = new Tabs();

        Label spacer1 = new Label();
        Label spacer2 = new Label();
       addTab(swipe, res.getImage("gallery2.png"), spacer1, "15 Likes  ", "85 Comments", "Integer ut placerat purued non dignissim neque. ");
         swipe.setUIID("Container");
        swipe.getContentPane().setUIID("Container");
        swipe.hideTabs();
        
        ButtonGroup bg = new ButtonGroup();
        int size = Display.getInstance().convertToPixels(1);
        Image unselectedWalkthru = Image.createImage(size, size, 0);
        Graphics g = unselectedWalkthru.getGraphics();
        g.setColor(0xffffff);
        g.setAlpha(100);
        g.setAntiAliased(true);
        g.fillArc(0, 0, size, size, 0, 360);
        Image selectedWalkthru = Image.createImage(size, size, 0);
        g = selectedWalkthru.getGraphics();
        g.setColor(0xffffff);
        g.setAntiAliased(true);
        g.fillArc(0, 0, size, size, 0, 360);
        RadioButton[] rbs = new RadioButton[swipe.getTabCount()];
        FlowLayout flow = new FlowLayout(CENTER);
        flow.setValign(BOTTOM);
        Container radioContainer = new Container(flow);
        for(int iter = 0 ; iter < rbs.length ; iter++) {
            rbs[iter] = RadioButton.createToggle(unselectedWalkthru, bg);
            rbs[iter].setPressedIcon(selectedWalkthru);
            rbs[iter].setUIID("Label");
            radioContainer.add(rbs[iter]);
        }
//                
       rbs[0].setSelected(true);
        swipe.addSelectionListener((i, ii) -> {
          if(!rbs[ii].isSelected()) {
             rbs[ii].setSelected(true);
          }
       });
        
        Component.setSameSize(radioContainer, spacer1, spacer2);
        add(LayeredLayout.encloseIn(swipe, radioContainer));
        
        ButtonGroup barGroup = new ButtonGroup();
              Button BUTActualiser = new Button("Actualiser");
        BUTActualiser.addActionListener((evt) -> new ListE(res,0,current).show());
            Button BUTTrieNom = new Button("Trie selon Ville ");
            BUTTrieNom.addActionListener((evt) -> new ListE(res,1,current).show());
            addAll(BUTTrieNom,BUTActualiser);
        RadioButton all = RadioButton.createToggle("All", barGroup);
        all.setUIID("SelectBar");
        RadioButton featured = RadioButton.createToggle("Featured", barGroup);
        featured.setUIID("SelectBar");
        RadioButton popular = RadioButton.createToggle("Popular", barGroup);
        popular.setUIID("SelectBar");
        RadioButton myFavorite = RadioButton.createToggle("My Favorites", barGroup);
        myFavorite.setUIID("SelectBar");
        
       Label arrow = new Label(res.getImage("news-tab-down-arrow.png"), "Container");
           all.addActionListener((e) -> {
               InfiniteProgress ip = new InfiniteProgress();
       final Dialog ipDlg = ip.showInifiniteBlocking();
        
        AfficheEForm a = new AfficheEForm(res,"");
            a.show();
            refreshTheme();
        });
              featured .addActionListener((e) -> {
               InfiniteProgress ip = new InfiniteProgress();
       final Dialog ipDlg = ip.showInifiniteBlocking();
        
        AfficheEForm a = new AfficheEForm(res,"");
            a.show();
            refreshTheme();
        });
                           featured.addActionListener((evt) -> new AfficheEForm(res,"").show());

        add(LayeredLayout.encloseIn(
                GridLayout.encloseIn(4, all, featured, popular, myFavorite),
                FlowLayout.encloseBottom(arrow)
       ));
        
        all.setSelected(true);
        arrow.setVisible(false);
        addShowListener(e -> {
            arrow.setVisible(true);
            updateArrowPosition(all, arrow);
        });
        bindButtonSelection(all, arrow);
        bindButtonSelection(featured, arrow);
        bindButtonSelection(popular, arrow);
        bindButtonSelection(myFavorite, arrow);
        
        // special case for rotation
           addOrientationListener(e -> {
            updateArrowPosition(barGroup.getRadioButton(barGroup.getSelectedIndex()), arrow);
        });
       // setupSideMenu(res);
 if(n==0)
            {
        ArrayList<Eventl> events;
        events = ServiceEventl.getInstance().affichageEvent();
        for (Eventl c : events) {
           
               Container c1 = new Container(new BoxLayout(BoxLayout.Y_AXIS));
               Container c2 = new Container(new BoxLayout(BoxLayout.X_AXIS));
                Map<Eventl, Float> rate = new HashMap<>();
                rate = ServiceEval.getInstance().getAllTasks();
                System.out.println("imageeeeeeee ::::::");
                System.out.println(c.getPhoto());
              Label l = new Label("Description  :"+c.getDescription());
              
                 MultiButton sp = new MultiButton(c.getTitre());
         
             sp.setTextLine1("titre: "+c.getTitre()+" ville : "+c.getVille());
            
                     c1.add(sp);
                

                Label l3 = new Label("" + c.getIdevent());
                l3.setVisible(false);
 
                String url = "http://localhost/piweb/FirstPi1/public/images/" + c.getPhoto();
                ec = EncodedImage.createFromImage(Image.createImage(200, 150, 0xffff0000), true);
                imgg = URLImage.createToStorage(ec, url, url, URLImage.RESIZE_SCALE);
                iv = new ImageViewer(imgg);
                c1.add(l);
     
                //c1.add(iv);
                for (Map.Entry<Eventl, Float> entry : rate.entrySet()) {
                    {
                        String pp = entry.getValue().toString();
                        float nbrrate = Float.parseFloat(pp);
                       // c1.add(FlowLayout.encloseCenter(createStarRankSlider((int) nbrrate)));
                    }
//;                     }
                }
                // createStarRankSlider
//               c1.add(l);
           //   c1.add(l1);
//                c1.add(l2);
//                c1.add(l3);
               c2.add(iv);
                c2.add(c1);
                add(c2);
                iv.addPointerReleasedListener(e -> new EventRate( res, Integer.parseInt(l3.getText())).show());    
        }
       // setupSideMenu(res,current);
   //    getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());
       
    }
     if(n==1){
      ArrayList<Eventl> events;
        events = ServiceEventl.getInstance().order_By_NomJSON();
        for (Eventl c : events) {
           
               Container c1 = new Container(new BoxLayout(BoxLayout.Y_AXIS));
               Container c2 = new Container(new BoxLayout(BoxLayout.X_AXIS));
                Map<Eventl, Float> rate = new HashMap<>();
                rate = ServiceEval.getInstance().getAllTasks();
                System.out.println("imageeeeeeee ::::::");
                   System.out.println(c.getPhoto());
              Label l = new Label("Description  :"+c.getDescription());
              
                 MultiButton sp = new MultiButton(c.getTitre());
         
             sp.setTextLine1("titre: "+c.getTitre()+" ville : "+c.getVille());
            
                     c1.add(sp);
                Label l3 = new Label("" + c.getIdevent());
                l3.setVisible(false);
                String url = "http://localhost/piweb/FirstPi1/public/images/" + c.getPhoto();
                ec = EncodedImage.createFromImage(Image.createImage(200, 150, 0xffff0000), true);
                imgg = URLImage.createToStorage(ec, url, url, URLImage.RESIZE_SCALE);
                iv = new ImageViewer(imgg);
                c1.add(l);
              
                //c1.add(iv);
                for (Map.Entry<Eventl, Float> entry : rate.entrySet()) {
                    {
                        String pp = entry.getValue().toString();
                        float nbrrate = Float.parseFloat(pp);
                       // c1.add(FlowLayout.encloseCenter(createStarRankSlider((int) nbrrate)));
                    }
//;                     }
                }
                // createStarRankSlider
//                c1.add(l);
//                c1.add(l1);
//                c1.add(l2);
//                c1.add(l3);
               c2.add(iv);
                c2.add(c1);
                add(c2);
                iv.addPointerReleasedListener(e -> new EventRate( res, Integer.parseInt(l3.getText())).show());    
        }
    






}
    }


    private Image colorCircle(int color) {
        int size = Display.getInstance().convertToPixels(3);
        Image i = Image.createImage(size, size, 0);
        Graphics g = i.getGraphics();
        g.setColor(color);
        g.fillArc(0, 0, size, size, 0, 360);
        return i;
    }
    
    
    
    private void addButton(Image img, String titre, String ville,Eventl rec, boolean liked, int likeCount, int commentCount) {
       int height = Display.getInstance().convertToPixels(11.5f);
       int width = Display.getInstance().convertToPixels(14f);
       Button image = new Button(img.fill(width, height));
       image.setUIID("Label");
       Container cnt = BorderLayout.west(image);
       cnt.setLeadComponent(image);

        Label titreTxt = new Label("titre : "+rec.getTitre(),"NewsTopLine2");
        Label villeTxt = new Label("ville : "+rec.getVille(),"NewsTopLine2" );
        
       Label likes = new Label(likeCount + " Likes  ", "NewsBottomLine");
       likes.setTextPosition(RIGHT);
       if(!liked) {
           FontImage.setMaterialIcon(likes, FontImage.MATERIAL_FAVORITE);
       } else {
           Style s = new Style(likes.getUnselectedStyle());
           s.setFgColor(0xff2d55);
           FontImage heartImage = FontImage.createMaterial(FontImage.MATERIAL_FAVORITE, s);
           likes.setIcon(heartImage);
       }
       Label comments = new Label(commentCount + " Comments", "NewsBottomLine");
       FontImage.setMaterialIcon(likes, FontImage.MATERIAL_CHAT);
       
       
       cnt.add(BorderLayout.CENTER, 
               BoxLayout.encloseY(
                     
                         BoxLayout.encloseY(villeTxt),
                BoxLayout.encloseY(titreTxt)
               ));
       add(cnt);
       image.addActionListener(e -> ToastBar.showMessage(titre, FontImage.MATERIAL_INFO));
   }
     
    private void bindButtonSelection(Button b, Label arrow) {
        b.addActionListener(e -> {
            if(b.isSelected()) {
                updateArrowPosition(b, arrow);
            }
        });
    }

   private void updateArrowPosition(Button b, Label arrow) {
        arrow.getUnselectedStyle().setMargin(LEFT, b.getX() + b.getWidth() / 2 - arrow.getWidth() / 2);
        arrow.getParent().repaint();
        
        
    }
      private void addTab(Tabs swipe, Image img, Label spacer, String likesStr, String commentsStr, String text) {
        int size = Math.min(Display.getInstance().getDisplayWidth(), Display.getInstance().getDisplayHeight());
        if(img.getHeight() < size) {
            img = img.scaledHeight(size);
        }
        Label likes = new Label(likesStr);
        Style heartStyle = new Style(likes.getUnselectedStyle());
        heartStyle.setFgColor(0xff2d55);
        FontImage heartImage = FontImage.createMaterial(FontImage.MATERIAL_FAVORITE, heartStyle);
        likes.setIcon(heartImage);
        likes.setTextPosition(RIGHT);

        Label comments = new Label(commentsStr);
        FontImage.setMaterialIcon(comments, FontImage.MATERIAL_CHAT);
        if(img.getHeight() > Display.getInstance().getDisplayHeight() / 2) {
            img = img.scaledHeight(Display.getInstance().getDisplayHeight() / 2);
        }
        ScaleImageLabel image = new ScaleImageLabel(img);
        image.setUIID("Container");
        image.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
        Label overlay = new Label(" ", "ImageOverlay");
        
        Container page1 = 
            LayeredLayout.encloseIn(
                image,
                overlay,
                BorderLayout.south(
                    BoxLayout.encloseY(
                            new SpanLabel(text, "LargeWhiteText"),
                            FlowLayout.encloseIn(likes, comments),
                            spacer
                        )
                )
            );

        swipe.addTab("", page1);
    }
    

}
