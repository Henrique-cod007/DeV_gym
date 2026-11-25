
let tempo = 10 * 60;

const visor = document.getElementById("cronometro");

function atualizarCronometro(){
    
    let minutos = Math.floor(tempo / 60);
    let segundos = tempo % 60;

    let m = String(minutos).padStart(2,"0");

    let s = String(segundos).padStart(2,"0");

    visor.textContent = `${m}:${s}`;

    if (tempo > 0){
        tempo--;
    }else{
        clearInterval(intervalo);
        visor.textContent = "00:00";
        
    }
}

atualizarCronometro();

const intervalo = setInterval(atualizarCronometro, 1000);