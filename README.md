# Nasca Hidroeléctrica · Tema WordPress

Tema de bloques (Full Site Editing) para el sitio de Central Hidroeléctrica Nasca.
**Todo es editable desde WordPress sin tocar código**: colores, tipografías, cabecera,
pie, menú y cada sección del home son bloques y patrones del Editor del Sitio.

- `nasca-hidroelectrica/` → el tema (esto es lo que se instala en WordPress).
- `docs/` → preview estático del home para GitHub Pages (no es el sitio real, solo una vista).

## Instalación

1. Comprime la carpeta `nasca-hidroelectrica/` en un `.zip` (o descárgalo desde GitHub).
2. En WordPress: **Apariencia → Temas → Añadir nuevo → Subir tema** y activa *Nasca Hidroeléctrica*.
3. Requiere WordPress 6.5 o superior y PHP 7.4 o superior. No necesita plugins.
4. **Ajustes → Lectura**: deja "Tu página de inicio muestra: Tus últimas entradas". La plantilla
   `front-page.html` del tema se usa automáticamente como home. Si prefieres una página estática,
   crea una página, asígnale la plantilla *Landing a ancho completo* e inserta los patrones de la
   categoría **Nasca · Home**.
5. **Apariencia → Editor → Estilos → Logo**: sube el logo (`Logo NASCA 1.png` del Drive). Cuando hay
   logo, el texto de respaldo "NASCA / HIDROELÉCTRICA" se oculta solo.

## Cómo se edita

| Qué | Dónde |
|---|---|
| Textos, cifras, fechas, botones del home | Apariencia → Editor → Plantillas → *Portada* (o la página con los patrones). Clic sobre cualquier texto y escribir. |
| Imágenes de fondo (hero, cifras, cita, neblina) | Seleccionar el bloque *Fondo* (cover) → barra de herramientas → *Reemplazar*. Subir las fotos originales del Drive (`Imagen fondo 1–4.png`). |
| Menú principal y enlaces | Apariencia → Editor → Navegación. Enlaces por defecto: /proyecto/, /sostenibilidad-real/, /transparencia/, /noticias/, /contacto/. |
| Cabecera y pie | Apariencia → Editor → Patrones → Partes de plantilla → *Cabecera* / *Pie de página*. |
| Colores y tipografías | Apariencia → Editor → Estilos. La paleta (crema, morado, lima, vino, carbón) está definida en `theme.json`. |
| Comunidades (tarjeta con pestañas) | Cada pestaña es un elemento de la lista *Pestañas (comunidades)*; cada panel es un grupo *nasca-community-panel* en el mismo orden. Duplicar un panel y una pestaña para añadir comunidades. |
| Línea de tiempo | Bloque *Columnas* con estilo *Línea de tiempo*. Añadir/quitar columnas. La clase `is-current` marca el hito actual y `is-future` el futuro (Avanzado → Clases CSS adicionales). |
| Mapa ilustrativo | Es un SVG (`assets/images/mapa-intag.svg`). Se puede reemplazar por cualquier imagen desde el bloque *Imagen*. |

### Patrones incluidos (insertador → categoría *Nasca*)

- **Hero — Energía en armonía**
- **01 · Hidroeléctrica Nasca** (cifras + línea de tiempo + botón)
- **02 · Sostenibilidad Real** (mapa + tarjeta de comunidad + ejes)
- **03 · Cita Somos Nasca** y **03b · Conoce Nasca**
- **04 · Canal Comunitario** (dos tarjetas)
- **CTA · Estándares internacionales** (banda vino)

### Estilos de bloque (barra lateral → Estilos)

Botón *Con flecha ↗*, *Borde + flecha ↗*, *Enlace con flecha →* · Párrafo *Etiqueta de sección*,
*Etiqueta de cifra*, *Chip*, *Chip relleno* · Grupo *Tarjeta*, *Icono en círculo* · Lista *Con ✓*,
*Enlaces de pie*, *Pestañas* · Título *Cifra grande* · Columnas *Línea de tiempo* · Fondo *Hero*.

## Páginas internas (Proyecto y Somos · Transparencia)

Al activar el tema se crean solas las páginas **Proyecto y Somos** (`/proyecto/`) y **Transparencia y
Diálogo** (`/transparencia/`), ya con la plantilla *Landing a ancho completo* y los enlaces permanentes
activados. Se editan desde Páginas → Editar como cualquier otra. Si alguna vez se borran, basta con crear
una página nueva y elegir el patrón **Página · Proyecto y Somos (completa)** o **Página · Transparencia y
Diálogo (completa)** (categoría *Nasca · Home*), asignarle la plantilla *Landing a ancho completo* y
publicarla con el slug `proyecto` o `transparencia`. Cada sección también está disponible como patrón suelto
en *Nasca · Secciones*.

**Formularios.** Los tres formularios (Hojas de Vida, Bienes y Servicios, PQR) son bloques HTML con el diseño
listo. No envían datos por sí solos: para recibir envíos instala un plugin de formularios (Contact Form 7,
WPForms, Fluent Forms…) y sustituye el bloque HTML por el shortcode del formulario; los estilos de
`.nasca-form` se aplican igual si envuelves el shortcode en un grupo con la clase `nasca-form`.

**Preguntas frecuentes.** Usan el bloque nativo *Detalles*; duplica uno para añadir preguntas.

## Comunidades (fichas)

El tema registra el tipo de contenido **Comunidades** (menú lateral de WordPress). Al activar el tema se
crean las 16 comunidades del diseño. Cada ficha se edita en Comunidades → Editar: título, imagen destacada
(foto del hero), texto "Sobre la comunidad", foto, los tres aportes y, en el panel lateral, los **Datos
clave** (ubicación, población, educación, salud, fuente del censo). La navegación anterior/siguiente y el
enlace de vuelta a Sostenibilidad Real se generan solos. Las tarjetas de "Conoce las 14 Comunidades"
enlazan a `/comunidades/nombre/`.

## Noticias y Contacto

**Noticias** (`/noticias/`) lista las entradas del blog con filtros por categoría y paginación; se gestiona
desde Entradas → Añadir nueva (usa imagen destacada, categoría y extracto). Las tres últimas aparecen
también en Sostenibilidad Real. **Contacto** (`/contacto/`) se crea al activar el tema con canales, sedes,
formulario y mapa de Google (cambia la dirección en el bloque HTML del mapa).

## Plantillas

`front-page` (home), `page`, `page-no-title`, `page-landing` (ancho completo, sin título),
`single` (noticia), `index`/`archive` (listado de noticias en 3 columnas), `404`.

## Imágenes provisionales

Las fotos de fondo incluidas en `assets/images/` son recortes de baja resolución tomados del
diseño, solo para que el tema se vea completo al activarlo. Reemplázalas desde el editor con las
fotografías originales de la carpeta *HOME PAGE* del Drive.

## Preview en GitHub Pages

El home renderizado está exportado en `docs/`. Para publicarlo:
**Settings → Pages → Build and deployment → Source: Deploy from a branch → Branch:
`claude/epic-galileo-scawc6`, carpeta `/docs` → Save**. Quedará en `https://crpozo.github.io/nasca/` (home), `/proyecto.html` y `/transparencia.html`.
Es solo una vista estática: los enlaces del menú no llevan a ninguna parte y nada es editable ahí.
