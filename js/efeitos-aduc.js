$(document).ready(function(){
            $("#logotipo").on("mouseover",function(){
                $("#banner h4").addClass("efeito");
            }).on("mouseout",function(){
                $("#banner h4").removeClass("efeito");
            }).on("mouseover",function(){
                $("#banner small").addClass("efeito");
            }).on("mouseout",function(){
                $("#banner small").removeClass("efeito");
            });
            
            $(".col-ministerios").on("mouseover",function(){
                $(".col-ministerios p").addClass("efeito");
            }).on("mouseout",function(){
                $(".col-ministerios p").removeClass("efeito");
            });
            $(".col-conjovem").on("mouseover",function(){
                $(".col-conjovem p").addClass("efeito");
            }).on("mouseout",function(){
                $(".col-conjovem p").removeClass("efeito");
            });
            $(".col-galeria").on("mouseover",function(){
                $(".col-galeria p").addClass("efeito");
            }).on("mouseout",function(){
                $(".col-galeria p").removeClass("efeito");
            });
            $(".col-faleconosco").on("mouseover",function(){
                $(".col-faleconosco p").addClass("efeito");
            }).on("mouseout",function(){
                $(".col-faleconosco p").removeClass("efeito");
            });
            
            $("#input-search").on("focus", function(){
                $("li.search").addClass("ativo");
            }).on("blur", function(){
                $("li.search").removeClass("ativo");
            });
            $(".leitura").on("mouseover",function(){
                $("p").addClass("efeito");
            }).on("mouseout", function(){
                $("p").removeClass("efeito");
            });
            $(".leitura").on("mouseover",function(){
                $(".referencia").addClass("efeito");
            }).on("mouseout", function(){
                $(".referencia").removeClass("efeito");
            });
            $(".thumbnails").owlCarousel({
                loop: true,
                margin: 10, /*Coloca uma margem de 15px entre cada item*/
                nav: true, /*Cria botões de navegação pelo tópico*/
                navText: ["Anterior" , "Próximo"],/*Renomeia os botões*/
                autoplay: true, /*Faz com que as imagens passem automaticamente*/
                responsive: {
                    0: {
                        items: 1 /*Quantidade de itens em um mobile*/
                    },
                    480: {
                        items: 3 /*Quantidade de itens em um tablet*/
                    },
                    1000: {
                        items: 4 /*Quantidade de itens em um tela grande*/
                    }
                }
            });
//            $(".thumbnails").owlCarousel({
//                loop: true,
//                margin: 10, /*Coloca uma margem de 15px entre cada item*/
//                nav: true, /*Cria botões de navegação pelo tópico*/
//                navText: ["Anterior" , "Próximo"],/*Renomeia os botões*/
//                autoplay: true /*Faz com que as imagens passem automaticamente*/
////                responsive: {
////                    0: {
////                        items: 1 /*Quantidade de itens em um mobile*/
////                    },
////                    480: {
////                        items: 3 /*Quantidade de itens em um tablet*/
////                    },
////                    1000: {
////                        items: 4 /*Quantidade de itens em um tela grande*/
////                    }
////                }
//            });
        });
//        
//        $(document).ready(function(){
//            $(".fa").on("mouseover",function(){
//                $(".fa-facebook").addClass("efeito");
//            }).on("mouseout",function(){
//                $(".fa-facebook").removeClass("efeito");
//            }).on("mouseover",function(){
//                $(".fa-twitter").addClass("efeito");
//            }).on("mouseout",function(){
//                $(".fa-twitter").removeClass("efeito");
//            }).on("mouseover",function(){
//                $(".fa-instagram").addClass("efeito");
//            }).on("mouseout",function(){
//                $(".fa-instagram").removeClass("efeito");
//            }).on("mouseover",function(){
//                $(".fa-google-plus").addClass("efeito");
//            }).on("mouseout",function(){
//                $(".fa-google-plus").removeClass("efeito");
//            }).on("mouseover",function(){
//                $(".fa-youtube").addClass("efeito");
//            }).on("mouseout",function(){
//                $(".fa-youtube").removeClass("efeito");
//            });
//        });