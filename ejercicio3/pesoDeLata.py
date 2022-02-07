def calcular_lata_vacia(ll, lml):
    carga_media = ll - lml
    peso_lata_vacia = ll - (carga_media*2)
    print("La lata vacia pesa {}.".format(peso_lata_vacia))


try:
    lata_llena = int(input("Ingrese el peso de la lata llena: "))
    lata_media_llena = int(input("Ingrese el peso de la lata por la mitad: "))
    calcular_lata_vacia(lata_llena, lata_media_llena)
except:
    print("Solo se aceptan numeros enteros")
