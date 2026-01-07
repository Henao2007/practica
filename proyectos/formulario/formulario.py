print("Ingrese los campos requeridos")

nombre = input("Ingrese el nombre: ")
correo = input("Ingrese el correo: ")
mensaje = input("Ingrese el mensaje: ")


if nombre and correo and mensaje :
    print("Datos enviados correctamente")
else:
    print("Error, Debes de llenar todos los campos")

    