import { NgModule } from '@angular/core';
import { IonicModule } from 'ionic-angular';
import { Cadastro } from './cadastro';

@NgModule({
  declarations: [
    Cadastro,
  ],
  imports: [
    IonicModule.forRoot(Cadastro),
  ],
  exports: [
    Cadastro
  ]
})
export class CadastroModule {}
