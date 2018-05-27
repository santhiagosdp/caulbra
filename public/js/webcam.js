function startCamera () {
    navigator.mediaDevices.getUserMedia({ video: { facingMode: 'user' }, audio: true })
        .then((stream) => {
            document.getElementById('videoFeed').srcObject = stream
        })
}
function closeCamera () {

}
function stopCamera () {
    document.getElementById('videoFeed')
        .srcObject
        .getVideoTracks()
        .forEach(track => track.stop())
}

document.querySelector('.stop-video').addEventListener('click', event => {
    stopCamera()
})

document.querySelector('.start-video').addEventListener('click', event => {
    startCamera()
})

document.querySelector('.take-picture').addEventListener('click', event => {
    // coletamos os elementos que precisamos referenciar
    const canvas = document.getElementById('picture-canvas') // ESSE ITEM MOSTRA A FOTO NA TELA
		//console.log = ("document.getElementById('picture-canvas')")
    const context = canvas.getContext('2d')
    const video = document.getElementById('videoFeed')
    // o canvas terá o mesmo tamanho do vídeo
    canvas.width = video.offsetWidth
    canvas.height = video.offsetHeight
    // e então, desenhamos o que houver no vídeo, no canvas
    context.drawImage(video, 0, 0, canvas.width, canvas.height)

    // olha que barbada, o canvas tem um método toBlob!
    canvas.toBlob(function(blob){
        const url = URL.createObjectURL(blob)
        // podemos usar esta URL em um elemento de vídeo, ou fazer upload do blob, etc.
        // e então, não precisamos mais da câmera
        stopCamera()
    }, 'image/jpeg', 0.95)
    //closeCamera()
})
