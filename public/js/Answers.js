let fileuploaded = document.querySelector('#imageinputs')
let preview = document.querySelector('.upload-image-previews')
let bingkai = document.querySelector('#bingkai')
let previewimg = document.querySelector('#imagepreviews')
let closebtnimgpres = document.querySelector('#buttoncloseimgpreview')


function removeUploadFilePreview() {
    if(bingkai.classList.contains('visible')){
        bingkai.classList.add('invisible')
        bingkai.classList.remove('visible')
    }else {
        bingkai.classList.remove('invisible')
        bingkai.classList.add('visible')
    }

}



$('.buttonupload').click(function(){
    removeUploadFilePreview()
})


$('#closez').click(function(){
    removeUploadFilePreview()
})


fileuploaded.addEventListener("change", (event) => {

    if (preview.classList.contains('invisible')) {
        preview.classList.remove('invisible')
        preview.classList.add('visible')
    }
    let imagename = event.target.files[0].name
    $("#imagesnames").text(imagename)

    let img = URL.createObjectURL(event.target.files[0])
    previewimg.src = img

})
