<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fret Happens</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    
</head>
<body>
    <div class="header">
        <a href="index.php" class="title is-2 has-text-white">Fret Happens</a>
        <a href="song-select.php" class="title is-2 has-text-white" >Song Select</a>
        <a href="create.php" class="title is-2 has-text-white">Create+</a>
    </div>
    <div class="guitar-sidebar">
        <div class="string e-string"></div>
        <div class="string a-string"></div>
        <div class="string d-string"></div>
        <div class="string g-string"></div>
        <div class="string b-string"></div>
        <div class="string e2-string"></div>
        <div class="fret fret1"></div>
        <div class="fret fret2"></div>
        <div class="fret fret3"></div>
        <div class="fret fret4"></div>
        <div class="fret fret5"></div>
        <div class="fret fret6"></div>
        <div class="fret fret7"></div>
        <div class="fret fret8"></div>
        <div class="fret fret9"></div>
        <div class="light e-light has-background-primary" id="e-light"></div>
        <div class="light a-light has-background-primary" id="a-light"></div>
        <div class="light d-light has-background-primary" id="d-light"></div>
        <div class="light g-light has-background-primary" id="g-light"></div>
        <div class="light b-light has-background-primary" id="b-light"></div>
        <div class="light e2-light has-background-primary" id="e2-light"></div>
        <div class="guide-section">
            <!-- e-string -->
            <div class="guide-dot gd1">F</div>
            <div class="guide-dot gd2">F#</div>
            <div class="guide-dot gd3">G</div>
            <div class="guide-dot gd4">G#</div>
            <div class="guide-dot gd5">A</div>
            <div class="guide-dot gd6">A#</div>
            <div class="guide-dot gd7">B</div>
            <div class="guide-dot gd8">C</div>
            <div class="guide-dot gd9">C#</div>
            <div class="guide-dot gd10">D</div>
            <!-- a-string -->
            <div class="guide-dot gd11">A#</div>
            <div class="guide-dot gd12">B</div>
            <div class="guide-dot gd13">C</div>
            <div class="guide-dot gd14">C#</div>
            <div class="guide-dot gd15">D</div>
            <div class="guide-dot gd16">D#</div>
            <div class="guide-dot gd17">E</div>
            <div class="guide-dot gd18">F</div>
            <div class="guide-dot gd19">F#</div>
            <div class="guide-dot gd20">G</div>
            <!-- d-string -->
            <div class="guide-dot gd21">D#</div>
            <div class="guide-dot gd22">E</div>
            <div class="guide-dot gd23">F</div>
            <div class="guide-dot gd24">F#</div>
            <div class="guide-dot gd25">G</div>
            <div class="guide-dot gd26">G#</div>
            <div class="guide-dot gd27">A</div>
            <div class="guide-dot gd28">A#</div>
            <div class="guide-dot gd29">B</div>
            <div class="guide-dot gd30">C</div>
            <!-- g-string -->
            <div class="guide-dot gd31">G#</div>
            <div class="guide-dot gd32">A</div>
            <div class="guide-dot gd33">A#</div>
            <div class="guide-dot gd34">B</div>
            <div class="guide-dot gd35">C</div>
            <div class="guide-dot gd36">C#</div>
            <div class="guide-dot gd37">D</div>
            <div class="guide-dot gd38">D#</div>
            <div class="guide-dot gd39">E</div>
            <div class="guide-dot gd40">F</div>
            <!-- b-string -->
            <div class="guide-dot gd41">C</div>
            <div class="guide-dot gd42">C#</div>
            <div class="guide-dot gd43">D</div>
            <div class="guide-dot gd44">D#</div>
            <div class="guide-dot gd45">E</div>
            <div class="guide-dot gd46">F</div>
            <div class="guide-dot gd47">F#</div>
            <div class="guide-dot gd48">G</div>
            <div class="guide-dot gd49">G#</div>
            <div class="guide-dot gd50">A</div>
            <!-- e2-string -->
            <div class="guide-dot gd51">F</div>
            <div class="guide-dot gd52">F#</div>
            <div class="guide-dot gd53">G</div>
            <div class="guide-dot gd54">G#</div>
            <div class="guide-dot gd55">A</div>
            <div class="guide-dot gd56">A#</div>
            <div class="guide-dot gd57">B</div>
            <div class="guide-dot gd58">C</div>
            <div class="guide-dot gd59">C#</div>
            <div class="guide-dot gd60">D</div>
        </div>
        <div class="fretboard-options">
            <button class="button is-medium sheet-chord-button" onclick="showChordSheet()">Chord Sheet</button>
            <button class="button is-medium lyrics-button" onclick="showLyrics()">Lyrics</button>
            <button class="button is-medium chords-button" onclick="showChords()">Chords</button>
            <button class="button is-medium guide-button" onclick="showGuide()">Guide</button>
        </div>

    </div>
    
    <div class="chord-buttons">
        <h1 class="title is-4 has-text-warning has-text-left">Major</h1>
        <button class="button is-primary" onclick="chord('C')">C</button>
        <button class="button is-primary" onclick="chord('D')">D</button>
        <button class="button is-primary" onclick="chord('E')">E</button>
        <button class="button is-primary" onclick="chord('F')">F</button>
        <button class="button is-primary" onclick="chord('G')">G</button>
        <button class="button is-primary" onclick="chord('A')">A</button>
        <button class="button is-primary" onclick="chord('B')">B</button><br><br>

        <h1 class="title is-4 has-text-warning has-text-centered">Major 7ths</h1>
        <button class="button is-primary" onclick="chord('C7')">C7</button>
        <button class="button is-primary" onclick="chord('D7')">D7</button>
        <button class="button is-primary" onclick="chord('E7')">E7</button>
        <button class="button is-primary" onclick="chord('F7')">F7</button>
        <button class="button is-primary" onclick="chord('G7')">G7</button>
        <button class="button is-primary" onclick="chord('A7')">A7</button>
        <button class="button is-primary" onclick="chord('B7')">B7</button><br><br>

        <h1 class="title is-4 has-text-warning has-text-right" >Minor</h1>
        <button class="button is-primary" onclick="chord('c')">Cm</button>
        <button class="button is-primary" onclick="chord('d')">Dm</button>
        <button class="button is-primary" onclick="chord('e')">Em</button>
        <button class="button is-primary" onclick="chord('f')">Fm</button>
        <button class="button is-primary" onclick="chord('g')">Gm</button>
        <button class="button is-primary" onclick="chord('a')">Am</button>
        <button class="button is-primary" onclick="chord('b')">Bm</button><br><br>
    </div>
    <div class="lyrics-section title is-1 has-text-white has-text-centered">
        <p>
            Happy birthday to you. <br>
            Happy birthday to you. <br>
            Happy birthday to ...... <br>
            Happy birthday to you!
        </p>
    </div>
    <div class="sheet-chord title is-1 has-text-white has-text-centered">|Dm7 G7|Gm7 C7| F | F7 |</div>
    <!-- <div class="extraspace"></div> -->
