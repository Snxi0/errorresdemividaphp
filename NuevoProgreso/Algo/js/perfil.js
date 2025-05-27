document.getElementById('fileInput').onchange = e =>
    document.getElementById('preview').src = URL.createObjectURL(e.target.files[0]);
