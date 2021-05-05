 (function () {
       'use strict'
       // Fetch all the forms we want to apply custom Bootstrap validation styles to
       var forms = document.querySelectorAll('.needs-validation')

       // Loop over them and prevent submission
       Array.prototype.slice.call(forms)
         .forEach(function (form) {
           form.addEventListener('submit', function (event) {
             if (!form.checkValidity()) {
               event.preventDefault()
               event.stopPropagation()
             }

             form.classList.add('was-validated')
           }, false)
         })
     })()

var validarform = function () {
  'use strict'
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')
  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
   .forEach(function (form) {
     form.addEventListener('submit', function (event) {
       if (!form.checkValidity()) {
         event.preventDefault()
         event.stopPropagation()
       }

       form.classList.add('was-validated')
     }, false)
   })
}

function validarData(dt_sorteio){
  var f = new Date();
  var mes = (f.getMonth() + 1).toString();
  if(mes.length <=1){
    mes="0" + mes;
  }
  var dia = (f.getDate()).toString();
  if(dia.length <=1){
    dia="0" + dia;
  }

  data_atual = f.getFullYear() + "-" + mes + "-" + dia;
  if( dt_sorteio.value > data_atual){
      $("#data_sorteio").removeClass('is-invalid');
      $("#sortear").attr("disabled", false);
  }
  else{

      alert(`A data ${dt_sorteio.value} selecionada deve ser maior que a data atual ${data_atual}`);
      $("#data_sorteio").addClass('is-invalid');
      $("#formSorteio").removeClass('was-validated');
      $("#sortear").attr("disabled", true);
  } 
  validarform();
}

$(document).ready(function() {
     
     $("#sortear").click(function(e) {
         validarform();
         form = document.getElementById('formSorteio');
         if(!form.checkValidity() || $("#data_sorteio").hasClass("is-invalid")){
           $("#sortear").removeAttr('data-toggle');
           $("#sortear").removeAttr('data-target');
           $('#exampleModalLong').modal('hide');
           //e.preventDefault();
           e.stopPropagation();
           return;
         }else{
              
              $("#sortear").attr({
                'data-toggle': 'modal',
                'data-target': '#exampleModalLong'
              });
              $("#data_sorteio").removeClass("is-invalid");
              nome_lot = $.trim($('#nome_lot').val());
              data_sorteio = $.trim($('#data_sorteio').val());
              num_inicial = $.trim($('#num_inicial').val());
              num_fim = $.trim($('#num_fim').val());

              $.ajax({
                  url: "action/sorteioAction.php",
                  type: "POST",
                  //contentType: "application/json; charset=utf-8",
                  datatype: "html",
                  data: { nome_lot: nome_lot, data_sorteio: data_sorteio, num_inicial: num_inicial, num_fim: num_fim, acao: 'sortear' },
                  success: function(data) {
                      //console.log(data);
                      $("#div_resultado").html(data);
                      //alert(data);
                      $('#exampleModalLong').modal('show');
                      
                      //$('#exampleModalLong').show();
                      e.preventDefault();
                      e.stopPropagation();
                  }
              });

              e.preventDefault();
              e.stopPropagation();
         }

     });
 });