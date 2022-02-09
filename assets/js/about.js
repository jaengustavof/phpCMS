$(document).ready(function(){

    show_about(0);
    $(".logoBrands").hide();  
})


let headings = ['ABOUT US', 'WHO WE ARE','WHAT WE DO']; /* The text */
let parrText = [`<span>The way online marketing agencies have</span><br> <span>traditionally created user experiences is </span> <br> <span>broad and generalized. Hollingo is fixing</span><br><span>that with personalization at the core </span><br><span>of what we do.</span> `, `<span>We created Hollingo by blending our</span><br> <span> skills for web development, content strategy, </span> <br> <span> and social media into a powerful, agile team. </span><br><span>Our team of designers, brand strategists, and </span><br><span>project managers partner with you to build</span><br><span>forward-thinking user experiences, so you</span><br><span>can focus on result-driven outcomes.</span> `, `<span>We want to help you grow your traffic,</span><br> <span>sales and brand’s market success. From</span> <br> <span>educational insights posted at the Logic</span><br><span>Lab to our consultative web agency </span><br><span>services, we want to help make your</span><br><span>growth goals a reality, regardless of where</span><br><span>you are now.</span> `]
let txt = "";
let speed = 100; /* The speed/duration of the effect in milliseconds */
let i = 0;
let span1 = "";
let j = 0;
let k = span1.length;
let dots = $(".dot i");
let showBrandsCounter = 0;

function typeWriter() {    
    if (i < txt.length) {
        document.getElementById("demo").innerHTML += txt.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    }
}

function spanUp(){     
    if(j < span1.length){
        $($(span1)[j]).css("opacity", "1");
        $($(span1)[j]).css("top", "0");
        j++;
        setTimeout(spanUp, speed);
    }        
}

function spanDown(){     
    if(k >= 0){
        $($(span1)[k]).css("opacity", "0");
        $($(span1)[k]).css("top", "5%");
        k--;
        setTimeout(spanDown, speed);
    }
}

function show_about(n){ 
    txt = headings[n];
    $(".about_us_text").html(parrText[n]);
    span1 = $(".about_us_text span");
    $(".pic_container_two img").attr("src", "assets/rsc/img/about"+n+".webp");
    $(".pic_container_one").css("width", "95%");
    i = 0;
    $("#demo").fadeIn()
    typeWriter();
    j = 0
    spanUp();
    setTimeout(() => {
        $(".pic_container_two").css("height", "70%");
        setTimeout(() => {
            $(".pic_container_two").css("boxShadow", "4px 4px 15px black");     
            setTimeout(() => {
                $(".pic_container_two img ").css("opacity", "1"); 
            }, 600);                        
        }, 500);         
    }, 300);
    setTimeout(() => {
        hide_about()
    }, 10000);
    setTimeout(()=>{
        if( n <= 1){
            n++;
            show_about(n) 
        }else{
            n = 0;
            show_about(n) 
        }
        
        for(dot of dots){
            replaceClass($(dot), "fas", "far")
        }
        let toChg = $(dots[n])
        replaceClass(toChg, "far", "fas")
    },15000)
}

function hide_about(){    
    $(".pic_container_two").css("boxShadow", "0px 0px 0px"); 
    $("#demo").fadeOut(1000)        
    k = span1.length;
    spanDown()
    setTimeout(() => {
        $(".pic_container_two img ").css("opacity", "0"); 
        
        setTimeout(() => {          
            $(".pic_container_two").css("height", "0%");    
            setTimeout(() => {
                    $(".pic_container_one").css("width", "0%");    
            }, 600);      
        document.getElementById("demo").innerText = '';    
        $(".about_us_text").html('');               
        }, 500);         
    }, 300);            
}

function replaceClass(item, oldClass, newClass){
    if(item.hasClass(oldClass)){
        item.removeClass(oldClass);
    }
    item.addClass(newClass);
}

function showBrands() {
    let order = ["1", "5", "3", "9", "4", "7", "2", "6", "8", "0"];
    let logo = $(".logoBrands");
    let position = order[showBrandsCounter]
    if(showBrandsCounter < order.length){
        $($(logo)[position]).show(500)
    }
    showBrandsCounter++;
    setTimeout(showBrands,300) 
}

function showLines(){
    $(".brow1").css("width", "100%");
    $(".brow1").css("opacity", "1");
    setTimeout(() => {
        $(".brow3").css("width", "100%");
        $(".brow3").css("opacity", "1");
    }, 100);
    setTimeout(() => {
        $(".bcol1").css("height", "100%");
        $(".bcol1").css("opacity", "1"); 
    }, 200);
    setTimeout(() => {
        $(".bcol3").css("height", "100%");
        $(".bcol3").css("opacity", "1"); 
    }, 250);
}

function showAll() {
    showLines()
    setTimeout(() => {
        showBrands()
    }, 1500);
}