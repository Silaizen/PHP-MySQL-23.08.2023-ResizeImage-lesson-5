<?php Message::get() ?>
<form action="index.php" method="POST">
    <label>Create New Slider:</label>
    <input type="text" name="slider_name" required>
    <button type="submit" name="action" value="createSlider">Create Slider</button>
</form>

<!-- Форма для выбора слайдера и файла -->
<form action="index.php" method="POST" enctype="multipart/form-data">
    <label>Select Slider:</label>
    <select name="selected_slider" required>
        <?php echo getSliderOptions(); ?>
    </select>
    <br>
    <label>Choose Files:</label>
    <input type="file" name="slide_files[]" id="fileinput" multiple required>
    <div class="preview-container" id="preview">
        <!-- Здесь будет отображаться предпросмотр файлов -->
    </div>
    <button type="submit" name="action" value="uploadSlide">Upload Slides</button>
</form>


<!-- Форма для удаления слайдера -->
<form action="index.php" method="POST">
    <label>Select Slider to Delete:</label>
    <select name="slider_to_delete" required>
        <?php echo getSliderOptions(); ?>
    </select>
    <button type="submit" name="action" value="deleteSlider">Delete Slider</button>
</form>