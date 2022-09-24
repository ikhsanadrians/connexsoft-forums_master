
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




// function showBtnVisible(){
//     let btnHidePass = $('#hidepass')
//     let btnShowPass = $('#showpass')
//     if(btnShowPass.classList.contains('visible')){
//         btnShowPass.classList.remove('visible')
//         btnShowPass.classList.add('invisible')
//         btnHidePass.classList.remove('invisible');
//         btnHidePass.classList.add('visible');
//     } else {
//         btnShowPass.classList.add('visible')
//         btnShowPass.classList.remove('invisible')
//         btnHidePass.classList.add('invisible');
//         btnHidePass.classList.remove('visible');
//     }


//     $('#showpass').classList.add('hidden')
// }

