import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import {LoginPage} from '../login/login';

@Component({
  selector: 'page-cadastrarUsuario',
  templateUrl: 'cadastrarUsuario.html'
})
export class CadastrarUsuarioPage {

  constructor(public navCtrl: NavController) {
  }
  goToLogin(){
      
      this.navCtrl.push(LoginPage);
    }
}
