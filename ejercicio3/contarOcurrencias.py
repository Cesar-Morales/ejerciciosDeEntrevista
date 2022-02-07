def descomposicion(numero_actual, numero_buscado):
    if (numero_actual == numero_buscado):
        return 1
    if(numero_actual <= 9):
        return 0
    else:
        return descomposicion(numero_actual % 10, numero_buscado) + descomposicion(int(numero_actual/10), numero_buscado)


def buscar_numero(min, max, n):
    cant = 0
    for i in range(min, max + 1):
        cant = cant + descomposicion(i, n)
    print("En el rango de {} a {} el numero {} aparece unas {} veces".format(
        min, max, n, cant))


try:
    minnum = int(input("Ingrese el numero minimo de donde empezar a contar: "))
    maxnum = int(input("Ingrese el numero maximo de donde empezar a contar: "))
    num = int(input("Ingrese el numero que quiere buscar: "))
    buscar_numero(minnum, maxnum, num)
except:
    print("Solo se aceptan numeros enteros")
