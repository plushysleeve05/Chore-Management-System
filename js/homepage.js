function scrollToSec2() {
    // Get the position of sec2
    const sec2Position = document.getElementById('loginsec').offsetTop;

    // Scroll to sec2
    window.scrollTo({
        top: sec2Position,
        behavior: 'smooth',
        duration: 80000
    });
}