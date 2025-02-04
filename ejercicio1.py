a = 5
b = 10

def suma_y_media(a, b):
    suma = a + b
    media = suma / 2
    return suma, media

def determinar_estado(media):
    return "Aprobado" if media > 5 else "Suspenso"

# Llamamos a la función y guardamos los valores devueltos en variables
suma, media = suma_y_media(a, b)

# Llamamos a la función que determina si es aprobado o suspenso
estado = determinar_estado(media)

print(f'La suma será: {suma}')  
print(f'La media será: {media}') 
print(f'Estado: {estado}')

