let showpasss = document.getElementById('showpass')
$('#showpass').click(()=>{
     let pass = $('#password');
     if( showpasss.classList.contains('fa-eye')){
        showpasss.classList.remove('fa-eye')
        showpasss.classList.add('fa-eye-slash')
     } else {
        showpasss.classList.add('fa-eye')
     }

     if(pass.get(0).type == 'text'){
         pass.get(0).type = 'password';

     }
     else pass.get(0).type = 'text';
});


