

var canadamap = document.getElementById("canada-map"),
    provinceInfo = document.getElementById("info"),
    provinceTitle = document.getElementById("myModalLabel"),
    allProvinces = canadamap.querySelectorAll("g");
    canadamap.addEventListener("click", function(e){ 

        var province = e.target.parentNode;
        if(e.target.nodeName == "path" || e.target.nodeName == "rect" || e.target.nodeName == "text") {
            for (var i=0; i < allProvinces.length; i++) {
                allProvinces[i].classList.remove("active");
            }
            province.classList.add("active");
            var provinceName = province.querySelector("title").innerHTML,
            provincePara = province.querySelector("desc p");
            provinceTitle.innerHTML = "";
            provinceInfo.innerHTML = "";
            provinceTitle.insertAdjacentHTML("afterbegin", "<h2>"+provinceName+"</h2>");
            provinceInfo.insertAdjacentHTML("afterbegin", "<p>"+provincePara.innerHTML+"</p>");
        }
    })