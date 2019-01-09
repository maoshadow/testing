import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { ObjetoComponent } from './objetocomponent/objeto.component';
import { ObjetoAutoComponent } from './objeto-auto/objeto-auto.component'

@NgModule({
  declarations: [
    AppComponent,
    ObjetoComponent,
    ObjetoAutoComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
