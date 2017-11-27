import { NgModule, ErrorHandler } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { IonicApp, IonicModule, IonicErrorHandler } from 'ionic-angular';
import { MyApp } from './app.component';
import { TabsControllerPage } from '../pages/tabs-controller/tabs-controller';
import { LoginPage } from '../pages/login/login';
import { CadastrarUsuarioPage} from '../pages/cadastrarUsuario/cadastrarUsuario';
import { HomePage } from '../pages/home/home';
import { CadastrarTerapiaPage } from '../pages/cadastrar-terapia/cadastrar-terapia';
import { CadastrarTerapia2Page } from '../pages/cadastrar-terapia2/cadastrar-terapia2';
import { ObjetivoGlicemicoPage } from '../pages/objetivo-glicemico/objetivo-glicemico';
import { CalcularDosePage } from '../pages/calcular-dose/calcular-dose';
import { VisualizadorDeGrFicosPage } from '../pages/visualizador-de-gr-ficos/visualizador-de-gr-ficos';
import { VisualizarTabelaResumoPage } from '../pages/visualizar-tabela-resumo/visualizar-tabela-resumo';
import { ConfiguraEsDoAplicativoPage } from '../pages/configura-es-do-aplicativo/configura-es-do-aplicativo';


import { StatusBar } from '@ionic-native/status-bar';
import { SplashScreen } from '@ionic-native/splash-screen';

@NgModule({
  declarations: [
    MyApp,
    TabsControllerPage,
    LoginPage,
    CadastrarUsuarioPage,
    HomePage,
    CadastrarTerapiaPage,
    CadastrarTerapia2Page,
    ObjetivoGlicemicoPage,
    CalcularDosePage,
    VisualizadorDeGrFicosPage,
    VisualizarTabelaResumoPage,
    ConfiguraEsDoAplicativoPage,

  ],
  imports: [
    BrowserModule,
    IonicModule.forRoot(MyApp, {tabsPlacement: 'bottom', backButtonText: ''}),
  ],
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
    TabsControllerPage,
    LoginPage,
    CadastrarUsuarioPage,
    HomePage,
    CadastrarTerapiaPage,
    CadastrarTerapia2Page,
    ObjetivoGlicemicoPage,
    CalcularDosePage,
    VisualizadorDeGrFicosPage,
    VisualizarTabelaResumoPage,
    ConfiguraEsDoAplicativoPage,

  ],
  providers: [
    StatusBar,
    SplashScreen,
    {provide: ErrorHandler, useClass: IonicErrorHandler}
  ]
})
export class AppModule {}
