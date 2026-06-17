(function () {
  if (window.__buscaJogosInicializada) {
    return;
  }

  window.__buscaJogosInicializada = true;

  function normalizarTexto(texto) {
    return texto
      .toLowerCase()
      .normalize("NFD")
      .replace(/[\u0300-\u036f]/g, "")
      .trim();
  }

  function iniciarBusca() {
    var campoBusca = document.querySelector(".input");
    var cards = document.querySelectorAll(".capa");

    if (!campoBusca || cards.length === 0) {
      return;
    }

    campoBusca.addEventListener("input", function () {
      var termo = normalizarTexto(campoBusca.value);

      cards.forEach(function (card) {
        var nome = card.querySelector(".legenda");
        var plataforma = card.querySelector(".Plataforma");
        var textoCard = normalizarTexto(
          ((nome && nome.textContent) || "") + " " + ((plataforma && plataforma.textContent) || "")
        );

        card.style.display = textoCard.includes(termo) ? "" : "none";
      });
    });
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", iniciarBusca);
  } else {
    iniciarBusca();
  }
})();
