$(function () {
  $(".tombolTambah").on("click", function () {
    $("#judulModalLabel").html("Tambah Data");
    $(".modal-footer button[type=submit]").html("tambah data");
    $("#nama").val("");
    $("#absen").val("");
    $("#email").val("");
    $("#jurusan").val("");
  });

  $(".editDataMhs").on("click", function () {
    $("#judulModalLabel").html("Update Data");
    $(".modal-footer button[type=submit]").html("ubah data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/learnmvc/public/mahasiswa/update"
    );
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
        $("#id").val(data.id);
      },
    });
  });
});
