
$(document).ready(function(){

    //AREA li //
    li_containers();
    //SCROLL EVENTS//
    scrollFunction();

    if(document.title.indexOf("Contact") > 1){
        $(".itemRight ").hide()
    }

    $(".fa-times-circle").click(function(){
        $(".menuMobileLinks").css("top", "-100%")
    })

    $(".fa-bars").click(function(){
        $(".menuMobileLinks").css("top", "0%")
    })

  });

function li_containers(){
    var count = 10;
    while(count >=1){
        $(".circles").append("<li></li>");
        count --;
    }
    var count2 = 1;
    
    while(count2 <10){
        $(".area3").append("<div class='light x"+count2+"'></div>");
        count2 ++;
    }
}

function activarDesactivar(num){
    let items = $(".itemRight");
    for (item of items){
        $(item).removeClass("selected");
    }
    $(items[num]).addClass("selected");
}

function sectionContent(position, span1, span2, sectionTextp){
    $($(".section_indexNo")[position]).css("opacity", "1");
    $($(".backImg")[position]).css("opacity", "1");
    $($(".intro_first_text hr")[position]).css("width", "13%");
    setTimeout(() => {
        $($(".sectionText h2 span")[span1]).css("opacity", "1");
        setTimeout(() => {
            $($(".sectionText h2 span")[span2]).css("opacity", "1");
        }, 200);
        setTimeout(() => {
            $($(".section_text_p")[sectionTextp]).css("opacity", "1");
        }, 400);
    }, 500);           
}

function sectionContentProject(position){
    $($(".project_example_pic")[position]).css("opacity", "1");
    $($(".project_example_text")[position]).css("opacity", "1");
    setTimeout(() => {
        $($(".project_example_text")[position]).css("width", "70%");
    }, 200);
    setTimeout(() => {
        
        $($(".project_example_text span")[position]).css("opacity", "1");
    }, 500);
    setTimeout(() => {
        $($(".project_example_text h4")[position]).css("opacity", "1");
    }, 800);
    setTimeout(() => {
        $($(".project_example_text h3")[position]).css("opacity", "1");
        $($(".project_example_text h3")[position]).css("top", "0");
    }, 900);
    var position2 = position +3
    setTimeout(() => {
        sectionContentProject(position2)
    }, 1000);
    
}

function scrollFunction() {
    var prevScrollpos = window.pageYOffset;
    let page = document.title;



    $(window).scroll(function () {
        let scroll = $(window.scrollY)[0];
        let currentScrollPos = window.pageYOffset;
        //console.log(scroll)
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("menuDesktop").style.top = "5%";
          } else {
            document.getElementById("menuDesktop").style.top = "-100%";
          }
        prevScrollpos = currentScrollPos;

        if(scroll >= 467){
            $("nav").css("mix-blend-mode", "difference") 
            $(".sticky").css("mix-blend-mode", "difference") 
        }else{
            $("nav").css("mix-blend-mode", "normal")
            $(".sticky").css("mix-blend-mode", "normal") 
        }

        if(page.indexOf("Home") > 1){
            let sectionOneTop = $("#sectionOne").offset().top;
            let sectionTwoTop = $("#sectionTwo").offset().top;
            let sectionThreeTop = $("#sectionThree").offset().top;
            let intViewportHeight = window.innerHeight*0.5;
            sectionOneTop -= intViewportHeight;
            sectionTwoTop -= intViewportHeight;
            sectionThreeTop -= intViewportHeight;
            if (scroll <= sectionOneTop) {
                activarDesactivar(0) 
            }else if(scroll >= sectionOneTop && scroll < sectionTwoTop) {    
                console.log(sectionOneTop)
                sectionContent(0, 0, 1, 0)
                activarDesactivar(1);
            }else if(scroll >= sectionTwoTop && scroll < sectionThreeTop) {
                sectionContent(1, 2, 3, 1)
                activarDesactivar(2);
            }else if(scroll >= sectionThreeTop) {
                sectionContent(2, 4, 5, 2)
                activarDesactivar(3);
            }
        }else if(page.indexOf("Projects") > 1){
            if (scroll <= 467) {
                activarDesactivar(0);             
            }else if(scroll >= 468 && scroll < 2800) {          
                activarDesactivar(1);
                if($($(".project_example_pic")[0]).css("opacity") != 1){
                    sectionContentProject(0);
                }
                
                if(scroll >=933 && scroll <= 1398){
                    if($($(".project_example_pic")[1]).css("opacity") != 1){
                        sectionContentProject(1);
                    }
                }else if(scroll >=933){
                    if($($(".project_example_pic")[2]).css("opacity") != 1){
                        sectionContentProject(2);
                    }
                }
            }else if(scroll >= 2800 && scroll < 3467) {
                activarDesactivar(2);
            }else if(scroll >= 3467) {
                activarDesactivar(3);
            }

        }else if(page.indexOf("About") > 1){

            if (scroll <= 467) {
                activarDesactivar(0);             
            }else if(scroll >= 468 && scroll < 1660) {          
                activarDesactivar(1);
            }else if(scroll >= 1660 && scroll < 2200) {
                activarDesactivar(2);        
            }else if(scroll >= 2200) {
                activarDesactivar(3);
                showAll()
            }
        }
        
    });
}




