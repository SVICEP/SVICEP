from django.urls import path
from SVICEPApp import views

urlpatterns = [
    path('', views.home, name="Home"),
    path('Graficas/', views.graficas, name="Graficas"),
]