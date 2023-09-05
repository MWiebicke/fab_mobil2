   

async function getHeader(){
    const request = await fetch("../../php_ausgabe/headerrollen.php");
    const data = (await request.json())[0];
    if (data.rollen_id == "0") {
        document.getElementById("header").innerHTML =  
        `<header>
        <div class="left">
            <img src="../photos/Fabmobil-Logo-300x300.jpg">
        </div>
        <div class="links">
            <div class="einzeln">
                <a class="headerlink" href="../Kalenderpage/kalender4.html">
                    Kalender
                </a>
            </div>
            <div class="einzeln">
                <a class="headerlink" href="../Kontaktpage/Kontakte.html">
                    Kontakte
                </a>
            </div>
            <div class="einzeln">
                <a class="headerlink" href="../Adminpage/Nutzer.html">
                    Nutzer
                </a>
            </div>
            <div class="einzeln">
                <a class="headerlink" href="../Adminpage/Veranstaltung.html">
                    Veranstaltung
                </a>
            </div>
            <div class="einzeln">
                <a class="headerlink" href="../Adminpage/Workshop.html">
                    Workshop
                </a>     
            </div>
        </div>  
        <div class="right">
            <a href="../Profilepage/Profil.html">
                <img src="/photos/Profilbild.jpg">
            </a>
        </div>
    </header>`;
    }else{
        document.getElementById("header").innerHTML = 
        `<header>
        <div class="left">
            <img src="../photos/Fabmobil-Logo-300x300.jpg">
        </div>

        <div class="links">
            <div class="einzeln">
                <a class="headerlink" href="../Kalenderpage/kalender4.html">
                    Kalender
                </a>
            </div>
            <div class="einzeln">
                <a class="headerlink" href="../Kontaktpage/Kontakte.html">
                    Kontakte
                </a>
            </div>
        </div>
        
        <div class="right">
            <a href="../Profilepage/Profil.html">
                <img src="/photos/Profilbild.jpg">
            </a>
        </div>
        </header>`;
    }
    
    
}

getHeader();
