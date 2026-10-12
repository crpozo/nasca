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
| Menú principal y enlaces | Apariencia → Editor → Navegación. |
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
`claude/epic-galileo-scawc6`, carpeta `/docs` → Save**. Quedará en `https://crpozo.github.io/nasca/`.
Es solo una vista estática: los enlaces del menú no llevan a ninguna parte y nada es editable ahí.
