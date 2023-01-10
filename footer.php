<footer>
    <div class="info-container">
        <div class="contact-content">
            <h2>Content</h2>
            <ul>
                <li>
                    Mail :
                </li>
                <li>
                    Téléphone :
                </li>
                <li>
                    Réseaux sociaux :
                </li>
            </ul>
        </div>
        <svg width="1" height="180">
            <rect width="100%" height="100%" fill="black" />
        </svg>
        <div class="map-content">
            <h2>Adresse</h2>       
            <ul>
                <li>
                    Transport :
                </li>
            </ul>
        </div>
    </div>

    <div class="law-content">
        <p>Copyright La TABL Team</p>
        <h2>Mentions légales</h2>
        <a href="#home"><p>HAUT DE PAGE</p></a>
    </div>
</footer>
<style>
    footer {
    background-color: white;
    width: 100%;
    height: 40vh;
    padding: 0.5em 1em 0.5em 1em;
}

.info-container {
    display: flex;
    width: 100%;
    height: 80%;
}

.info-container div {
    width: 50%;
}

.info-container div h2 {
    text-align: center;
}

.info-container ul {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 100%;
    height: 70%;
}

.map-content {
    padding: 0 0 0 1em;
}

.law-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    height: 20%;
    font-family: 'Poppins', sans-serif;
    font-size: 0.8em;
}

.law-content h2 {
    font-size: 1.5em;
}

.law-content a {
    color: black;
}
</style>