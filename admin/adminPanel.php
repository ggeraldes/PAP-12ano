<?php 
include ("../loginRegistar/servidor.php");

if(! isset($_SESSION['tipoUtilizador']) || $_SESSION['tipoUtilizador'] == 'editor' || $_SESSION['tipoUtilizador'] == 'normal' ) {
	
	header("location:../error404/index.html");
	
}?>
<html>
 <head>
  <title>AAC/OAF - ADMIN PANEL</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" />
  <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
  
 
  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:1270px;
   padding:20px;
   background-color:#fff;
   border:1px solid #ccc;
   border-radius:5px;
   margin-top:25px;
   box-sizing:border-box;
  }
  </style>
 </head>
 <body>
 
  <div class="container-fluid" style="width:70%">
  <br>
  <a href="../perfil"><button type="button" class="btn btn-dark">Voltar</button></a>
   <h1 align="center">Painel de Administrador</h1>
   <br />
   <div class="table-responsive ">
   <br />
    <div align="right ">
     <button type="button" name="add" id="add" class="btn btn-info">Adicionar</button>
    </div>
    <br />
    <div id="alert_message"></div>
    <table id="user_data" class="table">
     <thead class="thead-dark" >
      <tr>
      <th>ID</th>
      <th>Username</th>
       <th>Primeiro Nome</th>
       <th>Último Nome</th>
       <th>Email</th>
       <th>Password</th>
       <th>Tipo de Utilizador</th>
       <th style="pointer-events: none;">Estado</th>
       <th style="pointer-events: none;"></th>
      </tr>
     </thead>
    </table>
   </div>
  </div>
  <br>
 </body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetch.php",
     type:"POST"
    },
    "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
        }
   });
  }
  
  function update_data(id, column_name, value)
  {
   $.ajax({
    url:"update.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 10000);
  }

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(id, column_name, value);
  });
  
  $('#add').click(function(){
   var html = '<tr>';
   html += '<td id="data0">---</td>';
   html += '<td contenteditable id="data1"></td>';
   html += '<td contenteditable id="data2"></td>';
   html += '<td contenteditable id="data3"></td>';
   html += '<td contenteditable id="data4"></td>';
   html += '<td contenteditable id="data5"></td>';
   html += '<td contenteditable id="data6"></td>';
   html += '<td id="data7">---</td>';
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Inserir</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
  });
  
  $(document).on('click', '#insert', function(){
   var primeiro_nome = $('#data2').text();
   var ultimo_nome = $('#data3').text();
   var username = $('#data1').text();
   var mail = $('#data4').text();
   var password = $('#data5').text();
   var tipoUtilizador = $('#data6').text();
   
   if(primeiro_nome != '' && ultimo_nome != '' && username != '' && mail != '' && password != '' && tipoUtilizador != '')
   {
    if(tipoUtilizador == 'admin' || tipoUtilizador == 'normal' || tipoUtilizador == 'editor'){
    $.ajax({
     url:"insert.php",
     method:"POST",
     data:{primeiro_nome:primeiro_nome, ultimo_nome:ultimo_nome, username:username, mail:mail, password:password, tipoUtilizador:tipoUtilizador},
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 10000);
   }else{
    alert("O tipo de utilizador tem de ser admin, normal ou editor.");
   }}
   else
   {
    alert("Preencha todos os campos");
   }
  });
  
  $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Tema certeza que quer remover este utilizador?"))
   {
    $.ajax({
     url:"delete.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 10000);
   }
  });
 });
</script>