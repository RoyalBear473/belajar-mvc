$(function () {
  $(".tombolTambah").on("click", function () {
    $("#judulModalLabel").html("Tambah Data");
    $(".modal-footer button[type=submit]").html("tambah data");
  });

  $(".editDataMhs").on("click", function () {
    $("#judulModalLabel").html("Update Data");
    $(".modal-footer button[type=submit]").html("ubah data");
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/learnmvc/public/mahasiswa/getubah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#nama").val(data.nama);
        $("#absen").val(data.absen);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
      },
    });
  });
});
