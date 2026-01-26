usuario = "Stiven"
contraseña = "Stiven123"

print("Login Quemado")

usuarioR = input("Ingrese el usuario: ")
contraseñaR = input("Ingrese la contraseña: ")

if(usuarioR == usuario and contraseñaR == contraseña):
    print("Correcto, Dirigido a otra pagina")
else:
    print("Error")