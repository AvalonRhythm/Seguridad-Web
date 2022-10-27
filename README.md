# Proyecto SGSSI - Despliegue Web
## _Entrega 1 - Introducción_

En este repositorio se encuentran todos los archivos necesarios para la visualización de una aplicación web desarrollada mediante los lenguajes de programación vistos en clase (HTML, CSS, JavaScript y PHP).

## Grupo
- Andrea Vasílica
- Hugo
- Gorka Lombardero

## Desplegar el proyecto mediante [_docker_](https://www.docker.com/)
### Instalar _docker_
Para instalar _docker_ en Ubuntu, ejecutamos en la terminal:
```sh
sudo apt install docker.io
```
Después necesitaremos también instalar _docker-compose_:
```sh
sudo apt install docker-compose
```

### Configuración de la web
Estando situados en el mismo directorio que nuestro _Dockerfile_, abrimos una ventada de comando y ejecutamos:
```sh
sudo docker build -t="web" .
```

Ya estamos casi listos para visualizar la web. El próximo paso es ejecutar el siguiente comando:
```sh
sudo docker-compose
```