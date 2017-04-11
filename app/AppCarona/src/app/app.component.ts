import { Component } from '@angular/core';
import { Platform } from 'ionic-angular';
import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';

import { HomePage } from '../pages/home/home';
//import { Login } from '../pages/login/login';
//import { GooglePlus } from '@ionic-native/google-plus';

@Component({
  templateUrl: 'app.html'
})

export class MyApp {
  rootPage:any = HomePage;
  //pages: Array<{title: string, component: any}>;

  constructor(platform: Platform, statusBar: StatusBar, splashScreen: SplashScreen) {
    platform.ready().then(() => {
      // Okay, so the platform is ready and our plugins are available.
      // Here you can do any higher level native things you might need.
      statusBar.styleDefault();
      splashScreen.hide();
    });

    /*this.googlePlus.login()
      .then(res => console.log(res))
      .catch(err => console.error(err));*/

    /*this.pages = [
      { title: 'Home', component: HomePage },
      { title: 'Login', component: Login },      
    ];*/
  }
}

