function pildos(){
    let dosen = document.getElementById("dosen");    
    let val = dosen.options[dosen.selectedIndex].value;
    let desc = document.getElementById("desc");

    if (val == "Angga"){
        desc.innerText =  "Pengen nilai bagus bang ?";}
    else if (val == "Indra"){
        desc.innerText =  "Kamu hebat";}
    else{
        desc.innerText =  "Gaje";
    }
};

function theme(){
    let pilihtema = document.getElementById('pilihtema');
    let val = pilihtema.options[pilihtema.selectedIndex].value;
    let element = document.body;

    if(val == 'light'){
        element.classList.remove("dark");}
    else{
        element.classList.toggle("dark");       
    }
};

function count(){
    let numbers = document.getElementById('numbers').value;    
    let hasilfaktor = document.getElementById('hasil');    
    let jumlah = numbers;
    for(i=jumlah-1;i>1;i--){
       jumlah*=i;
    };
    
    hasil.innerText = "Hasil dari faktorial " + numbers + " adalah " + jumlah;
};