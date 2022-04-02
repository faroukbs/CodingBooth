/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.myapp;
import com.codename1.components.ImageViewer;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Font;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.Slider;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.plaf.Border;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import com.mycompany.entities.Evaluation;
import com.mycompany.entities.Eventl;
import com.mycompany.services.ServiceEval;




import java.io.IOException;
import java.util.HashMap;
import java.util.Map;
/**
 *
 * @author Home
 */
public class EventRate extends BaseForm1 {
     Image imgg = null;
    ImageViewer iv = null;
    EncodedImage ec;
    ImageViewer img;

   

    private void initStarRankStyle(Style s, Image star) {
        s.setBackgroundType(Style.BACKGROUND_IMAGE_TILE_BOTH);
        s.setBorder(Border.createEmpty());
        s.setBgImage(star);
        s.setBgTransparency(0);
    }

    private Slider createStarRankSlider(Resources res,int r, int idevent) {
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
        starRank.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                Eventl c = new Eventl((int) idevent);
                Evaluation r = new Evaluation((double) starRank.getProgress(), c);
           //     System.out.println("rate" + r);
             //   System.out.println(starRank.getProgress());
                if (ServiceEval.getInstance().addRate(r)) {
                    Dialog.show("Success", "Event has been rated", new Command("OK"));
                    new ListE(res,0,current).show();

                } else {
               Dialog.show("ERROR", "Server error", new Command("OK"));
                }
            }

        });
        return starRank;
    }

    public EventRate(Resources res, int id) {
        super(BoxLayout.y());
        Toolbar tb = getToolbar();
        tb.setTitleCentered(false);
        Button menuButton = new Button("");
        menuButton.setUIID("Title");
        FontImage.setMaterialIcon(menuButton, FontImage.MATERIAL_MENU);
        menuButton.addActionListener(e -> getToolbar().openSideMenu());

        Container titleCmp = BoxLayout.encloseX(
                FlowLayout.encloseIn(menuButton), FlowLayout.encloseIn(
                new Label("Event Details ", "Title")
        )
        );

    
        
        //  Form current;

        //    current = this;
        //  System.out.println("azdzadza"+id);
        Map<Eventl, Float> clubs = new HashMap<>();
        //System.out.println("clubdddsmmm"+clubs.entrySet());
        clubs = ServiceEval.getInstance().getAllTasks();
        //  System.out.println("clubDetailform: "+clubs);
        for (Map.Entry<Eventl, Float> entry : clubs.entrySet()) {
            //System.out.println("clubsmmm"+clubs.entrySet());
            //System.out.println("club name "+entry.getKey().getNomClub()+"rate"+entry.getValue());
           
               Container c1 = new Container(new BoxLayout(BoxLayout.Y_AXIS));
                Label l = new Label(entry.getKey().getTitre());
                setTitle(l.getText());
                float idd = Float.parseFloat(entry.getValue().toString());
                int rate = ((int) idd);
                Label l0 = new Label("" + entry.getValue());
          
                 Label l3 = new Label(""+entry.getKey().getIdevent());
                  l3.setVisible(true);
                String url = "http://localhost/piweb/FirstPi1/public/images/" + entry.getKey().getPhoto();
                ec = EncodedImage.createFromImage(Image.createImage(200, 150, 0xffff0000), true);
                imgg = URLImage.createToStorage(ec, url, url, URLImage.RESIZE_SCALE);
                iv = new ImageViewer(imgg);
                c1.add(iv);
                c1.add(FlowLayout.encloseCenter(createStarRankSlider(res,rate, id)));
                c1.add(l);
                
         
                 c1.add(l3);
                //
                Container c = new Container(new BoxLayout(BoxLayout.X_AXIS));
                c.add(l0);
                Slider ra = new Slider();
                String pp = entry.getValue().toString();
                float nbrrate = Float.parseFloat(pp);
                ra.setProgress((int) nbrrate);
                ra.setMinValue(0);
                ra.setMaxValue(5);
                ra.setWidth(20);
                c.add(ra);
                Container c2 = new Container(new BoxLayout(BoxLayout.X_AXIS));
                c1.add(c);
                c2.add(c1);
                add(c2);
                l.addPointerPressedListener(e-> new EventRate(res,Integer.parseInt(l3.getText())).show());
         
        }
            tb.setTitleComponent(titleCmp);
     //   setupSideMenu(res);
        //      getToolbar().addMaterialCommandToLeftBar("", FontImage.MATERIAL_ARROW_BACK, e -> previous.showBack());

    }

}
