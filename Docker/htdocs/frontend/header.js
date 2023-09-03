   

function getHeader(){
    
    document.getElementById("header").innerHTML =  
        `<header>
        <div class="left">
            <!--<div class="logo">
                FabBook
            </div>--> <!--FALLS WIR UNSER LOGO NUR ALS TEXT GESTALTEN WOLLEN-->
            <img src="../photos/Fabmobil-Logo-300x300.jpg">
        </div>
        <div class="links">
            <div class="kalender">
                <a class="headerlink" href="../Kalenderpage/kalender4.html">
                    Kalender
                </a>
            </div>
            <div class="kontakte">
                <a class="headerlink" href="../Kontaktpage/Kontakte.html">
                    Kontakte
                </a>
            </div>

            <div class="name"> <!--DYNAMISCHER LINK ÜBER SESSION TOKEN-->
                <a class="headerlink" href="../Profilepage/Profil.html">
                    Profil
                </a>
            </div>
            <div class="admin"> <!--DIV FÜR ADMIN-->

            </div>
        </div>
        <div class="right"> <!--PFP MUSS HIER NOCH REINGEDROPT WERDEN-->
            <img src="/photos/Profilbild.jpg">
        </div>
    </header>`;
    
}

getHeader();