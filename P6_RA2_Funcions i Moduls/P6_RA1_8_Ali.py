# -------------------------------------------------------------
# Nom de l'alumne: Ali
# Data: 05/05/2025
# Mòdul: Projecte 6 - RA2 - Funcions i Mòduls
# -------------------------------------------------------------


def factorial(n):
    if n == 0:
        return 1
    return n * factorial(n - 1)
