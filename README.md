<div align="center">

# 🚀 Intermediación Laboral para Jóvenes en Costa Rica

### Plataforma web para conectar jóvenes con oportunidades de empleo de forma sencilla, clara y accesible.

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![Status](https://img.shields.io/badge/Estado-En%20desarrollo-orange?style=for-the-badge)
![License](https://img.shields.io/badge/Licencia-Uso%20académico-blue?style=for-the-badge)

</div>

---

## 📌 Descripción

**Intermediación Laboral para Jóvenes en Costa Rica** es una aplicación web orientada a facilitar la conexión entre personas jóvenes que buscan su primer empleo y empresas que desean publicar vacantes accesibles para perfiles junior.

El proyecto busca ofrecer una experiencia simple, intuitiva y visualmente atractiva, permitiendo que jóvenes puedan crear su perfil, visualizar oportunidades laborales y postularse, mientras que las empresas pueden gestionar vacantes y revisar candidatos.

---

## ✨ Objetivo del proyecto

Desarrollar una plataforma web que apoye la **intermediación laboral juvenil en Costa Rica**, reduciendo barreras de acceso al empleo formal mediante una herramienta digital moderna y fácil de usar.

---

## 🧩 Funcionalidades actuales

### 👤 Módulo de jóvenes
* **Inicio de sesión** para perfil joven.
* **Dashboard** con visualización de vacantes recientes.
* **Búsqueda visual** de empleos.
* **Perfil personal** con biografía, nivel académico, habilidades y currículum en PDF.
* **Edición de perfil.**

### 🏢 Módulo de empresas
* **Inicio de sesión** para perfil empresa.
* **Dashboard empresarial.**
* **Gestión de vacantes:** Visualización y creación de nuevas oportunidades.
* **Perfil de empresa.**
* **Vista de candidatos:** Revisión de perfiles postulados.

### 🛡️ Módulo administrador
* Acceso a panel administrativo para gestión global.

### 🔐 Autenticación
* Manejo de sesión basado en roles: `joven`, `empresa` y `administrador`.

---

## 🖼️ Interfaz

La aplicación utiliza una interfaz moderna basada en **Bootstrap 5**, destacando por:
* Diseño limpio y **100% responsivo**.
* Navegación dinámica por roles.
* Uso de tarjetas visuales y formularios amigables.
* Estética orientada a una experiencia juvenil y profesional.

---

## 🛠️ Tecnologías utilizadas

* **Lenguaje:** PHP 8.x
* **Frontend:** HTML5, CSS3, JavaScript
* **Framework CSS:** Bootstrap 5 & Bootstrap Icons
* **Lógica:** Sesiones nativas de PHP

---

## 📂 Estructura del proyecto

```bash
IntermediacionLaboral/
│
├── assets/           # Archivos estáticos (CSS, JS, Imágenes)
│   ├── css/
│   ├── js/
│   └── uploads/      # Carga de documentos y fotos
│
├── controllers/      # Lógica de negocio (Auth, validaciones)
│   └── auth.php
│
├── views/            # Vistas segmentadas por rol
│   ├── admin/
│   ├── auth/
│   ├── empresa/
│   ├── joven/
│   ├── public/
│   └── templates/    # Componentes reutilizables (Header, Footer)
│
├── config/           # Configuraciones de sistema
├── imgs/             # Recursos gráficos
└── index.php         # Punto de entrada principal

⚠️ Estado actual del proyectoEste proyecto es un prototipo funcional de carácter académico.
Completado: Interfaz principal, manejo de roles por sesión y navegación funcional.Pendiente: Integración con Base de Datos (MySQL), persistencia real de datos, validaciones robustas y carga real de archivos.
👨‍💻 Autor
Steven Fallas Madrigal Estudiante de Ingeniería en Software - Universidad Fidélitas
📄 Licencia
Este proyecto se comparte exclusivamente con fines académicos y educativos.
<div align="center">💼 Conectando talento joven con oportunidades reales</div>
