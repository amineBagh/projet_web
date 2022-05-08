$(document).ready(function() {
  $('#list').DataTable( {
      initComplete: function () {
          this.api().columns().every( function () {
              var column = this;
              var select = $('<select><option value=""></option></select>')
                  .appendTo( $(column.footer()).empty() )
                  .on( 'change', function () {
                      var val = $.fn.dataTable.util.escapeRegex(
                          $(this).val()
                      );

                      column
                          .search( val ? '^'+val+'$' : '', true, false )
                          .draw();
                  } );

              column.data().unique().sort().each( function ( d, j ) {
                  select.append( '<option value="'+d+'">'+d+'</option>' )
              } );
          } );
      }
  } );
} );
   
  



 $(document).on('click', '#delete_product', function(e){ 
  var id = $(this).data('id');
  SwalDelete(id);
  e.preventDefault();
 });
function SwalDelete(id){
      swal.fire({
          title: 'Etes vous sûr ?',
          text: "Cliquez sur Oui pour supprimer la commande!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          //customClass: 'swal-wide',
          cancelButtonColor: '#d33',
          cancelButtonText: 'Non!',
          width:'400px', 
          confirmButtonText: 'Oui!',
      }).then((result) => {
          if (result.value){
              $.ajax({
                  url: 'delete.php?id='+id,
                     success:function(){
                      console.log();
                      swal.fire("", "la commande est supprimée avec succès !", "success").then((result) => { 
                          window.location.href = "read.php";
                       });
                    },
                    error:function(){
                      swal.fire("Oops...", "Demande refusée ! :(", "error");
                    },
              })
          }
      })
  }
  