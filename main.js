// main.js
(function() {
  const image = document.getElementById("image");
  const description = document.getElementById("description");
  const back = document.getElementById("back");
  const next = document.getElementById("next");
  let i = 0;

  const elements = [
    { url: "/img/html.svg", text: "Язык разметки гипертекста HTML" },
    { url: "/img/css.svg", text: "Каскадные таблицы стилей CSS" },
    {
      url: "/img/javascript.svg",
      text: "Клиентский скриптовый язык JavaScript"
    },
    { url: "/img/php.svg", text: "Серверный скриптовый язык PHP" }
  ];

  setElement(i);

  back.addEventListener("click", () => {
    setElement(--i);
  });

  next.addEventListener("click", () => {
    setElement(++i);
  });

  function setElement(i) {
    const url = 'url("' + elements[i].url + '")';
    image.style.backgroundImage = url;
    description.textContent = elements[i].text;
    if (i === 0) {
      back.setAttribute("disabled", true);
    } else {
      back.removeAttribute("disabled");
    }
    if (i === elements.length - 1) {
      next.setAttribute("disabled", true);
    } else {
      next.removeAttribute("disabled");
    }
  }
})();
