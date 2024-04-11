function confirmDelete() {
    swal({
        title: "Anda yakin?",
        text: "Data akan dihapus secara permanen!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willDelete) => {
        if (willDelete) {
            // Jika pengguna mengonfirmasi penghapusan
            document.querySelector('form').submit(); // Submit formulir penghapusan
        }
    });
}