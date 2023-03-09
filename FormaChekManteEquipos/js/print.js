function loadImage(url){
    return new Promise(resolve => {
        const xhr = new XMLHttpRequest();
        xhr.open('GET',url,true);
        xhr.responseType="blob";
        xhr.onload = function(e){
            const reader = new FileReader();
            reader.onload= function(event){
                const res=event.target.result;
                resolve(res);

            }
            const file=this.response;
            reader.readAsDataURL(file);

        }
        xhr.send();       
    });
}




let signaturePad = null;

window.addEventListener('load',async ()=>{
    const canvas= document.getElementById("signature-canvas");
    canvas.height=canvas.offsetHeight;
    canvas.width=canvas.offsetWidth;
    
    signaturePad=new SignaturePad(canvas, {}); 

    const image= await loadImage("img/formulario.jpg.png")
    console.log(image);

    const form=document.querySelector('#forma');
    form.addEventListener('submit',(e)=> {
        e.preventDefault();

        let area=document.getElementById('area').value;
        let usuario=document.getElementById('usuario').value;
        let internamiento=document.getElementById('internamiento').value;
        let fecha=document.getElementById('fecha').value;
        let marca=document.getElementById('marca').value;
        let modpla=document.getElementById('modpla').value;
        let serref=document.getElementById('serref').value;
        let procesador=document.getElementById('procesador').value;
        let memram=document.getElementById('memram').value;
        let lectora=document.getElementById('lectora').value;

        generatePDF(area,usuario,internamiento,fecha,marca,modpla,serref,procesador,memram,lectora);
        
    })

})
async function generatePDF(area,usuario,internamiento,fecha,marca,modpla,serref,procesador,memram,lectora){
    const image=await loadImage("img/formulario.jpg.png");
    const signatureImage=signaturePad.toDataURL();

    const pdf = new jsPDF('p','pt','letter');

    pdf.addImage(image,'PNG',0,0,565,792);

    pdf.addImage(signatureImage,'PNG',200,615,300,50);

    pdf.setFontSize(12);
    pdf.text(area,260,125);
    pdf.text(usuario,260,128);
    pdf.text(internamiento,260,131);
    pdf.text(fecha,260,134);
    pdf.text(marca,260,137);
    pdf.text(modpla,260,140);


    pdf.save("example.pdf");
}