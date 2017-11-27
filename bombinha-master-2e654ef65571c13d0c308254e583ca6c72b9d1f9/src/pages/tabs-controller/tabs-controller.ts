import { VisualizarTabelaResumoPage } from '../visualizar-tabela-resumo/visualizar-tabela-resumo';
import { VisualizadorDeGrFicosPage } from '../visualizador-de-gr-ficos/visualizador-de-gr-ficos';
import { ConfiguraEsDoAplicativoPage } from '../configura-es-do-aplicativo/configura-es-do-aplicativo';
//import { HomePage } from '../home/home';
//import { VisualizarTabelaResumoPage } from '../visualizar-tabela-resumo/visualizar-tabela-resumo';
//import { VisualizadorDeGrFicosPage } from '../visualizador-de-gr-ficos/visualizador-de-gr-ficos';
import { GraficosPage } from '../graficos/graficos';
//import { ConfiguraEsDoAplicativoPage } from '../configura-es-do-aplicativo/configura-es-do-aplicativo';
import { Component } from '@angular/core';
import { HomePage } from '../home/home';

@Component({
  templateUrl: 'tabs-controller.html'
})
export class TabsControllerPage {

  tab1Root = HomePage;
  tab2Root = VisualizarTabelaResumoPage;
  tab3Root = VisualizadorDeGrFicosPage;
  tab4Root = GraficosPage;  //Botão de emergência
  tab5Root = ConfiguraEsDoAplicativoPage;
  constructor() {}
  //
  // goToHome(params){
  //   if (!params) params = {};
  //   this.navCtrl.push(HomePage);
  // }goToVisualizarTabelaResumo(params){
  //   if (!params) params = {};
  //   this.navCtrl.push(VisualizarTabelaResumoPage);
  // }goToVisualizadorDeGrFicos(params){
  //   if (!params) params = {};
  //   this.navCtrl.push(VisualizadorDeGrFicosPage);
  // }goToConfiguraEsDoAplicativo(params){
  //   if (!params) params = {};
  //   this.navCtrl.push(ConfiguraEsDoAplicativoPage);
  // }
  // getHomePage(){
  //   return HomePage;
  // }
}
