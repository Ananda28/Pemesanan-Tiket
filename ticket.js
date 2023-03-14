    //Variable kelas
    var pantai = 10000;
    var museum = 20000;
    var taman_nasional = 50000;

    var wisata_choice = ''; //pilihan kelas
    var pengunjung_dewasa = 0;
    var total_price_pengunjung_dewasa = 0;
    var harga_anak = 0;
    var harga_dewasa = 0;    

    //Fungsi submit handler digunakan untuk mentriger button submit
    function onSubmit(event){
        hitung();
        setTimeout(function () {
          var id = document.querySelector("#no_id").value;
          if (id.length < 16) {
            alert("No identitas harus 16 digit");
          } else {
            document.pemesanan.submit();
          }
        }, 1000);
    }
    //Untuk menghitung harga jumlah dewasa dan anak
    function hitung() {
      var price = document.getElementById("harga");
      var total = document.getElementById("total");
      var total_dewasa = document.querySelector('#pengunjung_dewasa').value;
      var total_anak = document.querySelector('#pengunjung_anak').value;
      var wisata = document.querySelector('#tempat').value;

      if (wisata == 'pantai') {
        wisata_choice = pantai;
      } else if (wisata == 'museum') {
        wisata_choice = museum;
      } else {
        wisata_choice= taman_nasional;
      }
       
      if (total_anak >= 1) {
        harga_anak = diskon_anak(total_anak, wisata_choice);
      }
      
      //penghitung tiket dari setiap penumpang dan anak
      harga_tiket_normal = total_dewasa * wisata_choice;
      console.log(harga_tiket_normal);
      total_harga_tiket = harga_tiket_normal + harga_anak;
      document.querySelector('input[name="harga"]').value = wisata_choice;
      document.querySelector('input[name="total"]').value = total_harga_tiket;
      price.innerHTML = formatRupiah(total_harga_tiket, 'Rp. ');
      total.innerHTML = formatRupiah(wisata_choice, 'Rp. ');
    }
    //Untuk menghitung diskon anak berdasarkan kelas
    function diskon_anak(jml,tempat){
      total_price_anak = jml * tempat; 
      return (harga_anak = total_price_anak - total_price_anak * 0.5); // 50% jadi 0,5 
    }

    //Untuk mengcancel pesanan
    function cancel(){
        document.pemesanan.reset();
    }

    //digunakan untuk mengecek format rupiah
    function formatRupiah(angka, prefix){
      var number_string = angka.toString().replace(/[^,\d]/g, ''),
      split  = number_string.split(','),
      sisa   = split[0].length % 3,
      rupiah = split[0].substr(0, sisa),
      ribuan = split[0].substr(sisa).match(/\d{3}/gi);
 
      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if(ribuan){
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
      }
 
      rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
      return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }