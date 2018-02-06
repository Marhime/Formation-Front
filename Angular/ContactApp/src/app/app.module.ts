import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';


import { AppComponent } from './app.component';
import {FormsModule} from '@angular/forms';
import { ProfilComponent } from './profil/profil.component';
import { FormComponent } from './form/form.component';
import {HttpClientModule} from '@angular/common/http';
import {UserApiService} from './shared/services/user-api.service';
import {AsyncLocalStorageModule} from 'angular-async-local-storage';
import {UserStorageService} from './shared/services/user-storage.service';


@NgModule({
  declarations: [
    AppComponent,
    ProfilComponent,
    FormComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpClientModule,
    AsyncLocalStorageModule
  ],
  providers: [UserApiService,
              UserStorageService],
  bootstrap: [AppComponent]
})
export class AppModule { }
