# Proyecto: Uniendo Contenedores (Arquitectura Multi-Servicio)

Este repositorio contiene una infraestructura completa desplegada con Docker Compose. El objetivo es demostrar la comunicación entre diferentes contenedores en redes aisladas y la persistencia de datos.

## Arquitectura del Sistema

El proyecto se divide en dos bloques principales conectados por una red externa llamada "red_ingenieria":

### 1. Panel de Control y Base de Datos (plantilla_web)

-   MySQL 8.0: Motor de base de datos con persistencia en el host (carpeta db_data).
    
-   PHPMyAdmin: Interfaz grafica para gestionar la base de datos (Puerto 8081).
    
-   Apache + PHP: Servidor web principal para la logica de negocio (Puerto 8080).
    

### 2. Frontend Independiente (proyecto_gui_web)

-   Apache + PHP: Un servidor web separado que se conecta a la misma red para demostrar la escalabilidad (Puerto 8082).
    

## Como ponerlo en marcha

1.  Clonar el repositorio.
    
2.  Crear la red externa de Docker: docker network create red_ingenieria
    
3.  Levantar los servicios: docker compose -f plantilla_web/docker-compose.yml up -d docker compose -f proyecto_gui_web/docker-compose.yml up -d
    

## Tecnologias utilizadas

-   Docker y Docker Compose
    
-   PHP 8.2
    
-   MySQL 8.0
    
-   Redes Bridge personalizadas
