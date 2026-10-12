/**
 * Nasca Hidroeléctrica — JS mínimo.
 * Pestañas de comunidades: cualquier lista con la clase "is-style-tabs"
 * dentro de un grupo con la clase "nasca-tabs-wrap" controla paneles .nasca-community-panel.
 * Si no hay JS o paneles, las pestañas funcionan como enlaces normales.
 */
(function () {
  function init(root) {
    root.querySelectorAll('.nasca-tabs-wrap').forEach(function (wrap) {
      var tabs = wrap.querySelectorAll('.is-style-tabs li');
      var panels = wrap.querySelectorAll('.nasca-community-panel');
      if (!tabs.length || !panels.length) return;
      tabs.forEach(function (tab, i) {
        if (!panels[i]) return;
        tab.setAttribute('role', 'tab');
        tab.setAttribute('tabindex', '0');
        var activate = function (e) {
          if (e) e.preventDefault();
          tabs.forEach(function (t) { t.classList.remove('is-active'); t.setAttribute('aria-selected', 'false'); });
          panels.forEach(function (p) { p.hidden = true; });
          tab.classList.add('is-active');
          tab.setAttribute('aria-selected', 'true');
          panels[i].hidden = false;
        };
        tab.addEventListener('click', activate);
        tab.addEventListener('keydown', function (e) { if (e.key === 'Enter' || e.key === ' ') activate(e); });
      });
      var first = wrap.querySelector('.is-style-tabs li.is-active') || tabs[0];
      panels.forEach(function (p, i) { p.hidden = tabs[i] !== first; });
    });
  }
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', function () { init(document); });
  else init(document);
})();
