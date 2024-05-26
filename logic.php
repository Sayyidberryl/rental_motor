<?php 
class data {
    public $member;
    public $jenis;
    public $waktu;
    public $diskon;
    protected $pajak;
    private $scooter, $sport, $sporttouring, $cross;
    private $listmember = ['asep', 'wawan', 'ucup', 'zaen'];

 function __construct(){
    $this->pajak = 10000;
 }
 
 public function getmember(){
    if (in_array($this->member, $this->listmember)){
        return "member";
    }else {
        return "non-member";
    }
 }

 public function setharga($jenis1,$jenis2,$jenis3,$jenis4){
    $this->scooter = $jenis1;
    $this->sport = $jenis2;
    $this->sporttouring = $jenis3;
    $this->cross = $jenis4;
 }

 public function getharga(){
    $data["scooter"] = $this->scooter;
    $data["sport"] = $this->sport;
    $data["sportTouring"] = $this->sporttouring;
    $data["cross"] = $this->cross;
    return $data;
 }
}


class rental extends data {
 public function hargarental(){
    $dataharga = $this->getharga()[$this->jenis];
    $diskon = $this->getmember() == "member" ? 5 : 0;
    if ($this->waktu === 1){
        $bayar = ($dataharga - ($dataharga * $diskon / 100)) + $this->pajak;
    }else{
        $bayar = (($dataharga * $this->waktu) - ($dataharga * $diskon / 100)) + $this->pajak;
    }
     return [$bayar, $diskon];
 }

 public function pembayaran() {
    
   echo "<div class='card my-3 bg-primary text-white'>
   <div class='card-body text-center'>
       <h3>Struk transaksi rental</h3>
       <p class=' ms-2 mb-0'>" . $this->member .  " berstatus sebagai " . $this->getMember() . " mendapatkan diskon sebesar " . $this->hargaRental()[1] . "%</p> 
       <p class=' ms-2 mb-0'>Jenis motor yang dirental adalah " . $this->jenis . " selama " . $this->waktu . "hari</p> 
       <p class=' ms-2 mb-0'>Harga rental per-harinya : Rp. " . number_format($this->getHarga()[$this->jenis],0,',','.'). "</p>
       <p class=' ms-2 mb-0'>Besar yang harus dibayarkan adalah Rp. " . number_format($this->hargaRental()[0],0,',','.'). "</p>


       <button onclick=window.print() class='mawang container btn btn-success form-control mt-3' type='submit' name='print'>Print</button>
   </div>
</div>";

 }











}

?>