/*
 * Copyright (c) 2016, Codename One
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated 
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation 
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, 
 * and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions 
 * of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT 
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF 
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE 
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. 
 */

package com.gogym.gui;

import com.codename1.io.Storage;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.util.Resources;

/**
 * Utility methods common to forms e.g. for binding the side menu
 *
 * @author Shai Almog
 */
public class BaseForm extends Form {
    public void installSidemenu(Resources res) {
        /*Image selection = res.getImage("selection-in-sidemenu.png");
        
        Image inboxImage = null;
        if(isCurrentInbox()) inboxImage = selection;

        Image trendingImage = null;
        if(isCurrentTrending()) trendingImage = selection;
        
        Image calendarImage = null;
        if(isCurrentCalendar()) calendarImage = selection;
        
        Image statsImage = null;
        if(isCurrentStats()) statsImage = selection;
        */
        
         // spacer
        
        getToolbar().addComponentToSideMenu(new Label(SessionManager.getImage(), "Container"));
        getToolbar().addComponentToSideMenu(new Label(SessionManager.getEmail(), "SideCommandNoPad"));
        getToolbar().addComponentToSideMenu(new Label(" ", "SideCommand"));
        
        Button inboxButton = new Button("Accueil");
        inboxButton.setUIID("SideCommand");
        inboxButton.getAllStyles().setPaddingBottom(0);
        Container inbox = FlowLayout.encloseMiddle(inboxButton);
        inbox.setLeadComponent(inboxButton);
        inbox.setUIID("SideCommand");
        inboxButton.addActionListener(e -> new InboxForm().show());
        getToolbar().addComponentToSideMenu(inbox);
        
       // getToolbar().addCommandToSideMenu("Stat", statsImage, e -> new StatsForm(res).show());
       // getToolbar().addCommandToSideMenu("Calendar", calendarImage, e -> new CalendarForm(res).show());
         //getToolbar().addCommandToSideMenu("Trending", trendingImage, e -> new TrendingForm(res).show());
         

/*getToolbar().addCommandToSideMenu("Stats", null, e ->{
    new StatForm().show();
        });
getToolbar().addCommandToSideMenu("Affich Rest", null, e ->{
    new AffichAdminRest().show();
        });
getToolbar().addCommandToSideMenu("Affich Region", null, e ->{
    new AffichAdminReg().show();
        });
getToolbar().addCommandToSideMenu("Ajout Region", null, e ->{
    new AjoutRegion().show();
        });
      
getToolbar().addCommandToSideMenu("Ajout Resto", null, e ->{
    new AjoutResto().show();
        });*/
getToolbar().addCommandToSideMenu("Profil", null, e ->{
    new Profil().show();
        }); 
getToolbar().addCommandToSideMenu("Déconnexion", null, e ->{ new SignInForm().show();
SessionManager.pref.clearAll();  
Storage.getInstance().clearStorage();
Storage.getInstance().clearCache(); //code deconexion
//System.out.println(SessionManager.getUserName());

});
   refreshTheme();    
       
        
    }

        
    protected boolean isCurrentInbox() {
        return false;
    }
    
    protected boolean isCurrentTrending() {
        return false;
    }

    protected boolean isCurrentCalendar() {
        return false;
    }

    protected boolean isCurrentStats() {
        return false;
    }
}
