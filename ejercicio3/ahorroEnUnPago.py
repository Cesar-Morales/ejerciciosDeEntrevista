def ingreso_de_datos():
    precio_total_cuotas = cuotas * precio_cuota
    diferencia = precio_total_cuotas - precio_de_contado
    print("Si la compra en un unico pago ahorra ${} ".format(diferencia))


try:
    cuotas = int(input("Ingrese cantidad de cuotas: "))
    precio_cuota = int(input("Ingrese el precio por cuota: "))
    precio_de_contado = int(input("Ingrese el precio de contado: "))
    ingreso_de_datos()
except:
    print("Solo se aceptan numeros enteros")
