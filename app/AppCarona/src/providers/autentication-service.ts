import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';

/*
  Generated class for the AutenticationService provider.

  See https://angular.io/docs/ts/latest/guide/dependency-injection.html
  for more info on providers and Angular 2 DI.
*/

@Injectable()
export class AutenticationService {

  public data: any;
  public api_url: string;
 
  constructor(public http: Http) {
   this.api_url = 'http://localhost:8282/dedao/app_carona/webservice/';
  }
 
 
  // Insere usuário
  add(nome, email, senha) {

    return new Promise(resolve => {
      this.http.post(this.api_url + 'usuarios/add', {'Usuario': {'nome': nome, 'email': email, 'senha': senha}})
        .map(res => res.json())
        .subscribe(data => {
          this.data = data.results;
          resolve(this.data);
        });
    });
  }

}
