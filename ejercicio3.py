#Visualizar los 4 primeros numeros perfectos en Python

def Ser_perfecto(n):
    return sum(i for i in range(1, n) if n % i == 0) == n

def primeros_perfectos(cantidad):
    num = 2
    contador = 0
    while contador < cantidad:
        if Ser_perfecto(num):
            print(num)
            contador += 1
        num += 1

primeros_perfectos(4)
