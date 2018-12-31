/* Javascript Puro
let botao =document.querySelector('.menu-principal__btn');
let menuPrincipal = document.querySelector('.menu-principal');
botao.addEventListener("click",abreFechaMenu);
function abreFechaMenu(e){
   menuPrincipal.classList.toggle('menu-principal--fechado');
}
Jquery */
$(document).ready(function(){
   // Botão do menu
   $('.menu-principal__btn').click(function(){
       $('.menu-principal').toggleClass('menu-principal--fechado');
   });

   // Slide depoimentos
   $('.depoimentos__caixa').slick({
       autoplay: true,
       arrows: false,
       dots: true
   });

    // validação do fromulario de contato
    $('.formulario').validate({
        rules:{
            nome:'required',
            email:{
                required:true,
                email:true
            },
            mensagem:'required',
        },
        messages:{
            nome:'Por favor  preencha o campo Nome',
            email:{
                required:'Por favor preencha o E-mail',
                email:'Por favor preencha um E-mail valido'
            },
            mensagem:'Por favor preencha o campo Mensagem'
        }
    });

});