</body>
<script>
    const eString = document.querySelector('.e-string');
    const aString = document.querySelector('.a-string');
    const dString = document.querySelector('.d-string');
    const gString = document.querySelector('.g-string');
    const bString = document.querySelector('.b-string');
    const e2String = document.querySelector('.e2-string');

    const eLight = document.getElementById('e-light');
    const aLight = document.getElementById('a-light');
    const dLight = document.getElementById('d-light');
    const gLight = document.getElementById('g-light');
    const bLight = document.getElementById('b-light');
    const e2Light = document.getElementById('e2-light');


    function fingerPosition(note) {
        //may have to add a class for fadein/fadeout and timeout on each light.
        // or add an animation to the light itself anytime it is called.
        switch(note) {
            //e-string
            case "e-f":
                eLight.innerHTML = "F";
                eLight.style.visibility = "visible";
                eLight.style.top = '3%';
                eLight.style.left = '-20px';
                eLight.classList.add("fade-animation");
                setTimeout(function() {
                eLight.classList.remove("fade-animation");
                eLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "e-f#":
            case "e-gb": 
                eLight.innerHTML = "F#";
                if(note === "e-gb") {eLight.innerHTML = "Gb";}
                eLight.style.visibility = "visible";
                eLight.style.top = '13%';
                eLight.style.left = '-20px';
                eLight.classList.add("fade-animation");
                setTimeout(function() {
                eLight.classList.remove("fade-animation");
                eLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "e-g": 
                eLight.innerHTML = "G";
                eLight.style.visibility = "visible";
                eLight.style.top = '23%';
                eLight.style.left = '-20px';
                eLight.classList.add("fade-animation");
                setTimeout(function() {
                eLight.classList.remove("fade-animation");
                eLight.style.visibility = "hidden";
            }, 1500);
                
            break;
            case "e-g#": 
            case "e-ab": 
                eLight.innerHTML = "g#";
                if(note === "e-ab") {eLight.innerHTML = "Ab";}
                eLight.style.visibility = "visible";
                eLight.style.top = '33%';
                eLight.style.left = '-20px';
                eLight.classList.add("fade-animation");
                setTimeout(function() {
                eLight.classList.remove("fade-animation");
                eLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "e-a": 
                eLight.innerHTML = "A";
                eLight.style.visibility = "visible";
                eLight.style.top = '43%';
                eLight.style.left = '-20px';
                eLight.classList.add("fade-animation");
                setTimeout(function() {
                eLight.classList.remove("fade-animation");
                eLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "e-a#": 
            case "e-bb": 
                eLight.innerHTML = "a#";
                if(note === "e-bb") {eLight.innerHTML = "Bb";}
                eLight.style.visibility = "visible";
                eLight.style.top = '53%';
                eLight.style.left = '-20px';
                eLight.classList.add("fade-animation");
                setTimeout(function() {
                eLight.classList.remove("fade-animation");
                eLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "e-b": 
                eLight.innerHTML = "B";
                eLight.style.visibility = "visible";
                eLight.style.top = '63%';
                eLight.style.left = '-20px';
                eLight.classList.add("fade-animation");
                setTimeout(function() {
                eLight.classList.remove("fade-animation");
                eLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "e-c": 
                eLight.innerHTML = "C";
                eLight.style.visibility = "visible";
                eLight.style.top = '73%';
                eLight.style.left = '-20px';
                eLight.classList.add("fade-animation");
                setTimeout(function() {
                eLight.classList.remove("fade-animation");
                eLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "e-c#": 
            case "e-db": 
                eLight.innerHTML = "C#";
                if(note === "e-db") {eLight.innerHTML = "Db";}
                eLight.style.visibility = "visible";
                eLight.style.top = '83%';
                eLight.style.left = '-20px';
                eLight.classList.add("fade-animation");
                setTimeout(function() {
                eLight.classList.remove("fade-animation");
                eLight.style.visibility = "hidden";
            }, 1500);
            break;
            //a-string
            case "a-a#": 
            case "a-bb": 
                aLight.innerHTML = "A#";
                if(note === "a-bb") {aLight.innerHTML = "Bb";}
                aLight.style.visibility = "visible";
                aLight.style.top = "3%";
                aLight.style.left = "20px";
                aLight.classList.add("fade-animation");
                setTimeout(function() {
                aLight.classList.remove("fade-animation");
                aLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "a-b": 
                aLight.innerHTML = "B";
                aLight.style.visibility = "visible";
                aLight.style.top = "13%";
                aLight.style.left = "20px";
                aLight.classList.add("fade-animation");
                setTimeout(function() {
                aLight.classList.remove("fade-animation");
                aLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "a-c": 
                aLight.innerHTML = "C";
                aLight.style.visibility = "visible";
                aLight.style.top = "23%";
                aLight.style.left = "20px";
                aLight.classList.add("fade-animation");
                setTimeout(function() {
                aLight.classList.remove("fade-animation");
                aLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "a-c#": 
            case "a-db": 
                aLight.innerHTML = "C#";
                if(note === "a-db") {aLight.innerHTML = "Db";}
                aLight.style.visibility = "visible";
                aLight.style.top = "33%";
                aLight.style.left = "20px";
                aLight.classList.add("fade-animation");
                setTimeout(function() {
                aLight.classList.remove("fade-animation");
                aLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "a-d": 
                aLight.innerHTML = "D";
                aLight.style.visibility = "visible";
                aLight.style.top = "43%";
                aLight.style.left = "20px";
                aLight.classList.add("fade-animation");
                setTimeout(function() {
                aLight.classList.remove("fade-animation");
                aLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "a-d#":
            case "a-eb": 
                aLight.innerHTML = "D#";
                if(note === "a-eb") {aLight.innerHTML = "Eb";}
                aLight.style.visibility = "visible";
                aLight.style.top = "53%";
                aLight.style.left = "20px";
                aLight.classList.add("fade-animation");
                setTimeout(function() {
                aLight.classList.remove("fade-animation");
                aLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "a-e": 
                aLight.innerHTML = "E";
                aLight.style.visibility = "visible";
                aLight.style.top = "63%";
                aLight.style.left = "20px";
                aLight.classList.add("fade-animation");
                setTimeout(function() {
                aLight.classList.remove("fade-animation");
                aLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "a-f": 
                aLight.innerHTML = "F";
                aLight.style.visibility = "visible";
                aLight.style.top = "73%";
                aLight.style.left = "20px";
                aLight.classList.add("fade-animation");
                setTimeout(function() {
                aLight.classList.remove("fade-animation");
                aLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "a-f#": 
            case "a-gb":
                aLight.innerHTML = "F#";
                if(note === "a-gb") {aLight.innerHTML = "Gb";}
                aLight.style.visibility = "visible";
                aLight.style.top = "83%";
                aLight.style.left = "20px";
                aLight.classList.add("fade-animation");
                setTimeout(function() {
                aLight.classList.remove("fade-animation");
                aLight.style.visibility = "hidden";
            }, 1500);
            break;
            //d-string
            case "d-d#": 
            case "d-eb": 
                dLight.innerHTML = "D#";
                if(note === "d-eb") {dLight.innerHTML = "Eb";}
                dLight.style.visibility = "visible";
                dLight.style.top = "3%";
                dLight.style.left = "60px";
                dLight.classList.add("fade-animation");
                setTimeout(function() {
                dLight.classList.remove("fade-animation");
                dLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "d-e": 
                dLight.innerHTML = "E";
                dLight.style.visibility = "visible";
                dLight.style.top = "13%";
                dLight.style.left = "60px";
                dLight.classList.add("fade-animation");
                setTimeout(function() {
                dLight.classList.remove("fade-animation");
                dLight.style.visibility = "hidden";
            }, 1500);

            break;
            case "d-f": 
                dLight.innerHTML = "F";
                dLight.style.visibility = "visible";
                dLight.style.top = "23%";
                dLight.style.left = "60px";
                dLight.classList.add("fade-animation");
                setTimeout(function() {
                dLight.classList.remove("fade-animation");
                dLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "d-f#": 
            case "d-gb": 
                dLight.innerHTML = "F#";
                if(note === "d-gb") {dLight.innerHTML = "Gb";}
                dLight.style.visibility = "visible";
                dLight.style.top = "33%";
                dLight.style.left = "60px";
                dLight.classList.add("fade-animation");
                setTimeout(function() {
                dLight.classList.remove("fade-animation");
                dLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "d-g": 
                dLight.innerHTML = "G";
                dLight.style.visibility = "visible";
                dLight.style.top = "43%";
                dLight.style.left = "60px";
                dLight.classList.add("fade-animation");
                setTimeout(function() {
                dLight.classList.remove("fade-animation");
                dLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "d-g#":
            case "d-ab": 
                dLight.innerHTML = "G#";
                if(note === "d-ab") {dLight.innerHTML = "Ab";}
                dLight.style.visibility = "visible";
                dLight.style.top = "53%";
                dLight.style.left = "60px";
                dLight.classList.add("fade-animation");
                setTimeout(function() {
                dLight.classList.remove("fade-animation");
                dLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "d-a": 
                dLight.innerHTML = "A";
                dLight.style.visibility = "visible";
                dLight.style.top = "63%";
                dLight.style.left = "60px";
                dLight.classList.add("fade-animation");
                setTimeout(function() {
                dLight.classList.remove("fade-animation");
                dLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "d-a#":
            case "d-bb": 
                dLight.innerHTML = "A#";
                if(note === "d-bb") {dLight.innerHTML = "Bb";}
                dLight.style.visibility = "visible";
                dLight.style.top = "73%";
                dLight.style.left = "60px";
                dLight.classList.add("fade-animation");
                setTimeout(function() {
                dLight.classList.remove("fade-animation");
                dLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "d-a": 
                dLight.innerHTML = "A";
                dLight.style.visibility = "visible";
                dLight.style.top = "83%";
                dLight.style.left = "60px";
                dLight.classList.add("fade-animation");
                setTimeout(function() {
                dLight.classList.remove("fade-animation");
                dLight.style.visibility = "hidden";
            }, 1500);
            break;
            //g-light
            case "g-g#":
            case "g-ab":  
                gLight.innerHTML = "G#";
                if(note === "g-ab") {gLight.innerHTML = "Ab";}
                gLight.style.visibility = "visible";
                gLight.style.top = "3%";
                gLight.style.left = "100px";
                gLight.classList.add("fade-animation");
                setTimeout(function() {
                gLight.classList.remove("fade-animation");
                gLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "g-a":
                gLight.innerHTML = "A";
                gLight.style.visibility = "visible";
                gLight.style.top = "13%";
                gLight.style.left = "100px";
                gLight.classList.add("fade-animation");
                setTimeout(function() {
                gLight.classList.remove("fade-animation");
                gLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "g-a#":
            case "g-bb":  
                gLight.innerHTML = "A#";
                if(note === "g-bb") {gLight.innerHTML = "Bb";}
                gLight.style.visibility = "visible";
                gLight.style.top = "23%";
                gLight.style.left = "100px";
                gLight.classList.add("fade-animation");
                setTimeout(function() {
                gLight.classList.remove("fade-animation");
                gLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "g-b":
                gLight.innerHTML = "B";
                gLight.style.visibility = "visible";
                gLight.style.top = "33%";
                gLight.style.left = "100px";
                gLight.classList.add("fade-animation");
                setTimeout(function() {
                gLight.classList.remove("fade-animation");
                gLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "g-c":
                gLight.innerHTML = "C";
                gLight.style.visibility = "visible";
                gLight.style.top = "43%";
                gLight.style.left = "100px";
                gLight.classList.add("fade-animation");
                setTimeout(function() {
                gLight.classList.remove("fade-animation");
                gLight.style.visibility = "hidden";
            }, 1500);
            break;
            //b-light
            case "b-c": 
                bLight.innerHTML = "C";
                bLight.style.visibility = "visible";
                bLight.style.top = "3%";
                bLight.style.left = "140px";
                bLight.classList.add("fade-animation");
                setTimeout(function() {
                bLight.classList.remove("fade-animation");
                bLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "b-c#": 
            case "b-db": 
                bLight.innerHTML = "C#";
                if(note === "b-db") {bLight.innerHTML = "Db";}
                bLight.style.visibility = "visible";
                bLight.style.top = "13%";
                bLight.style.left = "140px";
                bLight.classList.add("fade-animation");
                setTimeout(function() {
                bLight.classList.remove("fade-animation");
                bLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "b-d": 
                bLight.innerHTML = "D";
                bLight.style.visibility = "visible";
                bLight.style.top = "23%";
                bLight.style.left = "140px";
                bLight.classList.add("fade-animation");
                setTimeout(function() {
                bLight.classList.remove("fade-animation");
                bLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "b-d#":
            case "b-eb":  
                bLight.innerHTML = "D#";
                if(note === "b-eb") {bLight.innerHTML = "Eb";}
                bLight.style.visibility = "visible";
                bLight.style.top = "33%";
                bLight.style.left = "140px";
                bLight.classList.add("fade-animation");
                setTimeout(function() {
                bLight.classList.remove("fade-animation");
                bLight.style.visibility = "hidden";
            }, 1500);
            break;
            case "b-e":  
                bLight.innerHTML = "E";
                bLight.style.visibility = "visible";
                bLight.style.top = "43%";
                bLight.style.left = "140px";
                bLight.classList.add("fade-animation");
                setTimeout(function() {
                bLight.classList.remove("fade-animation");
                bLight.style.visibility = "hidden";
            }, 1500);
            break;
            //e2-light
            case "e2-f": 
                e2Light.innerHTML = "F";
                e2Light.style.visibility = "visible";
                e2Light.style.top = "3%";
                e2Light.style.left = "180px";
                e2Light.classList.add("fade-animation");
                setTimeout(function() {
                e2Light.classList.remove("fade-animation");
                e2Light.style.visibility = "hidden";
            }, 1500);
            break;
            case "e2-f#":
            case "e2-gb":  
                e2Light.innerHTML = "F#";
                if(note === "e2-gb") {e2Light.innerHTML = "Gb";}
                e2Light.style.visibility = "visible";
                e2Light.style.top = "13%";
                e2Light.style.left = "180px";
                e2Light.classList.add("fade-animation");
                setTimeout(function() {
                e2Light.classList.remove("fade-animation");
                e2Light.style.visibility = "hidden";
            }, 1500);

            break;
            case "e2-g": 
                e2Light.innerHTML = "G";
                e2Light.style.visibility = "visible";
                e2Light.style.top = "23%";
                e2Light.style.left = "180px";
                e2Light.classList.add("fade-animation");
                setTimeout(function() {
                e2Light.classList.remove("fade-animation");
                e2Light.style.visibility = "hidden";
            }, 1500);
            break;
            case "e2-g#":
            case "e2-ab":  
                e2Light.innerHTML = "G#";
                if(note === "e2-ab") {e2Light.innerHTML = "Ab";}
                e2Light.style.visibility = "visible";
                e2Light.style.top = "33%";
                e2Light.style.left = "180px";
                e2Light.classList.add("fade-animation");
                setTimeout(function() {
                e2Light.classList.remove("fade-animation");
                e2Light.style.visibility = "hidden";
            }, 1500);
            break;
            case "e2-a":  
                e2Light.innerHTML = "A";
                e2Light.style.visibility = "visible";
                e2Light.style.top = "43%";
                e2Light.style.left = "180px";
                e2Light.classList.add("fade-animation");
                setTimeout(function() {
                e2Light.classList.remove("fade-animation");
                e2Light.style.visibility = "hidden";
            }, 1500);
            break;
        }
    }
    function strum(string) {
        string.classList.add("light-up");
        setTimeout(function() {
            string.classList.remove("light-up");
        }, 1800);
    }
    function chord(chord) {
        switch(chord) {
            //Major
            case "C": 
                fingerPosition("a-c");
                fingerPosition("d-e");
                fingerPosition("b-c");
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
                break;
            case "D":
                fingerPosition("g-a"); 
                fingerPosition("b-d"); 
                fingerPosition("e2-f#"); 
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "E":
                fingerPosition("a-b"); 
                fingerPosition("d-e"); 
                fingerPosition("g-g#"); 
                strum(eString);
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "F":
                fingerPosition("e-f"); 
                fingerPosition("a-c"); 
                fingerPosition("d-f"); 
                fingerPosition("g-a"); 
                fingerPosition("b-c"); 
                fingerPosition("e2-f"); 
                strum(eString);
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "G": 
                fingerPosition("e-g");
                fingerPosition("a-b");
                fingerPosition("e2-g");
                strum(eString);
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "A":
                fingerPosition("d-e"); 
                fingerPosition("g-a"); 
                fingerPosition("b-c#"); 
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "B":
                fingerPosition("a-b"); 
                fingerPosition("d-f#"); 
                fingerPosition("g-b"); 
                fingerPosition("b-d#"); 
                fingerPosition("e2-f#"); 
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            //minor
            case "c": 
                fingerPosition("a-c");
                fingerPosition("d-g");
                fingerPosition("g-c");
                fingerPosition("b-d#");
                fingerPosition("e2-g");
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
                break;
            case "d":
                fingerPosition("g-a"); 
                fingerPosition("b-d"); 
                fingerPosition("e2-f"); 
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "e": 
                fingerPosition("a-b");
                fingerPosition("d-e");
                strum(eString);
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "f":
                fingerPosition("e-f"); 
                fingerPosition("a-c"); 
                fingerPosition("d-f"); 
                fingerPosition("g-g#"); 
                fingerPosition("b-c"); 
                fingerPosition("e2-f"); 
                strum(eString);
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "g": 
                fingerPosition("e-g");
                fingerPosition("a-d");
                fingerPosition("d-g");
                fingerPosition("g-a#");
                fingerPosition("b-d");
                fingerPosition("e2-g");
                strum(eString);
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "a":
                fingerPosition("d-e"); 
                fingerPosition("g-a"); 
                fingerPosition("b-c"); 
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "b":
                fingerPosition("a-b"); 
                fingerPosition("g-b"); 
                fingerPosition("b-d"); 
                fingerPosition("e2-f#"); 
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            //Major 7ths
            case "C7": 
                fingerPosition("a-c");
                fingerPosition("d-e");
                fingerPosition("g-a#");
                fingerPosition("b-c");
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
                break;
            case "D7":
                fingerPosition("g-a"); 
                fingerPosition("b-c"); 
                fingerPosition("e2-f#"); 
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "E7":
                fingerPosition("a-b"); 
                fingerPosition("g-g#"); 
                strum(eString);
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "F7":
                fingerPosition("e-f"); 
                fingerPosition("a-c"); 
                fingerPosition("d-d#"); 
                fingerPosition("g-a"); 
                fingerPosition("b-c"); 
                fingerPosition("e2-f"); 
                strum(eString);
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "G7": 
                fingerPosition("e-g");
                fingerPosition("a-b");
                fingerPosition("e2-f");
                strum(eString);
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "A7":
                fingerPosition("d-e"); 
                fingerPosition("b-c#"); 
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
            case "B7":
                fingerPosition("a-b"); 
                fingerPosition("d-d#"); 
                fingerPosition("g-a"); 
                fingerPosition("e2-f#"); 
                strum(aString);
                strum(dString);
                strum(gString);
                strum(bString);
                strum(e2String);
            break;
        }
    }
    function showGuide() {
        const guideButton = document.querySelector('.guide-button');
        const guideSection = document.querySelector('.guide-section');

        guideSection.classList.toggle('visible');
        guideButton.classList.toggle('is-primary');//should change it to green. FIX!!!
    }
    function showChords() {
        const chords = document.querySelector('.chord-buttons');
        const chordsButton = document.querySelector('.chords-button');
        
        chords.classList.toggle('visible');
        chordsButton.classList.toggle('is-primary');//should change it to green. FIX!!!
    }
    function showLyrics() {
        const lyricsSection = document.querySelector('.lyrics-section');
        const button = document.querySelector('.lyrics-button')

        lyricsSection.classList.toggle('visible');
        button.classList.toggle('is-primary');//should change it to green. FIX!!!


    }
    function showChordSheet() {
        const sheetChord = document.querySelector('.sheet-chord');
        const button = document.querySelector('.sheet-chord-button');

        sheetChord.classList.toggle('visible');
        button.classList.toggle('is-primary');//should change it to green. FIX!!!
    }

    // chord("F"); 
    // chord("e");
</script>

<!-- TO DO
- create a logo



options lining the fretboard:
- guide - add string names up top and fret numbers.
- a lyrics section activated or not
  link each line to each bar,
- chord sheet showing the next chords for the song in bars.
  (like |Dm7 G7|Gm7 C7|F   |F7   |)
-->
</html>