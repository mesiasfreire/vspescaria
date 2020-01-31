// Identificar o clique no menu
// Verificar o item que foi clicado e fazer referência com o alvo
// Verificar a distância entre o alvo e o topo
// Animar o scroll até o alvo

var menuItems = document.querySelectorAll('.top-menu a[href^="#"]');

function getScrollTopByHref(element) {
    var id = element.getAttribute("href");
    return document.querySelector(id).offsetTop;
}

function scrollToPosition(to) {
    // Caso queira o nativo apenas
    window.scroll({
        top: to - 80,
        behavior: "smooth"
    });
    // smoothScrollTo(0, to);
}

function scrollToIdOnClick(event) {
    event.preventDefault();
    var to = getScrollTopByHref(event.currentTarget);
    scrollToPosition(to);
}

menuItems.forEach(item => {
    item.addEventListener("click", scrollToIdOnClick);
});

// Caso deseje suporte a browsers antigos / que não suportam scroll smooth nativo
/**
 * Smooth scroll animation
 * @param {int} endX: destination x coordinate
 * @param {int) endY: destination y coordinate
 * @param {int} duration: animation duration in ms
 */
function smoothScrollTo(endX, endY, duration) {
    var startX = window.scrollX || window.pageXOffset;
    var startY = window.scrollY || window.pageYOffset;
    var distanceX = endX - startX;
    var distanceY = endY - startY;
    var startTime = new Date().getTime();

    duration = typeof duration !== "undefined" ? duration : 400;

    // Easing function
    var easeInOutQuart = (time, from, distance, duration) => {
        if ((time /= duration / 2) < 1)
            return (distance / 2) * time * time * time * time + from;
        return (-distance / 2) * ((time -= 2) * time * time * time - 2) + from;
    };

    var timer = setInterval(() => {
        var time = new Date().getTime() - startTime;
        var newX = easeInOutQuart(time, startX, distanceX, duration);
        var newY = easeInOutQuart(time, startY, distanceY, duration);
        if (time >= duration) {
            clearInterval(timer);
        }
        window.scroll(newX, newY);
    }, 1000 / 60); // 60 fps
}
