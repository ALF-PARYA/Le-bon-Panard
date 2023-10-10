import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AccueilComponent } from './app/accueil/accueil.component';
import { ProduitsComponent } from './app/produits/produits.component';
import { ConnexionComponent } from './app/connexion/connexion.component';
import { InscriptionComponent } from './app/inscription/inscription.component';
import { NotrePhilosophieComponent } from './app/notre-philosophie/notre-philosophie.component';
import { NousContacterComponent } from './app/nous-contacter/nous-contacter.component';
import { PanierComponent } from './app/panier/panier.component';

const routes: Routes = [
  { path: '', component: AccueilComponent },
  { path: 'produit', component: ProduitsComponent },
  { path: 'connexion', component: ConnexionComponent },
  { path: 'inscription', component: InscriptionComponent },
  { path: 'notre-philosophie', component: NotrePhilosophieComponent },
  { path: 'nous-contacter', component: NousContacterComponent },
  { path: 'panier', component: PanierComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
