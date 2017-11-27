import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { TabsControllerPage } from '../tabs-controller/tabs-controller';
import { CadastrarUsuarioPage } from '../cadastrarUsuario/cadastrarUsuario';
@Component({
  selector: 'page-login',
  templateUrl: 'login.html'
})
export class LoginPage {

  constructor(public navCtrl: NavController) {
  }
  goToHome(params){
    if (!params) params = {};
    this.navCtrl.push(TabsControllerPage);
  }
  goToCadastrarUsuario(params){
    if (!params) params = {};
    this.navCtrl.push(CadastrarUsuarioPage);
  }
}
