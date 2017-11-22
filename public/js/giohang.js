var local="http://localhost:8000/"
function chonmua(ma_sp){
  var sl=document.getElementById('sl_'+ma_sp).value;
  console.log(sl);
  window.location=local+"them-gio-hang/"+ma_sp+"/"+sl;
  }
