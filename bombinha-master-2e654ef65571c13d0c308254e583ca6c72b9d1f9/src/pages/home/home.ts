import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import {TabsControllerPage} from '../tabs-controller/tabs-controller';
import {CadastrarTerapiaPage} from '../cadastrar-terapia/cadastrar-terapia';


@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  public tabs = TabsControllerPage;
  constructor(public navCtrl: NavController) {

  }
  goToCadastrarTerapia(){
    this.navCtrl.push(CadastrarTerapiaPage);
  }
  goToCadastrarUsuario(params){
    if (!params) params = {};
  //  this.navCtrl.push(CadastrarUsuarioPage);
  }

}
