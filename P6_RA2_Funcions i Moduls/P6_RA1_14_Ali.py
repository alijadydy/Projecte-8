# -------------------------------------------------------------
# Nom de l'alumne: Ali
# Data: 05/05/2025
# Mòdul: Projecte 6 - RA2 - CRIDES A LES FUNCIONS QUE ACABEM DE CREAR PER SABER SI FUNCIONEN O NO
# -------------------------------------------------------------


def es_parell(numero):
    return numero % 2 == 0

for x in [1, 2, 3, 4, 5, 6]:
    print(f"El número {x} és parell: {es_parell(x)}")
