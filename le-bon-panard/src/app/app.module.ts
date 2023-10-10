import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';
import { AppRoutingModule } from '../app-routing.module';
import { AppComponent } from './app.component';
import { ProduitsComponent } from './produits/produits.component';
import { ConnexionComponent } from './connexion/connexion.component';
import { InscriptionComponent } from './inscription/inscription.component';
import { NotrePhilosophieComponent } from './notre-philosophie/notre-philosophie.component';
import { NousContacterComponent } from './nous-contacter/nous-contacter.component';
import { PanierComponent } from './panier/panier.component';
import { AccueilComponent } from './accueil/accueil.component';
import { NavigationComponent } from './navigation/navigation.component';
import { FooterComponent } from './footer/footer.component';

@NgModule({
  declarations: [
    AppComponent,
    ProduitsComponent,
    ConnexionComponent,
    InscriptionComponent,
    NotrePhilosophieComponent,
    NousContacterComponent,
    PanierComponent,
    AccueilComponent,
    NavigationComponent,
    FooterComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
