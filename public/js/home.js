// let buttonasknav = document.querySelector('#asknav')
// let buttonaskbody = document.querySelector('#buttonaskbody')
// let backdrop = document.querySelector('.backdrop')
// let modalsquestion = document.querySelector('.question-modals-inner')
// let closes = document.querySelector('#buttonclose')
// let preview = document.querySelector('.upload-image-preview')
// let fileuploaded = document.querySelector('#imageinput')
// let previewimg = document.querySelector('#imagepreview')
// let closebtnimgpre = document.querySelector('#buttoncloseimagepreview')


// function backdropSelect() {
//     if (backdrop.classList.contains('nonactive')) {
//         backdrop.classList.remove('nonactive')
//         backdrop.classList.add('active')
//     } else if (backdrop.classList.contains('active')) {
//         backdrop.classList.remove('active')
//         backdrop.classList.add('nonactive')
//     }
// }

// function questionModalsSelect() {
//     if (modalsquestion.classList.contains('nonactive')) {
//         modalsquestion.classList.remove('nonactive')
//         modalsquestion.classList.add('active')
//     } else if (modalsquestion.classList.contains('active')) {
//         modalsquestion.classList.remove('active')
//         modalsquestion.classList.add('nonactive')
//     }
// }

// function removeUploadFilePreview() {
//     preview.classList.remove('active')
//     preview.classList.add('nonactive')

// }




// buttonasknav.addEventListener('click', () => {
//     backdropSelect()
//     questionModalsSelect()
// })

// buttonaskbody.addEventListener('click', () => {
//     backdropSelect()
//     questionModalsSelect()
// })


// closes.addEventListener('click', () => {
//     backdropSelect()
//     questionModalsSelect()
//     removeUploadFilePreview()
// })

// closebtnimgpre.addEventListener('click', () => {
//     removeUploadFilePreview()
// })

// fileuploaded.addEventListener("change", (event) => {

//     if (preview.classList.contains('nonactive')) {
//         preview.classList.remove('nonactive')
//         preview.classList.add('active')
//     }
//     let imagename = event.target.files[0].name
//     $("#imagenames").text(imagename)

//     let img = URL.createObjectURL(event.target.files[0])
//     previewimg.src = img

// })
