

$(function(){
   
    console.log('Jquery Start');
    
    $('#task-result').hide();
    
    // cada que presiona una tecla keyup
    $('#search').keyup(function (){
      
        if ($('#search').val()){
            
         let search = $('#search').val();
        
        // peticion al servidor
        $.ajax({
            
            url:'task_search.php',
            type:'POST',
            data:{search}  ,//<-- {search:search} mandar el valor del input al servidor
            success: function (response) {
                // volver a convertir de string a json
               let task = JSON.parse(response);
               let template = '';
               // recorre el objeto task
               task.forEach(task => {
                    template += `<li>
                    ${task.name}                    
                </li>`
               });
               
                $('#container').html(template);
                    $('#task-result').show();
            }
        });
        }
        
        // console.log(search);  probar
        
    });
    
    
    $('#task-form').submit(function(e){
        
       const postData = { 
           name: $('#name').val(),
           description: $('#description').val()
        };
        
        // escucha la respuesta del servidor y muestra por consola
        $.post('task-add.php',postData , function (response) {
            console.log(response);
        });
        
        e.preventDefault();
    });
    
    
});