document.addEventListener("DOMContentLoaded", function() {
    const toggleButton = document.getElementById('theme-toggle');
    const body = document.body;

    // Cek preferensi tema yang tersimpan di localStorage
    if (localStorage.getItem('theme') === 'dark') {
        body.classList.add('dark-mode');
    }

    // Tambahkan event listener untuk tombol toggle
    toggleButton.addEventListener('click', function() {
        body.classList.toggle('dark-mode');

        // Simpan preferensi tema di localStorage
        if (body.classList.contains('dark-mode')) {
            localStorage.setItem('theme', 'dark');
        } else {
            localStorage.setItem('theme', 'light');
        }
    });
});
