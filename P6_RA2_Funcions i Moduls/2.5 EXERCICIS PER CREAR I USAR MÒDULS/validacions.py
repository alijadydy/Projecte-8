# -------------------------------------------------------------
# Nom de l'alumne: Ali
# Data: 05/05/2025
# Mòdul: Projecte 6 - RA2 - EXERCICIS AMB MÒDULS EXTERNS O ORGANITZACIÓ DE PROJECTES
# -------------------------------------------------------------

def es_email_valid(email):
    return "@" in email and "." in email

def es_telefon_valid(telefon):
    return telefon.isdigit() and len(telefon) in [9, 10]