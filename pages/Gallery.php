<?php Message::get() ?>

<h1>Gallery</h1>

<!-- Контейнер для вывода маленьких изображений и слайдеров -->
<div class="carousel-container">
    <?php
    // Получите список папок из директории "images"
    $sliderFolders = glob('./images/*', GLOB_ONLYDIR);

    // Переберите каждую папку и отобразите её содержимое
    foreach ($sliderFolders as $sliderFolder) {
        $sliderName = basename($sliderFolder);
        $images = glob($sliderFolder . "/resized_*.*");
        // Получите маленькие изображения в каждой папке

        if (!empty($images)) {
            echo "<div class='carousel-slider'>";
            echo "<div class='slider-buttons'>";
            echo "</div>";
            echo "<p class='slider-name'>$sliderName</p>";
            echo "<div class='slider-images'>";
            echo "<button class='prev-button'>&lt;</button>"; // Кнопка "Previous"

            $galleryName = 'gallery-' . $sliderName; // Создаем имя галереи на основе имени слайдера

            foreach ($images as $index => $image) {
                $isActive = $index === 0 ? 'active' : ''; // Добавляем класс "active" к первому изображению
                echo "<a href='" . str_replace('resized_', '', $image) . "' data-fancybox='$galleryName'>";
                echo "<img src='$image' class='carousel-small-image $isActive' alt='$sliderName'>";
                echo "</a>";
            }

            echo "<button class='next-button'>&gt;</button>"; // Кнопка "Next"
            echo "</div>";
        }
    }
    ?>
</div>

