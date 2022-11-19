function inactivity() {
    var time;
    window.onmousemove = resetTimer;    // Movimiento del ratón
    window.onclick = resetTimer;        // Clicks
    window.onscroll = resetTimer;       // Moverse con las flechas del teclado
    window.onkeypress = resetTimer;     // Teclear

    function logout() {
        window.location.href = "php/logoutCode.php";    
    }

    function resetTimer() {
        clearTimeout(time);
        time = setTimeout(logout, 120000);  // El tiempo esta en milisegundos x*1000
    }
}

inactivity();