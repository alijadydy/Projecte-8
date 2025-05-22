# -------------------------------------------------------------
# Nom de l'alumne: Ali
# Data: 05/05/2025
# Mòdul: Projecte 6 - RA2 - EXERCICIS PER CREAR I USAR MÒDULS
# -------------------------------------------------------------


import random

def llença_dau():
    return random.randint(1, 6)

def llença_n_daus(n):
    total = 0
    for _ in range(n):
        total += llença_dau()
    return total / n

print(llença_dau())
print(llença_n_daus(10))