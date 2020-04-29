let fontsize = 14;

$(document).ready(() => {
    $('.sidenav').sidenav();
    if(document.getElementsByClassName("truncate")){
        var tr = document.getElementsByClassName("truncate");
        Array.prototype.forEach.call(tr, (t) => {
            t.innerText = t.innerText.slice(0, 60);
        });
    }
});

function openNav(){
    $(".sidenav").sidenav('open');
    document.getElementById('barmob').classList.add("hide");
    document.getElementById("arrownav").classList.remove("hide");
}

function closeNav(){
    $(".sidenav").sidenav("close");
    document.getElementById('barmob').classList.remove("hide");
    document.getElementById("arrownav").classList.add("hide");
}

function policeSize(more) {
    let sizea = document.querySelectorAll('a');
    let sizep = document.querySelectorAll('p');
    let input = document.querySelectorAll('input');
    let label = document.querySelectorAll('label');
    let span = document.querySelectorAll("span");
    let h3 = document.querySelectorAll('h3');
    let h1 = document.querySelectorAll("h1");
    let h2 = document.querySelectorAll("h2");
    let h4 = document.querySelectorAll("h4");
    let li = document.querySelectorAll("li");
    let td = document.querySelectorAll("td");
    if (more) {
        font = (fontsize + 2) + "px";
        fontsize = fontsize + 2;
    } else {
        font = (fontsize - 2) + "px";
        fontsize = fontsize - 2;
    }
    sizea.forEach((a) => {
        a.style.fontSize = font;
    });
    sizep.forEach((p) => {
        p.style.fontSize = font;
    });
    input.forEach((i) => {
        i.style.fontSize = font;
    });
    label.forEach((l) => {
        l.style.fontSize = font;
    });
    span.forEach((s) => {
        s.style.fontSize = font;
    });
    h3.forEach((h) => {
        h.style.fontSize = font;
    });
    h1.forEach((h) => {
        h.style.fontSize = font;
    });
    h2.forEach((h) => {
        h.style.fontSize = font;
    });
    h4.forEach((h) => {
        h.style.fontSize = font;
    });
    li.forEach((l) => {
        l.style.fontSize = font;
    });
    td.forEach((t) => {
        t.style.fontSize = font;
    });
    console.log(sizea);
    console.log(sizep);
}

function goUp(){
    window.scrollY = 0;
}

function checkPass(){
    var p1 = document.getElementById('passw').value;
    var p2 = document.getElementById('passw2').value;

    if(p1 !== p2){
        echoNotif("Inscription", "Vos mots de passes ne correspondent pas.");
        return false;
    }
}

function checkArticle(){
    var title = document.getElementById('titre').value;
    var categ = document.getElementById('categ').value;
    var auteur = document.getElementById('auteur').value;
    var content = document.getElementById('contenu').value;

    if(title === "" || categ === "" || auteur === "" || content === ""){
        echoNotif("Article", "Veuillez remplir tous les champs.");
        return false;
    }
}

function echoNotif($titre, $text){
    if(document.getElementById('error')){
        document.getElementById('title-error').innerHTML = $titre;
        document.getElementById("text-error").innerHTML = $text;
        document.getElementById('error').classList.add('show-error');
        document.getElementById('error').classList.remove('hide-error');
    } else {
        var err = document.createElement("div");
        err.id = "error";
        err.classList.add("card");
        err.classList.add('rounded');
        err.classList.add("show-error");
        err.innerHTML = '<div id="title-error" class="card-title rounded">\
        '+ $titre + '\
          </div>\
          <div id="text-error" class="card-content">\
          '+ $text +'\
          </div>';

          var before = document.getElementsByTagName("main")[0];
          document.body.insertBefore(err, before);
    }
}

function detectMobile() {
    const toMatch = [
        /Android/i,
        /webOS/i,
        /iPhone/i,
        /iPad/i,
        /iPod/i,
        /BlackBerry/i,
        /Windows Phone/i
    ];

    return toMatch.some((toMatchItem) => {
        return navigator.userAgent.match(toMatchItem);
    });
}

window.addEventListener("scroll", () => {
        if (window.scrollY > 0) {
            setTimeout(() => {
                document.getElementById('content-mag').classList.add("hide");
                document.getElementById("img-mag").classList.add("hide");
            }, 250)
        } else {
            setTimeout(() => {
                document.getElementById("content-mag").classList.remove("hide");
                document.getElementById("img-mag").classList.remove("hide");
            }, 250);
        }
    
        if(window.scrollY > 250){
            setTimeout(() => {
                document.getElementById("goup").classList.remove("hide");
            }, 250);
        } else {
            setTimeout(() => {
                document.getElementById("goup").classList.add("hide");
            }, 250);
        }
    
    if(detectMobile()){
        if(window.scrollY > 0){
            var x = document.getElementById('barmob')
            document.getElementById("barmobdef").classList.add("hide");
            x.classList.add("fixed-left");
            x.classList.remove("sidenav-trigger");
            x.classList.remove("hide");
        } else {
            var x = document.getElementById('barmob')
            x.classList.remove("fixed-left");
            x.classList.add("sidenav-trigger");
            x.classList.add("hide");
            document.getElementById("barmobdef").classList.remove("hide");
        }
    }
});

setInterval(() => {
    if(document.getElementById('error')){
        setTimeout(() => {
            document.getElementById('error').classList.add("hide-error");
        }, 3000)
    }

    if(document.getElementById('success')){
        setTimeout(() => {
            document.getElementById('success').classList.add('hide-error');
        }, 3000)
    }
}, 1000);