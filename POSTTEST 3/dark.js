$(document).ready(function() {
    // Fungsi untuk mengubah mode saat tombol ditekan
    $("#toggleDarkMode").click(function() {
        $("*").toggleClass("dark-mode");
    });
});