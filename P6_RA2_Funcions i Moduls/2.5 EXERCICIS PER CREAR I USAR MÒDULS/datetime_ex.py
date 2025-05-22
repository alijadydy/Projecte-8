# -------------------------------------------------------------
# Nom de l'alumne: Ali
# Data: 05/05/2025
# Mòdul: Projecte 6 - RA2 - EXERCICIS AMB MÒDULS EXTERNS O ORGANITZACIÓ DE PROJECTES
# -------------------------------------------------------------

from datetime import datetime

ara = datetime.now()
print("Data i hora actual:", ara.strftime("%d/%m/%Y %H:%M"))

nadal = datetime(2025, 12, 25)
dies_falten = (nadal - ara).days
print(f"Falten {dies_falten} dies per Nadal")