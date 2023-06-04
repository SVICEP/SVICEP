from django.db import models

# Create your models here.

class ProductoAfectado(models.Model):
    nombreProducto=models.CharField(max_length=50, verbose_name="Nombre del producto")
    cantidadQuintales=models.FloatField(verbose_name="Cantidad en quintales")
    anio=models.IntegerField(verbose_name="año")
    
class PerdidaEconomica(models.Model):
    cantDineroPerdido=models.FloatField(verbose_name="cantidad de dinero perdido")
    anio=models.IntegerField(verbose_name="año")