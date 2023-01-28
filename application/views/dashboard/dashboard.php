
<?php
$name = "konsumsi";
$pembersih= "pembersih";

$this->db->select_sum('jumlah_terjual');
$this->db->where('jenis_barang', $name);
$konsumsi = $this->db->get('barang')->result();

$this->db->select_sum('jumlah_terjual');
$this->db->where('jenis_barang', $pembersih);
$name_pembersih = $this->db->get('barang')->result();


$this->db->select('jumlah_terjual,tanggal_transaksi');
$dataProductChart = $this->db->get('barang')->result();
foreach ($dataProductChart as $k => $v) {
	$arrProd[]= ["y"=>$v->jumlah_terjual,"label"=>$v->tanggal_transaksi];
}


foreach ($konsumsi as $k => $r) {
	$arrProd1= [$r->jumlah_terjual];
}
foreach ($name_pembersih as $k => $l) {
	$arrProd2= [$l->jumlah_terjual];
}
//echo implode($arrProd1); // default separator  
//print_r($arrProd1);die();
//print_r($name_pembersih);die();

//print_r($sql_pemb);die();
//print_r(json_encode($arrProd, JSON_NUMERIC_CHECK));DIE();

//$test = implode(", ", $arrProd1);
									//echo $test;
								
?>
<div class="container my-3 ">
<div class="row">
          
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 ">
        <div class="card border-0 shadow mx-3 bg-white wrapper fadeInDown">
        <div class="card-body  ">
		<div class="container">
	<div class="row my-5">
		<div class="col-12 col-sm col-md-12 col-lg-12">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="card highlight bg-orange-coral rounded-left shadow-sm border-0 d-flex flex-row mb-4 mb-md-0">
							<div class="card-header border-0 rounded shadow">
							<img src="<?= base_url('assets'); ?>/img/das3.png" class="img-fluid" style="width: 80px;">
							</div>
							<div class="card-body text-light">
								<h2>Konsumsi</h2>
								<table>
								<tr>
								<td><P class="lead">Total terjual : &nbsp;</P></td>
								<td><p class="lead"><?php echo implode($arrProd1);?></p></td>
								</tr>
								</table>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card highlight bg-kimoby rounded-left shadow-sm border-0 d-flex flex-row mb-4 mb-md-0">
							<div class="card-header border-0 rounded shadow">
							<img src="<?= base_url('assets'); ?>/img/das1.png" class="img-fluid" style="width: 80px;">
							</div>
							<div class="card-body text-light">
								<h2>Pembersih</h2>
								<table>
								<tr>
								<td><P class="lead">Total terjual : &nbsp;</P></td>
								<td><p class="lead"><?php echo implode($arrProd2);?></p></td>
								</tr>
								</table>
							</div>
						</div>
					</div>
					<p></p>
					<br><br>
						<hr>	
         <br><br>
         <div id="chartContainer" style="height: 370px; width: 100%;"></div>
         <br>
			<script>
				window.onload = function () {

			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,
				theme: "light2", // "light1", "light2", "dark1", "dark2"
				title:{
					text: "Penjualan"
				},
				axisY: {
				title: "Jumlah Terjual"
				},
				data: [{     
					type: "column",  
					showInLegend: true, 
					legendMarkerColor: "green",
					legendText: "XTDS = Jumlah terjual dalam waktu tertentu",   
					dataPoints:  
					<?= json_encode($arrProd, JSON_NUMERIC_CHECK); ?>	
					}]
				});
				chart.render();
				
				} 
        </script>
						</div>
						</div>
					</div>
				</div>
			</div>
		
	
