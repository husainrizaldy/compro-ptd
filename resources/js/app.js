import './bootstrap';
import '../css/app.css';
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';

Alpine.plugin(collapse);
window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    const track = document.getElementById('carousel-track');
    const items = track.children;
    const totalItems = items.length / 2;
    let visibleItems = window.innerWidth < 768 ? 2 : 5; // mobile <768px tampil 2, else 5
    let index = 0;

    const slide = () => {
        index++;
        track.style.transition = 'transform 0.5s ease-in-out';
        track.style.transform = `translateX(-${(100 / visibleItems) * index}%)`;

        if (index >= totalItems) {
            setTimeout(() => {
                track.style.transition = 'none';
                index = 0;
                track.style.transform = `translateX(0%)`;
            }, 500);
        }
    };

    setInterval(slide, 3000);

    // Update visibleItems saat resize
    window.addEventListener('resize', () => {
        visibleItems = window.innerWidth < 768 ? 2 : 5;
    });
});