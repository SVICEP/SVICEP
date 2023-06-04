from django.contrib import admin
from SVICEPApp.models import ProductoAfectado, PerdidaEconomica

# Register your models here.

# Cambiando visualizacion de los modelos en el panel de administracion de django
class ProductoAfectadoAdmin(admin.ModelAdmin):
    list_display=("nombreProducto", "cantidadQuintales", "anio")

class PerdidaEconomicaAdmin(admin.ModelAdmin):
    list_display=("cantDineroPerdido", "anio")

# Registrando los modelos creados en el panel de administracion de django
admin.site.register(ProductoAfectado, ProductoAfectadoAdmin)
admin.site.register(PerdidaEconomica, PerdidaEconomicaAdmin)
