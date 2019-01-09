import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ObjetoAutoComponent } from './objeto-auto.component';

describe('ObjetoAutoComponent', () => {
  let component: ObjetoAutoComponent;
  let fixture: ComponentFixture<ObjetoAutoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ObjetoAutoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ObjetoAutoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
