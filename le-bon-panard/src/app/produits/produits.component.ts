import { Component, OnInit } from '@angular/core';
import {HttpClient} from '@angular/common/http';
import { IProduits } from '../i-produits';
import { ISize } from '../i-produits';
import { IMatter } from '../i-matter';
import { IImage } from '../i-image';

@Component({
  selector: 'app-produits',
  templateUrl: './produits.component.html',
  styleUrls: ['./produits.component.css']
})
export class ProduitsComponent implements OnInit {

 produits: IProduits[] = [];

 urlproduits = 'http://127.0.0.1:8000/api/socks';

 constructor(public http: HttpClient) {}

 ngOnInit(): void {
   this.http.get<any>(this.urlproduits).subscribe((response) => {
     this.produits = response['hydra:member'];
     console.log(this.produits);
   });
 }
  
}
