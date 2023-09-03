document.addEventListener("DOMContentLoaded", function () {
    const sliders = document.querySelectorAll(".carousel-slider");

    sliders.forEach(function (slider) {
        const imagesContainer = slider.querySelector(".slider-images");
        const prevButton = slider.querySelector(".prev-button");
        const nextButton = slider.querySelector(".next-button");
        let currentIndex = 0;

        // Функция для обновления активного изображения и стилей
        function updateActiveImage() {
            const images = imagesContainer.querySelectorAll(".carousel-small-image");
            images.forEach(function (image, index) {
                if (index === currentIndex) {
                    image.classList.add("active");
                } else {
                    image.classList.remove("active");
                }
            });
        }

        prevButton.addEventListener("click", function () {
            currentIndex = (currentIndex - 1 + imagesContainer.children.length) % imagesContainer.children.length;
            updateActiveImage();
            showImage(currentIndex, imagesContainer);
        });

        nextButton.addEventListener("click", function () {
            currentIndex = (currentIndex + 1) % imagesContainer.children.length;
            updateActiveImage();
            showImage(currentIndex, imagesContainer);
        });

        function showImage(index, container) {
            const imageWidth = container.clientWidth;
            const images = container.querySelectorAll(".carousel-small-image");
            
            images.forEach(function (image, i) {
                const offset = (i - index) * imageWidth;
                image.style.transform = `translateX(${offset}px)`;
            });
        }

        showImage(currentIndex, imagesContainer);
        updateActiveImage();
        const fancyboxImages = slider.querySelectorAll(".carousel-small-image a");
        fancyboxImages.forEach(function (image) {
            image.addEventListener("click", function (e){
                e.preventDefault(); // Предотвратить переход по ссылке
                $.fancybox.open(fancyboxImages, {
                    // Опции FancyBox, если необходимо
                });
        });
      });
    });
});