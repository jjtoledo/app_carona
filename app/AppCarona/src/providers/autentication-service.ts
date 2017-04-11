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
    this.api_url = 'http://localhost/app_carona/webservice/';
  }
 
 
  // Insere usuário
  add(usuario) {
    return new Promise(resolve =&gt; {
      this.http.post(this.api_url + 'usuarios/add', {'user': {'usuario': usuario}})
        .map(res =&gt; res.json())
        .subscribe(data =&gt; {
          this.data = data.results;
          resolve(this.data);
        });
    });
  }

}
