

$(function(){
   
    console.log('Jquery Start');
    
    // cada que presiona una tecla keyup
    $('#search').keyup(function (){
      
      let search = $('#search').val();
        
        // peticion al servidor
        $.ajax({
            
            url:'task_search.php',
            type:'POST',
            data:{search}  ,//<-- {search:search} mandar el valor del input al servidor
            success: function (response) {
                console.log(response);
            }
        })
        
        // console.log(search);  probar
        
    })
    
    
});