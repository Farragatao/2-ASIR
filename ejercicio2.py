#dado  un numero, saber si es perfecto, es decir calcular la suma de sus divisores, tiene que ser igual a la susma de sus divisores
num = 6

def calculo(num):
    suma_total = sum(i for i in range(1, num) if num % i == 0)
    return suma_total == num

if calculo(num):
    print(f"{num} es perfecto")
else:
    print(f"{num} no es perfecto")


