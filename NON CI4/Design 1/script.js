let currentIndex = 0;
const contents = document.querySelectorAll('.swipe-content');

function showContent(index) {
    const swipeContainer = document.querySelector('.swipe-container');
    swipeContainer.style.transform = `translateX(-${index * 100}%)`;
}

document.addEventListener('keydown', (event) => {
    if (event.key === 'ArrowRight') {
        currentIndex = (currentIndex + 1) % contents.length; // Geser ke kanan
        showContent(currentIndex);
    } else if (event.key === 'ArrowLeft') {
        currentIndex = (currentIndex - 1 + contents.length) % contents.length; // Geser ke kiri
        showContent(currentIndex);
    }
});