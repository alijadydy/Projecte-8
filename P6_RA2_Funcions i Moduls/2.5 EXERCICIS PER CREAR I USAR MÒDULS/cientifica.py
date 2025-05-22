# -------------------------------------------------------------
# Nom de l'alumne: Ali
# Data: 05/05/2025
# Mòdul: Projecte 6 - RA2 - EXERCICIS AMB MÒDULS EXTERNS O ORGANITZACIÓ DE PROJECTES
# -------------------------------------------------------------

import calculadora
import math

def menu():
    print("1. Suma")
    print("2. Resta")
    print("3. Multiplicació")
    print("4. Divisió")
    print("5. Arrel quadrada")
    print("6. Potència")

    opcio = int(input("Escull una opció: "))
    if opcio in [1, 2, 3, 4]:
        a = float(input("Introdueix el primer nombre: "))
        b = float(input("Introdueix el segon nombre: "))
        if opcio == 1:
            print(calculadora.suma(a, b))
        elif opcio == 2:
            print(calculadora.resta(a, b))
        elif opcio == 3:
            print(calculadora.multiplica(a, b))
        elif opcio == 4:
            print(calculadora.divideix(a, b))
    elif opcio == 5:
        a = float(input("Introdueix un nombre: "))
        print(math.sqrt(a))
    elif opcio == 6:
        a = float(input("Base: "))
        b = float(input("Exponent: "))
        print(math.pow(a, b))

menu()