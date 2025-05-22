# -------------------------------------------------------------
# Nom de l'alumne: Ali
# Data: 05/05/2025
# Mòdul: Projecte 6 - RA2 - Funcions i Mòduls
# -------------------------------------------------------------


def estat_persona(edat):
    if edat < 18:
        return "Menor d'edat", "Encara no és adult."
    elif edat < 65:
        return "Adult", "En edat laboral."
    else:
        return "Jubilat", "Ha arribat a l'edat de jubilació."
