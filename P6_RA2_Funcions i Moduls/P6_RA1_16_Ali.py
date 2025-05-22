# -------------------------------------------------------------
# Nom de l'alumne: Ali
# Data: 05/05/2025
# Mòdul: Projecte 6 - RA2 - CRIDES A LES FUNCIONS QUE ACABEM DE CREAR PER SABER SI FUNCIONEN O NO
# -------------------------------------------------------------


def multiplica_tot(*nombres):
    resultat = 1
    for n in nombres:
        resultat *= n
    return resultat

print(multiplica_tot(2, 3, 4))
print(multiplica_tot(5, 10))
