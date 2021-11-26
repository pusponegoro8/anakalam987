<script src="film2.js"></script>
<div class="row" style="margin-bottom: 25px;">
    <div class="col-12">
        <input type="text" id="txtcari" class="form-control" placeholder="Keyword Berupa Judul, Pemain dan Sinopsis" onkeyup="ambildatafilm()" autocomplete="off">
    </div>
</div>
<div class="row" id="blokfilm">
    <div class="col-12" style="text-align: center;">
        <h2>Silahkan Isi Keyword Filter Terlebih Dahulu</h2>
    </div>
</div>
<div class="modal fade" role="dialog" id="modaldetail">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header btn-primary">
                <h5 class="modal-title" style="font-size: 20px;">Detail Film</h5>
            </div>
            <div class="modal-body" id="blokdetail"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<script>
$("#mndata").addClass("active");
$("#page_header_title").html("Data Film");
function ambildatafilm(){
        let cari = $("#txtcari").val();
        console.log(cari);    
        let hasil = "";
        let x;
        if(cari==""){
            $("#blokfilm").html("");
        }else{    
            for(x in datafilm){
            let cv = datafilm[x].Cover;
            let jd = datafilm[x].Judul;
            let pm = datafilm[x].data1[0].Pemain;
            let th = datafilm[x].data2["0"];
            let rt = datafilm[x].data2["1"];
            let dr = datafilm[x].durasI;
            let sn = datafilm[x].data1[0].Sinopsis;
            hasil += "<img src='"+ cv +"' data-judul='"+ jd +"' data-pemain='"+ pm +"' data-tahun='"+ th +"' data-rating='"+ rt + "' data-durasi='"+ dr +"' data-sinopsis='"+ sn +"' class='col-md-2' style='margin-bottom: 15px;'onclick='tampildetail(this)'>";
        }
        $("#blokfilm").html(hasil);
        }

    }


    function tampildetail(el){
        let judul = $(el).data("judul");
        let pemain = $(el).data("pemain");
        let tahun = $(el).data("tahun");
        let rating = $(el).data("rating");
        let durasi = $(el).data("durasi");
        let sinopsis = $(el).data("sinopsis");
        $("#blokdetail").html("<p style='font-size: 20px;'><b>Judul:</b><br>" + judul + "<p style='font-size: 20px;'><b>Pemain:</b><br>" + pemain + "<p style='font-size: 20px;'><b>Tahun:</b><br>" + tahun + "<p style='font-size: 20px;'><b>Rating:</b><br>" + rating + "<p style='font-size: 20px;'><b>Durasi:</b><br>" + durasi + "<p style='font-size: 20px; text-align:justify'><b>Sinopsis:</b><br>" + sinopsis);
        $("#modaldetail").modal("show");
    }

</script>   