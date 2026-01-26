print("Ingrese dos numeros y seleccione que tipo de operacion desea realizar")

num1 = int(input("Numero 1: "))
num2 = int(input("Numero 2: "))

print("Digite que operacion deseas con numeros:")
print("Suma = 1, Resta = 2, Multiplicacion = 3, Division = 4")

operacion = int(input("¿Tipo operacion?: "))
resultado = 0
if operacion == 1:
   resultado = num1 + num2
   print(f"{num1} + {num2} = {resultado}")
elif operacion == 2:
   resultado = num1 - num2
   print(f"{num1} - {num2} = {resultado}")
elif operacion == 3:
   resultado = num1 * num2  
   print(f"{num1} * {num2} = {resultado}")
elif operacion == 4:
   resultado = num1 / num2
   print(f"{num1} / {num2} = {resultado}")
   

