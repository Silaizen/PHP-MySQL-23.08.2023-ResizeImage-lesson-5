function previewFiles() {
  document.getElementById('fileinput').addEventListener('change', function(){
      const previewContainer = document.getElementById("preview");
      previewContainer.innerHTML = ""; // Очистка предыдущего предпросмотра
  
      for (let i = 0; i < this.files.length; i++) {
          const file = this.files[i];
  
          const fileInfo = document.createElement("div");
          fileInfo.className = "file-info";
  
          const fileImage = document.createElement("img");
          fileImage.src = URL.createObjectURL(file);
          fileImage.className = "file-image";
          
          // Добавляем стили для обрезки изображения
          fileImage.style.width = "100px"; // Замените на ваш желаемый размер
          fileImage.style.height = "100px"; // Замените на ваш желаемый размер Замените на ваш желаемый размер
          
          fileInfo.appendChild(fileImage);
  
          previewContainer.appendChild(fileInfo);
      }
  }, false);
}

window.addEventListener('DOMContentLoaded', (event) => {
  previewFiles(); // Вызов функции для инициализации предпросмотра файлов
});
