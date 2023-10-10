import { ComponentFixture, TestBed } from '@angular/core/testing';

import { NotrePhilosophieComponent } from './notre-philosophie.component';

describe('NotrePhilosophieComponent', () => {
  let component: NotrePhilosophieComponent;
  let fixture: ComponentFixture<NotrePhilosophieComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [NotrePhilosophieComponent]
    });
    fixture = TestBed.createComponent(NotrePhilosophieComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
