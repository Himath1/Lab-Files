function showCongratsMessage() {
    document.getElementById('congrats-message').classList.remove('hidden');
    startPoppers();
}

function startPoppers() {
    let poppers = document.querySelectorAll('.popper');
    poppers.forEach((popper, index) => {
        popper.style.left = `${Math.random() * 100}vw`;
        popper.style.top = `${Math.random() * 100}vh`;
        setInterval(() => {
            popper.style.left = `${Math.random() * 100}vw`;
            popper.style.top = `${Math.random() * 100}vh`;
        }, 1000);
    });
}
 