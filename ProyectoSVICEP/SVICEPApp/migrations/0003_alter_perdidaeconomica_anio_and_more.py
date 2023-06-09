# Generated by Django 4.2.1 on 2023-06-02 18:01

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('SVICEPApp', '0002_perdidaeconomica'),
    ]

    operations = [
        migrations.AlterField(
            model_name='perdidaeconomica',
            name='anio',
            field=models.IntegerField(verbose_name='año'),
        ),
        migrations.AlterField(
            model_name='perdidaeconomica',
            name='cantDineroPerdido',
            field=models.FloatField(verbose_name='cantidad de dinero perdido'),
        ),
        migrations.AlterField(
            model_name='productoafectado',
            name='anio',
            field=models.IntegerField(verbose_name='año'),
        ),
        migrations.AlterField(
            model_name='productoafectado',
            name='cantidadQuintales',
            field=models.FloatField(verbose_name='Cantidad en quintales'),
        ),
        migrations.AlterField(
            model_name='productoafectado',
            name='nombreProducto',
            field=models.CharField(max_length=50, verbose_name='Nombre del producto'),
        ),
    ]
