$('#showpass').click(function(){
     let pass = $('#password');
     if(pass.get(0).type == 'text'){
        pass.get(0).type = 'password';
     } else {
        pass.get(0).type = 'text';

     }
});
