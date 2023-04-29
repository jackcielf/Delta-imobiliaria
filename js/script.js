// ABRIR FERRAMENTA DE ADMIN
const admin_config = document.querySelector('.config');
const items_adm = document.querySelector('.items_adm');
const menuClassShow = 'showMenuAdmin';

admin_config.addEventListener('click', () => {
    if (items_adm.classList.contains(menuClassShow)) {
        items_adm.classList.remove(menuClassShow);
    } else {
        items_adm.classList.add(menuClassShow);
    }
});

// SCROLL PAGE WITH BEHAVIOR (for any browser)
const menuItems = document.querySelectorAll('.items a[href^="#"]');

menuItems.forEach(item => {
    item.addEventListener('click', scrollToIdOnClick);
})

function getScrollTopByHref(element) {
    const id = element.getAttribute('href');
    return document.querySelector(id).offsetTop;
}

function scrollToIdOnClick(event) {
    event.preventDefault();
    const to = getScrollTopByHref(event.target);
    scrollToPosition(to);
}

function scrollToPosition(to) {
    smoothScrollTo(0, to);
}

function smoothScrollTo(endX, endY, duration) {
    const startX = window.scrollX || window.pageXOffset;
    const startY = window.scrollY || window.pageYOffset;
    const distanceX = endX - startX;
    const distanceY = endY - startY;
    const startTime = new Date().getTime();

    duration = typeof duration !== 'undefined' ? duration : 400;

    // Easing function 
    const easeInOutQuart = (time, from, distance, duration) => {
        if ((time /= duration / 2) < 1) return distance / 2 * time * time * time * time + from;
        return -distance / 2 * ((time -= 2) * time * time * time - 2) + from;
    };

    const timer = setInterval(() => {
        const time = new Date().getTime() - startTime;
        const newX = easeInOutQuart(time, startX, distanceX, duration);
        const newY = easeInOutQuart(time, startY, distanceY, duration);
        if (time >= duration) {
            clearInterval(timer);
        }
        window.scroll(newX, newY);
    }, 1000 / 60); 
};