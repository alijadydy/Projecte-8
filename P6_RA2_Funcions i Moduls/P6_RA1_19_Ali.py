# -------------------------------------------------------------
# Nom de l'alumne: Ali
# Data: 05/05/2025
# Mòdul: Projecte 6 - RA2 - CRIDES A LES FUNCIONS QUE ACABEM DE CREAR PER SABER SI FUNCIONEN O NO
# -------------------------------------------------------------


def estat_persona(edat):
    if edat < 18:
        return "Menor d'edat"
    elif edat < 65:
        return "Adult"
    else:
        return "Jubilat"

for edat in [12, 25, 70]:
    print(f"Edat {edat}: {estat_persona(edat)}")
