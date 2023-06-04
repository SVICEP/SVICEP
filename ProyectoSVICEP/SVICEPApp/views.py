from django.shortcuts import render
from SVICEPApp.models import ProductoAfectado, PerdidaEconomica
import json
from django.db.models import Q

# Create your views here.


def home(request):
    return render(request, "SVICEPApp/home.html")

def graficas(request):

    # Obtén los registros de los modelos desde la base de datos
    perdida_economica = PerdidaEconomica.objects.all()

    # Extrae los datos de los campos de los modelos
    datos_producto_afectado1 = ProductoAfectado.objects.filter(Q(nombreProducto="maiz") | Q(nombreProducto="Maiz")).values('nombreProducto', 'cantidadQuintales', 'anio')
    datos_producto_afectado1 = list(datos_producto_afectado1)
    datos_producto_afectado2 = ProductoAfectado.objects.filter(Q(nombreProducto="frijol") | Q(nombreProducto="Frijol")).values('nombreProducto', 'cantidadQuintales', 'anio')
    datos_producto_afectado2 = list(datos_producto_afectado2)
    datos_perdida_economica = list(perdida_economica.values('anio', 'cantDineroPerdido'))

    # Convierte los datos a formato JSON para pasarlos a JavaScript
    datos_producto_afectado1_json = json.dumps(datos_producto_afectado1)
    datos_producto_afectado2_json = json.dumps(datos_producto_afectado2)
    datos_perdida_economica_json = json.dumps(datos_perdida_economica)

    # Renderiza la plantilla HTML con los datos pasados a JavaScript
    return render(request, "SVICEPApp/graficas.html", {
        'datos_producto_afectado1': datos_producto_afectado1_json,
        'datos_producto_afectado2': datos_producto_afectado2_json,
        'datos_perdida_economica': datos_perdida_economica_json
    })