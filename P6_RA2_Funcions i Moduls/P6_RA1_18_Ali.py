# -------------------------------------------------------------
# Nom de l'alumne: Ali
# Data: 05/05/2025
# Mòdul: Projecte 6 - RA2 - CRIDES A LES FUNCIONS QUE ACABEM DE CREAR PER SABER SI FUNCIONEN O NO
# -------------------------------------------------------------


def factorial(n):
    if n == 0:
        return 1
    return n * factorial(n - 1)

print(factorial(0))
print(factorial(3))
print(factorial(5))
