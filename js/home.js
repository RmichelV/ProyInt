const btnVmCh = document.getElementById('btn-vm-ch');
const btnVmCt = document.getElementById('btn-vm-ct');
const btnVmCp = document.getElementById('btn-vm-cp');
const btnVmDr = document.getElementById('btn-vm-dr');
const btnVmPy = document.getElementById('btn-vm-py');
const btnVmUy = document.getElementById('btn-vm-uy');


const modalChacaltaya = document.getElementById('modalChacaltaya');
const modalCityTour = document.getElementById('modalCityTour');
const modalCopacabana = document.getElementById('modalCopacabana');
const modalCaminoDeLaMuerte = document.getElementById('modalCaminoDeLaMuerte');
const modalPampasDeYacuma = document.getElementById('modalPampasDeYacuma');
const modalUyuni = document.getElementById('modalUyuni');

const closeModalCh = document.querySelector('.c_ch');
const closeModalCt = document.querySelector('.c_ct');
const closeModalCp = document.querySelector('.c_cp');
const closeModalDr = document.querySelector('.c_dr');
const closeModalPy = document.querySelector('.c_py');
const closeModalUy = document.querySelector('.c_uy');


function mostrarModalChacaltaya() {
modalChacaltaya.style.display = 'block';
document.body.classList.add('modal-open'); 
}

function mostrarModalCityTour() {
    modalCityTour.style.display = 'block';
    document.body.classList.add('modal-open'); 
}

function mostrarModalCopacabana() {
    modalCopacabana.style.display = 'block';
    document.body.classList.add('modal-open'); 
}

function mostrarModalCaminoDeLaMuerte() {
    modalCaminoDeLaMuerte.style.display = 'block';
    document.body.classList.add('modal-open'); 
}

function mostrarModalPampasDeYacuma() {
    modalPampasDeYacuma.style.display = 'block';
    document.body.classList.add('modal-open'); 
}

function mostrarModalUyuni() {
    modalUyuni.style.display = 'block';
    document.body.classList.add('modal-open'); 
}


function ocultarModalChacaltaya() {
    modalChacaltaya.style.display = 'none';
    document.body.classList.remove('modal-open'); 
}

function ocultarModalCityTour() {
    modalCityTour.style.display = 'none';
    document.body.classList.remove('modal-open'); 
}
function ocultarModalCopacabana() {
    modalCopacabana.style.display = 'none';
    document.body.classList.remove('modal-open'); 
}

function ocultarModalCaminoDeLaMuerte() {
    modalCaminoDeLaMuerte.style.display = 'none';
    document.body.classList.remove('modal-open'); 
}

function ocultarModalPampasDeYacuma() {
    modalPampasDeYacuma.style.display = 'none';
    document.body.classList.remove('modal-open'); 
}

function ocultarModalUyuni() {
    modalUyuni.style.display = 'none';
    document.body.classList.remove('modal-open'); 
}


btnVmCh.addEventListener('click', mostrarModalChacaltaya);

btnVmCt.addEventListener('click', mostrarModalCityTour);

btnVmCp.addEventListener('click', mostrarModalCopacabana);

btnVmDr.addEventListener('click', mostrarModalCaminoDeLaMuerte);

btnVmPy.addEventListener('click', mostrarModalPampasDeYacuma);

btnVmUy.addEventListener('click', mostrarModalUyuni);


closeModalCh.addEventListener('click', ocultarModalChacaltaya);

closeModalCt.addEventListener('click', ocultarModalCityTour);

closeModalCp.addEventListener('click', ocultarModalCopacabana);

closeModalDr.addEventListener('click', ocultarModalCaminoDeLaMuerte);

closeModalPy.addEventListener('click', ocultarModalPampasDeYacuma);

closeModalUy.addEventListener('click', ocultarModalUyuni);


