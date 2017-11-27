import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { CadastrarTerapia2Page } from '../cadastrar-terapia2/cadastrar-terapia2';
import { HomePage } from '../home/home';

@Component({
  selector: 'page-cadastrar-terapia',
  templateUrl: 'cadastrar-terapia.html'
})
export class CadastrarTerapiaPage {

  constructor(public navCtrl: NavController) {
  }
  goToCadastrarTerapia2(params){
    if (!params) params = {};
    this.navCtrl.push(CadastrarTerapia2Page);
  }goToHome(params){
    if (!params) params = {};
    this.navCtrl.push(HomePage);
  }
}
